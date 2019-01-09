<?php

namespace App\Http\Controllers\Load\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pulau;
use App\Models\Province;
use App\Models\City;

class LoadController extends Controller
{
    
    //Load Province
    function province( Request $request)
    {
        $this->validate( $request, [ 'id' => 'required' ] );
          $province = Province::where('pulau_id', $request->get('id') )->get();
          //you can handle output in different ways, I just use a custom filled array. you may pluck data and directly output your data.
          $output = [];
          foreach( $province as $show )
          {
             $output[$show->id] = $show->province_name;
          }
          return response()->json($output);
    }

    // Load City
    function city( Request $request)
    {
        $this->validate( $request, [ 'id' => 'required' ] );
          $city = City::where('province_id', $request->get('id') )->get();
          //you can handle output in different ways, I just use a custom filled array. you may pluck data and directly output your data.
          $output = [];
          foreach( $city as $show )
          {
             $output[$show->id] = $show->city_name;
          }
          return response()->json($output);
    }
}
