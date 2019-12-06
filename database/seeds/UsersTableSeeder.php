<?php

use Illuminate\Database\Seeder;
use App\Classes\Data\UsersData;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = new UsersData();
		
		$roles = Role::all();
		
		for($i = 0; $i < count($userData->users); $i++){
			$user = User::create([
				$userData->nameKey => $userData->users[$i]['name'],
				$userData->emailKey => $userData->users[$i]['email'],
				$userData->passwordKey => bcrypt($userData->users[$i]['password'])
			]);
			
			if($user){
				foreach($roles as $role){
					if($role->name == $userData->users[$i]['role']){
						$user->attachRole($role);
					}
				}
			}
		}
    }
}