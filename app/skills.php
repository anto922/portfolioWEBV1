<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
     protected $table = 'skills';
     
     protected $fillable = array('description','level','id_user','icon_skill');
}
