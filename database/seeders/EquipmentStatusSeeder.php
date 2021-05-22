<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EquipmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_statuses')->insert(
            ['name' => 'Доступен'],
        );
        DB::table('equipment_statuses')->insert(
            ['name' => 'Забронирован'],
        );
        DB::table('equipment_statuses')->insert(
            ['name' => 'Арендован'],
        );
        DB::table('equipment_statuses')->insert(
            ['name' => 'Не исправен'],
        );
    }
}
