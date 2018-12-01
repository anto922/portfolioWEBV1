<?php

use Illuminate\Database\Seeder;
use App\Skills;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             Skills::create([
			'description'=>'PHP',
			'level'=> 50,	 
			'id_user'=> 1,
            'icon_skill'=>''   
		]);
             
             Skills::create([
                 'description'=>'JavaScript',
                 'level'=> 45,
                 'id_user'=> 1,
                 'icon_skill'=>''  
             ]);
             
             Skills::create([
                 'description'=>'CSS3',
                 'level'=> 67,
                 'id_user'=> 1,
                 'icon_skill'=>''  
             ]);
             
             Skills::create([
                 'description'=>'HTML5',
                 'level'=> 75,
                 'id_user'=> 1,
                 'icon_skill'=>''  
             ]);
    }
}
