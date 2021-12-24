<?php

namespace Database\Seeders;

use App\Models\ImplRolePermission;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Sidebar;
use App\Models\SubSidebar;
use App\Models\User;
use Illuminate\Database\Seeder;

class AmrStarterApp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataImplRolePermission = $this->dataImplRolePermission();
        foreach ($dataImplRolePermission as $implRolePermission) {
            ImplRolePermission::create($implRolePermission);
        }

        $dataUser = $this->dataUser();
        foreach ($dataUser as $user) {
            User::create($user);
        }

        $dataPermission = $this->dataPermission();
        foreach ($dataPermission as $permission) {
            Permission::create($permission);
        }
        $dataSidebar = $this->dataSidebar();
        foreach ($dataSidebar as $sidebar) {
            Sidebar::create($sidebar);
        }
        $dataSubSidebar = $this->dataSubSidebar();
        foreach ($dataSubSidebar as $subSidebar) {
            SubSidebar::create($subSidebar);
        }
        $dataRole = $this->dataRole();
        foreach ($dataRole as $role) {
            Role::create($role);
        }
    }

    public function dataImplRolePermission()
    {
        return [
            ["kd_impl_role_permission" => 35, "fk_kd_role" => 10, "fk_kd_permission" => 'sidebar.index', "created_by" => 101195007, "created_at" => '2021-10-31 23:39:16', "updated_at" => '2021-10-31 23:39:16'],

            ["kd_impl_role_permission" => 36, "fk_kd_role" => 10, "fk_kd_permission" => 'sidebar.store', "created_by" => 101195007, "created_at" => '2021-10-31 23:40:22', "updated_at" => '2021-10-31 23:40:22'],

            ["kd_impl_role_permission" => 37, "fk_kd_role" => 10, "fk_kd_permission" => 'sidebar.show', "created_by" => 101195007, "created_at" => '2021-10-31 23:40:22', "updated_at" => '2021-10-31 23:40:22'],

            ["kd_impl_role_permission" => 38, "fk_kd_role" => 10, "fk_kd_permission" => 'sidebar.update', "created_by" => 101195007, "created_at" => '2021-10-31 23:40:23', "updated_at" => '2021-10-31 23:40:23'],

            ["kd_impl_role_permission" => 39, "fk_kd_role" => 10, "fk_kd_permission" => 'sidebar.destroy', "created_by" => 101195007, "created_at" => '2021-10-31 23:40:23', "updated_at" => '2021-10-31 23:40:23'],

            ["kd_impl_role_permission" => 40, "fk_kd_role" => 11, "fk_kd_permission" => 'sidebar.index', "created_by" => 101195007, "created_at" => '2021-10-31 23:41:01', "updated_at" => '2021-10-31 23:41:01'],

            ["kd_impl_role_permission" => 41, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.search', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:13', "updated_at" => '2021-11-01 21:18:13'],

            ["kd_impl_role_permission" => 42, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.search', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:14', "updated_at" => '2021-11-01 21:18:14'],

            ["kd_impl_role_permission" => 43, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.index', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:18', "updated_at" => '2021-11-01 21:18:18'],

            ["kd_impl_role_permission" => 44, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.index', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:18', "updated_at" => '2021-11-01 21:18:18'],

            ["kd_impl_role_permission" => 45, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.store', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:20', "updated_at" => '2021-11-01 21:18:20'],

            ["kd_impl_role_permission" => 46, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.show', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:23', "updated_at" => '2021-11-01 21:18:23'],

            ["kd_impl_role_permission" => 47, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.update', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:24', "updated_at" => '2021-11-01 21:18:24'],

            ["kd_impl_role_permission" => 48, "fk_kd_role" => 10, "fk_kd_permission" => 'kelola-user.destroy', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:25', "updated_at" => '2021-11-01 21:18:25'],

            ["kd_impl_role_permission" => 49, "fk_kd_role" => 10, "fk_kd_permission" => 'permission.search', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:25', "updated_at" => '2021-11-01 21:18:25'],

            ["kd_impl_role_permission" => 50, "fk_kd_role" => 10, "fk_kd_permission" => 'permission.index', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:26', "updated_at" => '2021-11-01 21:18:26'],

            ["kd_impl_role_permission" => 51, "fk_kd_role" => 10, "fk_kd_permission" => 'permission.show', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:27', "updated_at" => '2021-11-01 21:18:27'],

            ["kd_impl_role_permission" => 52, "fk_kd_role" => 10, "fk_kd_permission" => 'role.index', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:28', "updated_at" => '2021-11-01 21:18:28'],

            ["kd_impl_role_permission" => 53, "fk_kd_role" => 10, "fk_kd_permission" => 'role.store', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:29', "updated_at" => '2021-11-01 21:18:29'],

            ["kd_impl_role_permission" => 54, "fk_kd_role" => 10, "fk_kd_permission" => 'role.show', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:30', "updated_at" => '2021-11-01 21:18:30'],

            ["kd_impl_role_permission" => 55, "fk_kd_role" => 10, "fk_kd_permission" => 'role.update', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:32', "updated_at" => '2021-11-01 21:18:32'],

            ["kd_impl_role_permission" => 56, "fk_kd_role" => 10, "fk_kd_permission" => 'role.destroy', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:34', "updated_at" => '2021-11-01 21:18:34'],

            ["kd_impl_role_permission" => 57, "fk_kd_role" => 10, "fk_kd_permission" => 'role-permission.store', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:36', "updated_at" => '2021-11-01 21:18:36'],

            ["kd_impl_role_permission" => 58, "fk_kd_role" => 10, "fk_kd_permission" => 'role-permission.search', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:38', "updated_at" => '2021-11-01 21:18:38'],

            ["kd_impl_role_permission" => 59, "fk_kd_role" => 10, "fk_kd_permission" => 'role-permission.index', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:39', "updated_at" => '2021-11-01 21:18:39'],

            ["kd_impl_role_permission" => 60, "fk_kd_role" => 10, "fk_kd_permission" => 'role-permission.destroy', "created_by" => 101195007, "created_at" => '2021-11-01 21:18:40', "updated_at" => '2021-11-01 21:18:40'],

            ["kd_impl_role_permission" => 61, "fk_kd_role" => 11, "fk_kd_permission" => 'sidebar.destroy', "created_by" => 101195007, "created_at" => '2021-11-01 23:42:54', "updated_at" => '2021-11-01 23:42:54'],

            ["kd_impl_role_permission" => 62, "fk_kd_role" => 11, "fk_kd_permission" => 'sidebar.update', "created_by" => 101195007, "created_at" => '2021-11-02 00:49:17', "updated_at" => '2021-11-02 00:49:17'],

            ["kd_impl_role_permission" => 63, "fk_kd_role" => 11, "fk_kd_permission" => 'kelola-user.index', "created_by" => 101195007, "created_at" => '2021-11-02 01:29:03', "updated_at" => '2021-11-02 01:29:03'],

            ["kd_impl_role_permission" => 64, "fk_kd_role" => 11, "fk_kd_permission" => 'kelola-user.store', "created_by" => 101195007, "created_at" => '2021-11-02 01:30:38', "updated_at" => '2021-11-02 01:30:38'],

            ["kd_impl_role_permission" => 65, "fk_kd_role" => 10, "fk_kd_permission" => 'subsidebar.search', "created_by" => 101195007, "created_at" => '2021-11-02 02:03:14', "updated_at" => '2021-11-02 02:03:14'],

            ["kd_impl_role_permission" => 66, "fk_kd_role" => 10, "fk_kd_permission" => 'subsidebar.index', "created_by" => 101195007, "created_at" => '2021-11-02 02:03:17', "updated_at" => '2021-11-02 02:03:17'],

            ["kd_impl_role_permission" => 67, "fk_kd_role" => 10, "fk_kd_permission" => 'subsidebar.store', "created_by" => 101195007, "created_at" => '2021-11-02 02:03:18', "updated_at" => '2021-11-02 02:03:18'],

            ["kd_impl_role_permission" => 68, "fk_kd_role" => 10, "fk_kd_permission" => 'subsidebar.show', "created_by" => 101195007, "created_at" => '2021-11-02 02:03:19', "updated_at" => '2021-11-02 02:03:19'],

            ["kd_impl_role_permission" => 69, "fk_kd_role" => 10, "fk_kd_permission" => 'subsidebar.update', "created_by" => 101195007, "created_at" => '2021-11-02 02:03:20', "updated_at" => '2021-11-02 02:03:20'],

            ["kd_impl_role_permission" => 70, "fk_kd_role" => 10, "fk_kd_permission" => 'subsidebar.destroy', "created_by" => 101195007, "created_at" => '2021-11-02 02:03:21', "updated_at" => '2021-11-02 02:03:21'],

            ["kd_impl_role_permission" => 71, "fk_kd_role" => 10, "fk_kd_permission" => 'audit-trail.index', "created_by" => 101195007, "created_at" => '2021-11-04 00:07:31', "updated_at" => '2021-11-04 00:07:31 ']
        ];
    }

    public function dataUser()
    {
        return [
            [
                "kd_user" => 101195007,
                "nama" => 'Fahmi Amrullah',
                "email" => 'david.sipes@example.net',
                "username" => 'admin',
                "role" => '10',
                "email_verified_at" => '2021-10-21 02:23:05',
                "password" => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                "remember_token" => 'gkSwXKh318cm4nL53oqWXg4S7m15MCJlijIlXJbv0V0TIFt5iqcY6XpFJkKa',
                "created_at" => '2021-10-21 02:23:05',
                "updated_at" => '2021-10-31 18:49:01',
                'status_user' => 1
            ]
        ];
    }

    public function dataPermission()
    {
        return [
            ["kd_permission" => 109, "nama_route" => 'login app', "nama_grup" => 'app', "route_url" => 'app.login', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 110, "nama_route" => 'Daftar role-permission', "nama_grup" => 'role-permission', "route_url" => 'role-permission.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 111, "nama_route" => 'Pencarian role-permission', "nama_grup" => 'role-permission', "route_url" => 'role-permission.search', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 112, "nama_route" => 'Menyimpan role-permission', "nama_grup" => 'role-permission', "route_url" => 'role-permission.store', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 113, "nama_route" => 'Menghapus role-permission', "nama_grup" => 'role-permission', "route_url" => 'role-permission.destroy', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 114, "nama_route" => 'Daftar sidebar', "nama_grup" => 'sidebar', "route_url" => 'sidebar.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 115, "nama_route" => 'Menyimpan sidebar', "nama_grup" => 'sidebar', "route_url" => 'sidebar.store', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 116, "nama_route" => 'Detail sidebar', "nama_grup" => 'sidebar', "route_url" => 'sidebar.show', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 117, "nama_route" => 'Update sidebar', "nama_grup" => 'sidebar', "route_url" => 'sidebar.update', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 118, "nama_route" => 'Menghapus sidebar', "nama_grup" => 'sidebar', "route_url" => 'sidebar.destroy', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 119, "nama_route" => 'Daftar role', "nama_grup" => 'role', "route_url" => 'role.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 120, "nama_route" => 'Menyimpan role', "nama_grup" => 'role', "route_url" => 'role.store', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 121, "nama_route" => 'Detail role', "nama_grup" => 'role', "route_url" => 'role.show', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 122, "nama_route" => 'Update role', "nama_grup" => 'role', "route_url" => 'role.update', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 123, "nama_route" => 'Menghapus role', "nama_grup" => 'role', "route_url" => 'role.destroy', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 124, "nama_route" => 'Pencarian kelola-user', "nama_grup" => 'kelola-user', "route_url" => 'kelola-user.search', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 125, "nama_route" => 'Daftar kelola-user', "nama_grup" => 'kelola-user', "route_url" => 'kelola-user.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 126, "nama_route" => 'Menyimpan kelola-user', "nama_grup" => 'kelola-user', "route_url" => 'kelola-user.store', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 127, "nama_route" => 'Detail kelola-user', "nama_grup" => 'kelola-user', "route_url" => 'kelola-user.show', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 128, "nama_route" => 'Update kelola-user', "nama_grup" => 'kelola-user', "route_url" => 'kelola-user.update', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 129, "nama_route" => 'Menghapus kelola-user', "nama_grup" => 'kelola-user', "route_url" => 'kelola-user.destroy', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 130, "nama_route" => 'Pencarian permission', "nama_grup" => 'permission', "route_url" => 'permission.search', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 131, "nama_route" => 'Daftar permission', "nama_grup" => 'permission', "route_url" => 'permission.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 132, "nama_route" => 'Detail permission', "nama_grup" => 'permission', "route_url" => 'permission.show', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 133, "nama_route" => 'Pencarian subsidebar', "nama_grup" => 'subsidebar', "route_url" => 'subsidebar.search', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 134, "nama_route" => 'Daftar subsidebar', "nama_grup" => 'subsidebar', "route_url" => 'subsidebar.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 135, "nama_route" => 'Menyimpan subsidebar', "nama_grup" => 'subsidebar', "route_url" => 'subsidebar.store', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 136, "nama_route" => 'Detail subsidebar', "nama_grup" => 'subsidebar', "route_url" => 'subsidebar.show', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 137, "nama_route" => 'Update subsidebar', "nama_grup" => 'subsidebar', "route_url" => 'subsidebar.update', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 138, "nama_route" => 'Menghapus subsidebar', "nama_grup" => 'subsidebar', "route_url" => 'subsidebar.destroy', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 139, "nama_route" => 'Daftar audit-trail', "nama_grup" => 'audit-trail', "route_url" => 'audit-trail.index', "created_at" => NULL, "updated_at" => NULL],
            ["kd_permission" => 140, "nama_route" => 'Detail audit-trail', "nama_grup" => 'audit-trail', "route_url" => 'audit-trail.show', "created_at" => NULL, "updated_at" => NULL],
        ];
    }

    public function dataSidebar()
    {
        return [
            ["kd_sidebar" => 9, "nama_sidebar" => 'Pengelolaan Aplikasi', "status_sidebar" => 1, "urutan_sidebar" => 1, "icon_sidebar" => 'fa-cogs', "created_at" => '2021-10-31 23:49:10', "updated_at" => '2021-11-04 00:08:07'],
            ["kd_sidebar" => 10, "nama_sidebar" => 'Daftar User', "status_sidebar" => 1, "urutan_sidebar" => 2, "icon_sidebar" => 'fa-users', "created_at" => '2021-11-01 07:22:54', "updated_at" => '2021-11-02 01:35:19']
        ];
    }

    public function dataSubSidebar()
    {
        return [
            ["kd_sub_sidebar" => 1, "fk_kd_sidebar" => 9, "nama_sub_sidebar" => 'Daftar sidebar', "status_sub_sidebar" => 1, "urutan_sub_sidebar" => 21, "created_at" => '2021-11-01 06:48:22', "updated_at" => '2021-11-04 00:09:56', "fk_nama_permission" => 'sidebar.index'],
            ["kd_sub_sidebar" => 2, "fk_kd_sidebar" => 9, "nama_sub_sidebar" => 'Daftar role', "status_sub_sidebar" => 1, "urutan_sub_sidebar" => 3, "created_at" => '2021-11-01 07:16:43', "updated_at" => '2021-11-04 00:05:44', "fk_nama_permission" => 'role.index'],
            ["kd_sub_sidebar" => 3, "fk_kd_sidebar" => 9, "nama_sub_sidebar" => 'Daftar permission', "status_sub_sidebar" => 1, "urutan_sub_sidebar" => 4, "created_at" => '2021-11-01 07:16:53', "updated_at" => '2021-11-04 00:08:36', "fk_nama_permission" => 'permission.index'],
            ["kd_sub_sidebar" => 5, "fk_kd_sidebar" => 10, "nama_sub_sidebar" => 'Daftar kelola-user', "status_sub_sidebar" => "1", "urutan_sub_sidebar" => 12, "created_at" => '2021-11-01 07:23:24', "updated_at" => '2021-11-04 00:13:51', "fk_nama_permission" => 'kelola-user.index'],
            ["kd_sub_sidebar" => 6, "fk_kd_sidebar" => 9, "nama_sub_sidebar" => 'Daftar audit-trail', "status_sub_sidebar" => "1", "urutan_sub_sidebar" => 5, "created_at" => '2021-11-04 00:07:46', "updated_at" => '2021-11-04 00:07:46', "fk_nama_permission" => 'audit-trail.index']
        ];
    }

    public function dataRole()
    {
        return [
            ["kd_role" => 10, "nama_role" => 'Super Admin', "created_by" => 101195007, "created_at" => '2021-10-30 01:50:28', "updated_at" => '2021-11-04 00:40:33'],
            ["kd_role" => 11, "nama_role" => 'User Biasa', "created_by" => 101195007, "created_at" => '2021-10-31 23:40:54', "updated_at" => '2021-11-02 01:28:41']
        ];
    }
}
