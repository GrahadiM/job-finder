<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // dashboard
            'C-dashboard',
            'R-dashboard',
            'U-dashboard',
            'D-dashboard',

            // category
            'C-category',
            'R-category',
            'U-category',
            'D-category',

            // job
            'C-job',
            'R-job',
            'U-job',
            'D-job',

            // history
            'C-history',
            'R-history',
            'U-history',
            'D-history',

            // role
            'C-role',
            'R-role',
            'U-role',
            'D-role',

            // permission
            'C-permission',
            'R-permission',
            'U-permission',
            'D-permission',

            // user
            'C-user',
            'R-user',
            'U-user',
            'D-user',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
