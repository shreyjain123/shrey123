<?php

use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'first_name' => 'empliyee', 'last_name' => 'first', 'phone' => '23423423', 'email' => 'sdsfa@gma',],

        ];

        foreach ($items as $item) {
            \App\Employee::create($item);
        }
    }
}
