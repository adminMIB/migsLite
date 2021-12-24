<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\ImplRolePermission;

class RolePermissionService extends Controller
{

    public function menyimpanDataPermissionTerpilih($kd_permission, $kd_role)
    {
        $data = new ImplRolePermission();
        $data->fk_kd_role = $kd_role;
        $data->fk_kd_permission = $kd_permission;
        $data->created_by = $this->authGetKdUser();
        $data->save();

        return $data;
    }

    public function menghapusDataPermissionTerpilih($id)
    {
        ImplRolePermission::findOrFail($id)->delete();
        return $id;
    }
}
