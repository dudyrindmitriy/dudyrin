<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function cities()
    {
        $countries=Country::with(['cities'=>function($query){
            $query->orderBy('population','asc');
        }])->get();
        // foreach ($countries as $country)
        // {
        //     foreach ($country as $city)
        //     {
        //         echo $city->name;
        //     }
        // }
        return view('countries',['countries'=>$countries]);
    }
}
