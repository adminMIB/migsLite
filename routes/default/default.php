<?php

//Default System API

use App\Http\Controllers\API\Default\AuditTrailController;
use App\Http\Controllers\API\Default\AutentikasiController;
use App\Http\Controllers\API\Default\KelolaRolePermissionController;
use App\Http\Controllers\API\Default\KelolaUserController;
use App\Http\Controllers\API\Default\PermissionController;
use App\Http\Controllers\API\Default\RoleController;
use App\Http\Controllers\API\Default\SidebarController;
use App\Http\Controllers\API\Default\SubSidebarController;
use Illuminate\Support\Facades\Route;

Route::post("/login-app", [AutentikasiController::class, "loginDefault"])->name("app.login");


Route::middleware(['auth:api', "akses"])->group(function () {
    Route::get("/sidebar/pencarian", [SidebarController::class, "search"])->name('sidebar.search');
    Route::apiResources(['/sidebar' => SidebarController::class], [
        'only' => ["index", "create", "edit", "show", "store", "update", "destroy"]
    ]);

    Route::apiResources(['/role' => RoleController::class], [
        'only' => ["index", "show", "store", "update", "destroy"]
    ]);

    Route::apiResources(['/kelola-user' => KelolaUserController::class], [
        'only' => ["index", "create", "edit", "show", "store", "update", "destroy"]
    ]);

    Route::apiResources(['/permission' => PermissionController::class], [
        'only' => ["index",  "show", "destroy"]
    ]);


    Route::apiResources(['/subsidebar' => SubSidebarController::class], [
        'only' => ["index", "create", "edit", "show", "store", "update", "destroy"]
    ]);

    route::prefix("role-permission")->name("role-permission.")->group(function () {
        Route::get("{kd_role}", [KelolaRolePermissionController::class, "index"])->name('index');
        Route::get("{kd_role}/pencarian", [KelolaRolePermissionController::class, "search"])->name('search');
        Route::post("{kd_role}", [KelolaRolePermissionController::class, "store"])->name('store');
        Route::delete("{kd_impl_permission}", [KelolaRolePermissionController::class, "destroy"])->name('destroy');
    });

    Route::apiResources(['audit-trail' => AuditTrailController::class], [
        'only' => ["index",  "show"]
    ]);
});
