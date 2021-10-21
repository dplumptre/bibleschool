<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $data = Role::create([
            'role' => 'user',
        ]);
        $data = Role::create([
            'role' => 'admin',
        ]);
        $data = Role::create([
            'role' => 'super-admin',
        ]);



        $role_user = Role::where('role','user')->first();
        $role_admin = Role::where('role','admin')->first();
        $role_super_admin = Role::where('role','super-admin')->first();

        $data1 = User::create([
            'name' => $faker->name,
            'email'=> 'dplumptre1@gmail.com',
            'password' =>  Hash::make("Password123"), 
            'role_id' => $role_user->id,
        ]);
        $data1->profile()->create([]);

        $data2 = User::create([
            'name' => $faker->name,
            'email'=> 'dplumptre@yahoo.com',
            'password' =>  Hash::make("Password123"), 
            'role_id' => $role_admin->id,
        ]);
        $data2->profile()->create([]);
        $data3 = User::create([
            'name' => $faker->name,
            'email'=> 'dplumptre@hotmail.com',
            'password' =>  Hash::make("Password123"), 
            'role_id' => $role_super_admin->id,
        ]);
        $data3->profile()->create([]);



    }
}
