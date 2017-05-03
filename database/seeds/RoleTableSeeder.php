<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();
        
        $role_author = new Role();
        $role_author->name = 'Author';
        $role_author->description = 'An Author';
        $role_author->save();

        $role_author = new Role();
        $role_author->name = 'Admin';
        $role_author->description = 'A Admin';
        $role_author->save();
    }
}
