<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $table = 'province';

    protected $fillable = [
    	'id', 'province_name', 'pulau_id'
    ];
}
