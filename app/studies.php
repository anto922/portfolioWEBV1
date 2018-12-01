<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studies extends Model
{
    protected $table = 'studies';
    
    protected $fillable = array('date_start', 'date_end','id_province','id_city','school','id_user','course');
}
