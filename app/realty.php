<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class realty extends Model
{
    public $fillable = ['id'];
    public function realties()
    {
        //foreign key realty_id
        return $this->hasMany('App\Image');
    }
}
