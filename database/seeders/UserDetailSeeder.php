<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\UserDetail;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDetail::factory(10)->create();
    }
}
