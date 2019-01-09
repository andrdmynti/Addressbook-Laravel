<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'address';

    protected $fillable = [
    	'id', 'province_id', 'city_id', 'name', 'nohp', 'initial', 'address',
    ];

    public function city(){
    	return $this->belongsTo('\App\Models\City','city_id','id');
    }

    public function province(){
    	return $this->belongsTo('\App\Models\Province','province_id','id');
    }
}
