<?php

use Illuminate\Database\Seeder;
use App\University;
use App\Classes\Data\UniversitiesData;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$siteData = new UniversitiesData();
		
        for($i = 0; $i < count($siteData->universities); $i++){
			University::create([
				$siteData->nameKey => $siteData->universities[$i]['name']
				
			]);
		}
    }
}
