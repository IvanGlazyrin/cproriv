<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CommandStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('command_statuses')->insert(
            ['name' => 'Утверждена'],
        );
        DB::table('command_statuses')->insert(
            ['name' => 'Не утверждена'],
        );
    }
}
