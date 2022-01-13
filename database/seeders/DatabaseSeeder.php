<?php

namespace Database\Seeders;

use App\Models\Beneficiary;
use App\Models\Investor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Investor::factory(10)->create();
        Beneficiary::factory(10)->create();
    }
}
