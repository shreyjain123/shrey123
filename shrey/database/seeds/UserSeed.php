<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Shrey Jain', 'email' => 'shreydiwanjain@gmail.com', 'password' => '$2y$10$1snMM1uoLC4MYMVots.pE.ZnQT0DTYjAViIZQaZiPUtgiQ2zDqGL6', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Kirill', 'email' => 'kirillkirnichansky@gmail.com', 'password' => '$2y$10$khSk5DAc6ESyiN0A239tOe6aQiFfWscDMWWPKfhpTUALVYdy1Fu8a', 'role_id' => 1, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
