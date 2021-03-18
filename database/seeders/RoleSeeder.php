<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name'=>'admin',
        ]);
        DB::table('roles')->insert([
            'name'=>'gestionnaire',
        ]);
        DB::table('roles')->insert([
            'name'=>'chef-service',
        ]);
        DB::table('roles')->insert([
            'name'=>'membre',
        ]);
    }
}
