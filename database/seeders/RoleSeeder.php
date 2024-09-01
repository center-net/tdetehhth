<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        Role::firstOrCreate([
            'name' => 'المدير العام',
            'key' => 'administrator',
            'color' => 'btn-success',
        ]);

        Role::firstOrCreate([
            'name' => 'مدير',
            'key' => 'admin',
            'color' => 'btn-primary',
        ]);

        Role::firstOrCreate([
            'name' => 'أمين الصندوق',
            'key' => 'cashier',
            'color' => 'btn-warning',
        ]);

        Role::firstOrCreate([
            'name' => 'مراقب',
            'key' => 'moderator',
            'color' => 'btn-secondary',
        ]);

        Role::firstOrCreate([
            'name' => 'مستخدم',
            'key' => 'user',
            'color' => 'btn-light',
        ]);

        Role::firstOrCreate([
            'name' => 'محظور',
            'key' => 'banned',
            'color' => 'btn-danger',
        ]);

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();

        $admin_role = Role::where('key','administrator')->first();
        $admin_role->permission()->sync($permission_administrator);
    }
    
}
