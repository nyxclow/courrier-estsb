<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CourrierSeeder::class);

    }
}
