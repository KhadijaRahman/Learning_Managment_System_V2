<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::Create([
            'name'=>'Riya',
            'email'=>'riya@gmail.com',
            'password'=>bcrypt('12345'),
            'phone'=>'0123456789',
            'Institution'=>'IUBAT',
            'role'=>'Admin',
            'address'=> 'Uttara'

        ]);
    }
}
