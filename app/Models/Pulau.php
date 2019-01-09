<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pulau extends Model
{
    //
    protected $table = 'pulau';

    protected $fillable = [
    	'id', 'pulau_name'
    ];
}
