<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class rolePermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $cek = Route::currentRouteName();
        if ($cek  == null || $cek  == "logout" ||  $cek  == "homepage"  || $cek  == "notFound") {
            return $next($request);
        }
        $this->role_permission();
        return $next($request);
    }

    public function role_permission()
    {
        $nama_akses = Route::currentRouteName();
        $cek =  Role::with("getAllPermission")
            ->where('kd_role', auth("api")->user()->role)->first();

        $data_url_method = explode('.', $nama_akses)[1];

        if ($data_url_method == "edit" || $data_url_method == "create") {
            return "";
        }

        $hasil = false;
        if ($cek != null) {
            foreach ($cek->getAllPermission as $pairing_data) {
                if ($pairing_data->route_url == $nama_akses) {
                    $hasil = true;
                }
            }
        }
        $hasil  ?  "" : abort(403, "Fobiden " . $nama_akses);
    }
}
