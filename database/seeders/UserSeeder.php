<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'ci'=>'11111111',
            'name'=>'admin',
            'lastname'=>'admin',
            'birth_date'=>'2000-01-04',
            'address'=>'av. siempre viva',
            'email'=>'admin@admin.com',
            'gender'=>'M',
            'number_phone'=>'77239233',
            'password'=>bcrypt('12345678')
        ]);
    }
}
