<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    use HasFactory;
    public $primaryKey = "kd_sidebar";


    public function getSubSidebar()
    {
        return $this->hasMany(SubSidebar::class, "fk_kd_sidebar", "kd_sidebar")
            ->join("permissions", 'permissions.route_url', "=", "sub_sidebars.fk_nama_permission")
            ->select("sub_sidebars.*", "permissions.route_url")
            ->orderBy("urutan_sub_sidebar", "ASC");;
    }
}
