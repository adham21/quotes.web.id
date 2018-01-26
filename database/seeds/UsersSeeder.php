<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	    $password = 'rahasia';

            // Membuat role admin
			$adminRole               = new Role();
			$adminRole->name         = "admin";
			$adminRole->display_name = "Admin";
			$adminRole->save();

			// Membuat role member
			$memberRole               = new Role();
			$memberRole->name         = "member";
			$memberRole->display_name = "Member";
			$memberRole->save();

			// Sample Admin
			$admin           = new User();
			$admin->name     = 'Admin Quotes'; 
			$admin->email    = 'admin@gmail.com'; 
			$admin->password = $password; 
			$admin->save();
			$admin->attachRole($adminRole);

			// Sample Member
			$admin           = new User();
			$admin->name     = 'Member Quotes'; 
			$admin->email    = 'member@gmail.com'; 
			$admin->password = $password; 
			$admin->save();
			$admin->attachRole($memberRole);
    }
}
