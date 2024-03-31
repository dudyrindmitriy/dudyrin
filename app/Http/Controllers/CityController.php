<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show()
    {
        $city=City::find(1);
        dump($city->population);
    }
}
