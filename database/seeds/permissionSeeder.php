<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'administrate']);
        Permission::create(['name'=>'approve prints']);
        Permission::create(['name'=>'unapprove prints']);
        Permission::create(['name'=>'upload stl']);
        Permission::create(['name'=>'view all prints']);
    }
}
