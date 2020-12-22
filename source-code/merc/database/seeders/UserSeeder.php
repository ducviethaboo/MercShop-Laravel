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
        $user = new User();
        $user->name = 'viet';
        $user->email = 'viet@gmail.com';
        $user->password = '1';
        $user->role = 'user';
        $user->save();
    }
}
