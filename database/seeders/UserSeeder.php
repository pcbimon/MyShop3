<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin user
        $user = new User;
        $user->firstname = "Admin";
        $user->lastname = "User";
        $user->email = "admin@myshop.com";
        $user->password = bcrypt("admin");
        $user->save();
    }
}
