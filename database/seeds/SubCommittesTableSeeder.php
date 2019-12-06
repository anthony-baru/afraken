<?php

use Illuminate\Database\Seeder;
use App\SubCommittee;
use App\Classes\Data\SubCommitteeData;

class SubCommittesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$siteData = new SubCommitteeData();
		
        for($i = 0; $i < count($siteData->sites); $i++){
			SubCommittee::create([
				$siteData->nameKey => $siteData->sites[$i]['name']
				
			]);
		}
    }
}
