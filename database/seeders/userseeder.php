<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminrole = new Role();
        $adminrole->name = "admin";
        $adminrole->display_name = "admin larapus";
        $adminrole->save();

        //membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member larapus";
        $memberRole->save();

        //membuat sample admin
        $useradmin = new User;
        $useradmin->name = "admin larapus";
        $useradmin->email = "adminlarapus@gmail.com";
        $useradmin->password = bcrypt("rahasia");
        $useradmin->save();
        $useradmin->attachrole($adminrole);

        //membuat sample member
        $usermember = new User;
        $usermember->name = "member larapus";
        $usermember->email= "member@gmail.com";
        $usermember->password = bcrypt("rahasia");
        $usermember->save();
        $usermember->attachrole($memberRole);
    }
}
