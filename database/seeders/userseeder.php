<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\models\user;
use app\models\role;

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
        $adminrole = new role();
        $adminrole->name = "admin";
        $adminrole->display_name = "admin larapus";
        $adminrole->save();

        //membuat role member
        $memberole = new role();
        $memberole->name = "member";
        $memberole->display_name = "member larapus";
        $memberrole->save();

        //membuat sample admin
        $useradmin = new user;
        $useradmin->name = "admin larapus";
        $useradmin->email = "adminlarapus@gmail.com";
        $useradmin->password = bcrypt("rahasia");
        $useradmin->save();
        $useradmin->attachrole($adminrole);

        //membuat sample member
        $usermember = new user;
        $usermember->name = "member larapus";
        $usermember->email= "member@gmail.com";
        $usermember->password = bcrypt("rahasia");
        $usermember->save();
        $usermember->attachrole($memberrole);
    }
}
