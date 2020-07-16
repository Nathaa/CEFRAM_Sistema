<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'  => 'Nathaly Amaya',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            ]);

        
    }
}
