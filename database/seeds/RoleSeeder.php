<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Project Mangaer',
                'slug' => 'project-manager',
            ],
            [
                'name' => 'Web Developer',
                'slug' => 'web-developer',
            ],
        ]);
    }
}
