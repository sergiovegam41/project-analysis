<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetDataMap extends Controller
{
    public function index(Request $request)
    {


        return response([ "Data"=>[ 1,2,3,4 ] ], 200);
    }
}
