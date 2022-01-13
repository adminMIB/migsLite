<?php

namespace App\Http\Controllers\API\Default;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Services\PermissionService;
use App\Services\ResponseService;
use App\Services\RolePermissionService;
use Illuminate\Http\Request;

class KelolaRolePermissionController extends Controller
{

    private PermissionService $permissionService;
    private RolePermissionService $rolepermissionService;
    private ResponseService $reponseService;


    public function __construct(
        PermissionService $permissionService,
        RolePermissionService $rolepermissionService,
        ResponseService $reponseService
    ) {
        $this->permissionService = $permissionService;
        $this->rolepermissionService = $rolepermissionService;
        $this->reponseService = $reponseService;
    }

    public function index($kd_role)
    {
        $in_permission  = $this->permissionService->mendapatkanDataBelumTerpilih($kd_role);
        return compact("in_permission");
    }

    public function search(Request $request, $kd_role)
    {
        $in_permission  = $this->permissionService
            ->mencariDataBerdasarkanKostumYangBelumTerpilih("nama_route", $request->cari, $kd_role);
        return compact("in_permission");
    }

    public function store(Request $request, $kd_role)
    {
        return $this->reponseService->menyimpanData(
            $this->rolepermissionService
                ->menyimpanDataPermissionTerpilih($request->route_url, $kd_role)
        );
    }

    public function destroy($id, $kd_role_permission)
    {
        $this->rolepermissionService->menghapusDataPermissionTerpilih($kd_role_permission);
    }
}
