<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $primaryKey = "kd_role";

    public function getCreator()
    {
        return $this->hasOne(User::class, "kd_user", 'created_by')->select("nama", "kd_user");
    }

    public function getAllPermission()
    {
        $select = [
            // Permission
            "permissions.nama_route",
            "permissions.route_url",
            // impl
            "impl_role_permissions.fk_kd_permission",
            "impl_role_permissions.fk_kd_role",
            "impl_role_permissions.created_by",
            "impl_role_permissions.fk_kd_role",
            "impl_role_permissions.kd_impl_role_permission",
            // Creator
            "users.nama as created_by",
        ];
        return $this->hasMany(ImplRolePermission::class, "fk_kd_role", "kd_role")
            ->join("permissions", "permissions.route_url", "=", "impl_role_permissions.fk_kd_permission")
            ->join("users", "users.kd_user", "=", "impl_role_permissions.created_by")
            ->select($select);;
    }
}
