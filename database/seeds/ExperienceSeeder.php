<?php

use Illuminate\Database\Seeder;
use App\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 Experience::create([
			'date_start'=> '2004-02-01',
			'date_end' => '2008-02-01',
			'company' =>'TEMPE SL',
			'description'=>'',
			'id_province'=>3,
			'id_city'=>214,		 
			'id_user'=> 1		 
		]);
		
		           Experience::create([
			'date_start'=> '2012-02-01',
			'date_end' => '2017-02-01',
			'company' =>'AIRENETWORKS SL',
			'description'=>'',
			'id_province'=>3,
			'id_city'=>214,	
			'id_user'=> 1		 
		]);
		
		           Experience::create([
			'date_start'=> '2014-02-01',
			'date_end' => '2027-02-01',
			'company' =>'GESTION TRIBUTARIA SL',
			'description'=>'',
			'id_province'=>3,
			'id_city'=>214,	
			'id_user'=> 1		 
		]);
		
		           Experience::create([
			'date_start'=> '2013-02-01',
			'date_end' => '2014-02-01',
			'company' =>'PEPE SL',
			'description'=>'',
			'id_province'=>3,
			'id_city'=>214,	
			'id_user'=> 1		 
		]);
		
		           Experience::create([
			'date_start'=> '2011-02-01',
			'date_end' => '2012-02-01',
			'company' =>'PEPA SL',
			'description'=>'',
			'id_province'=>3,
			'id_city'=>214,	
			'id_user'=> 1		 
		]);
		
		
		
    }
}
