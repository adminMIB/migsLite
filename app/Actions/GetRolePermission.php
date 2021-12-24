<?php

namespace App\Actions;

use App\Models\Permission;
use App\Models\Sidebar;
use App\Services\SidebarService;
use Illuminate\Support\Facades\DB;

class GetRolePermission
{

    private SidebarService $sidebarService;

    public function __construct(SidebarService $sidebarService)
    {
        $this->sidebarService = $sidebarService;
    }

    public function mendapatkanAksesAplikasi()
    {
        $in_sidebars = [];
        $url_untuk_menentukan_list_menu_di_sidebar = [];
        $untuk_menentukan_akses_users_pada_router_vue_router = [];
        $data_route_url = DB::table('impl_role_permissions')->where("fk_kd_role", auth()->user()->role)
            ->join("permissions", "permissions.route_url", "=", "impl_role_permissions.fk_kd_permission")
            ->get(["route_url", "nama_grup"]);

        foreach ($data_route_url as $url) {
            $untuk_menentukan_akses_users_pada_router_vue_router[] =
                ["url" => $url->route_url, "grup" => $url->nama_grup];
            $url_untuk_menentukan_list_menu_di_sidebar[] =  $url->route_url;
        }

        $in_sidebars = $this->sidebarService->mendapatkanSeluruhDataDenganRelasiSubsidebarUserLogin($url_untuk_menentukan_list_menu_di_sidebar)->toArray();


        return  [$in_sidebars, $untuk_menentukan_akses_users_pada_router_vue_router];
    }
}
