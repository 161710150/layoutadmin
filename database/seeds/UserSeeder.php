<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role super admin
        $superadminRole =  new Role;
        $superadminRole->name = "superadmin";
        $superadminRole->display_name = "Superadmin";
        $superadminRole->save();

    	//membuat Role Admin
        $adminRole =  new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat Role Member
        $memberRole = new Role;
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //membuat sample user superadmin
        $superadmin =  new User;
        $superadmin->name = "Superadmin";
        $superadmin->email = "superadmin@gmail.com";
        $superadmin->password = bcrypt('rahasia');
        $superadmin->save();
        $superadmin->attachRole($superadminRole);

        //membuat sample user admin
        $admin =  new User;
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample user admin
        $member =  new User;
        $member->name = "Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);

    }
}
