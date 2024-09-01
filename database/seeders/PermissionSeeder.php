<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name'      => 'لوحة التحكم',
            'key'       => 'browse_admin',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'لوحة المبيعات',
            'key'       => 'browse_cashier',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'المدير العام',
            'key'       => 'administrator',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'محظور',
            'key'       => 'banned',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'أمين الصندوق',
            'key'       => 'cashier',
            'table_name' => null,
        ]);

        Permission::generateFor('permissions','الصلاحيات');
        Permission::generateFor('roles','الأدوار');
        Permission::generateFor('admins','الأعضاء');
        Permission::generateFor('generalsetting','الضبط العام');
        Permission::generateFor('treasurie','الخزن');
        Permission::generateFor('treasuriesdelivery','تفاصيل الخزن');
        Permission::generateFor('billingCategorie','تفاصيل g');
    
    }
}
