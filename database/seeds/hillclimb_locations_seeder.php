<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hillclimb_locations_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hillclimb_locations')->insert([
            [
              'locations_name' => '加波山',
              'prefectures' => '茨城県',
              'prefectures_id' => 8,
            ],
          ]);
    }
}
