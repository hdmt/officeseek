<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

// use \App\Models\UserDetail;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // $users = \App\Models\User::where('role', 'COMPANY')->get();

        DB::table('offices')->insert([
            'office_name' => 'テストオフィス渋谷'
        ]);


    }
}
