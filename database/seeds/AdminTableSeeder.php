<?php

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->id = 1;
        $role->name = 'admin';
        $role->label = 'Administrator';
        $role->save();

        $permission = new Permission;
        $permission->id = 1;
        $permission->name = 'awesome';
        $permission->label = 'Awesome';
        $permission->save();

        $role->addPermission($permission);

        $user = new User;
        $user->id       = 1;
        $user->name     = 'Martin Knudsen';
        $user->email    = 'admin@webkenth.dk';
        $user->password = bcrypt('password');
        $user->save();
        $user->addRole($role);

        $user = new User;
        $user->id       = 2;
        $user->name     = 'Kristoffer Kjær Nielsen';
        $user->email    = 'kjaer@weboholics.dk';
        $user->password = bcrypt('password');
        $user->save();
        $user->addRole($role);

        $user = new User;
        $user->id       = 3;
        $user->name     = 'Kasper Legarth';
        $user->email    = 'legarth@weboholics.dk';
        $user->password = bcrypt('password');
        $user->save();
        $user->addRole($role);


//      User::create([
//				'name'     => 'Martin Knudsen',
//				'email'    => 'admin@webkenth.dk',
//				'password' => bcrypt('password')
//			]);
//		User::create([
//				'name'     => 'Kristoffer Kjær Nielsen',
//				'email'    => 'kjaer@weboholics.dk',
//				'password' => bcrypt('password')
//			]);
//		User::create([
//				'name'     => 'Kasper Legarth',
//				'email'    => 'legarth@weboholics.dk',
//				'password' => bcrypt('password')
//			]);
    }
}
