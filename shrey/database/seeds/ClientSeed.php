<?php

use Illuminate\Database\Seeder;

class ClientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'first_name' => 'Client', 'last_name' => 'Testing', 'phone' => '344324242342', 'email' => 'client@client.com',],

        ];

        foreach ($items as $item) {
            \App\Client::create($item);
        }
    }
}
