<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'Usuario')->first();
        $role_admin = Role::where('name', 'Administrador')->first();
        $user = new User();
        $user->name = 'Carlos';
        $user->email = 'carlos@gmail.com';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Christian';
        $user->email = 'christian_baos@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
