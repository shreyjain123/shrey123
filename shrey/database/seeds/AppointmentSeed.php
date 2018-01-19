<?php

use Illuminate\Database\Seeder;

class AppointmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'clients_id' => 1, 'employee_id' => 1, 'start_time' => '01/19/2018 15:08:26', 'finish_time' => '01/26/2018 08:42:22', 'comments' => 'hey',],

        ];

        foreach ($items as $item) {
            \App\Appointment::create($item);
        }
    }
}
