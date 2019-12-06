<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Classes\Data\CategoriesData;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$siteData = new CategoriesData();
		
        for($i = 0; $i < count($siteData->categories); $i++){
			Category::create([
				$siteData->nameKey => $siteData->categories[$i]['name']
				
			]);
		}
    }
}
