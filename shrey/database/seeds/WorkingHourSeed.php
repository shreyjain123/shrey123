<?php

use Illuminate\Database\Seeder;

class WorkingHourSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'employee_id' => 1, 'date' => '02/08/2018', 'start_time' => '05:11:00', 'finish_time' => '12:00:15',],
            ['id' => 2, 'employee_id' => 1, 'date' => '01/18/2018', 'start_time' => '09:14:00', 'finish_time' => '02:27:26',],

        ];

        foreach ($items as $item) {
            \App\WorkingHour::create($item);
        }
    }
}
