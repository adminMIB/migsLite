<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $client_id  = $request->header("client-id");
        $client_secret  = $request->header("client-secret");
        $client = DB::table('client_key')->where("client_key_id", $client_id)->where("client_key_status", "ACTIVE")->first();
        if ($client == null) {
            abort(400, "Client id tidak ditemukan");
        }

        if (Hash::check($client_secret, $client->client_key_secret)) {
            return $next($request);
        }
        abort(400, "Client key tidak dikenal");
    }
}
