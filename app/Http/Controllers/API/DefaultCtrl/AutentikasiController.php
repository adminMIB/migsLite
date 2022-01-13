<?php

namespace App\Http\Controllers\API\Default;
use App\Http\Controllers\Controller;
use App\Services\LoginService;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    private LoginService $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function loginDefault(Request $request)
    {
        return $this->loginService->login($request);
    }
}
