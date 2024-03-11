<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);

        $permission_view_users = Permission::create(['name' => 'view users']);
        $permission_create_users = Permission::create(['name' => 'create users']);
        $permission_edit_users = Permission::create(['name' => 'edit users']);
        $permission_delete_users = Permission::create(['name' => 'delete users']);

        $permission_view_posts = Permission::create(['name' => 'view posts']);
        $permission_create_posts = Permission::create(['name' => 'create posts']);
        $permission_edit_posts = Permission::create(['name' => 'edit posts']);
        $permission_delete_posts = Permission::create(['name' => 'delete posts']);

        $admin_permissions = [
            $permission_view_users,
            $permission_create_users,
            $permission_edit_users,
            $permission_delete_users,
            $permission_view_posts,
            $permission_create_posts,
            $permission_edit_posts,
            $permission_delete_posts,
        ];

        $editor_permissions = [
            $permission_view_posts,
            $permission_create_posts,
            $permission_edit_posts,
            $permission_delete_posts,
        ];

        $admin->syncPermissions($admin_permissions);
        $editor->syncPermissions($editor_permissions);
    }
}
