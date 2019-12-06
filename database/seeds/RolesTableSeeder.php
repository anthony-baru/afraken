<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Classes\Data\RoleData;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roleData = new RoleData();
		
        for($i = 0; $i < count($roleData->roles); $i++){
			Role::create([
				$roleData->nameKey => $roleData->roles[$i]['name'],
				$roleData->displayNameKey => $roleData->roles[$i]['display_name'],
				$roleData->descriptionKey => $roleData->roles[$i]['description']
			]);
		}
    }
}
