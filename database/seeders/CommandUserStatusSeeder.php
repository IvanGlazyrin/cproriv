<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CommandUserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('command_user_statuses')->insert(
            ['name' => 'Утвержден'],
        );
        DB::table('command_user_statuses')->insert(
            ['name' => 'Не утвержден'],
        );
    }
}
