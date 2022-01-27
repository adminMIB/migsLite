<?php

namespace App\Http\Controllers\API\Password;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends Controller
{
    public function ubah_password(Request $request)
    {
        $this->validate($request, [
            "pass_lama" => 'required',
            "pass_baru" => 'required',
            "konfirmasi_pass" => 'required|same:pass_baru'
        ]);

        $user = User::find(auth("api")->user()->kd_user);
        $password_terdaftar = $user->password;
        $password_lama = $request->pass_lama;
        $password_baru = $request->pass_baru;
        if (password_verify($password_lama, $password_terdaftar)) {
            if (password_verify($password_baru, $password_terdaftar)) {
                abort(400, 'Password baru sama dengan password lama');
            } else {
                $user->password = Hash::make($password_baru);
                $user->save();
                return [200];
            }
        } else {
            abort(400, 'Password lama tidak dikenal');
        }
    }
}
