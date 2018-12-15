<?php

use Illuminate\Database\Seeder;
use App\studies;

class studieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Studies::create([
            'date_start'=> '2004-02-01',
            'date_end' => '2008-02-01',
            'school' =>'IES SEVERO OCHOA',
            'course'=>' ',
            'id_province'=>3,
            'id_city'=>214,
            'id_user'=> 1
        ]);
        
        
        Studies::create([
            'date_start'=> '2004-02-01',
            'date_end' => '2008-02-01',
            'school' =>'IES MACIA ABELA',
            'course'=>' ',
            'id_province'=>3,
            'id_city'=>214,
            'id_user'=> 1
        ]);
        
        
        Studies::create([
            'date_start'=> '2004-02-01',
            'date_end' => '2008-02-01',
            'school' =>'IES NIT L ALBA ',
            'course'=>' ',
            'id_province'=>3,
            'id_city'=>214,
            'id_user'=> 1
        ]);
    }
}
