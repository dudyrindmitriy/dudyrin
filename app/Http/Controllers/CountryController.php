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
        return view('countries',['countries'=>$countries]);
    }
}
