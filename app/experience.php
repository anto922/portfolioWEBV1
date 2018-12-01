<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
   protected $table = 'experience';
	
	
   protected $fillable = array('date_start', 'date_end','id_province','id_city','company','description','id_user');
}
