<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'Create Users',
                'slug' => 'create-users',
            ],
            [
                'name' => 'Manage Users',
                'slug' => 'manage-users',
            ],
        ]);
    }
}
