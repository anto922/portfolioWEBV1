<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $fillable = array('description','id_skill','link','id_user','icon_work');
}
