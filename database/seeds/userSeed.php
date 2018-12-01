<?php
use App\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              Administrator::create([
			'name'=> 'Antonio',
            'surname'=> 'Ruiz Aznar',                
			'email' => 'antonioa@gmail.com',
			'password' => bcrypt('admin123'),
			'age' => '26',
			'photo'=>'',	  
            'telephone' => '635288050',
            'about_me'=>' ',
			'is_admin'=> true
		]);
		
		      
    }
}
