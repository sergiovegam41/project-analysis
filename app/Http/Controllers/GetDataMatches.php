<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GetDataMatches extends Controller
{
    public function index(Request $request)
    {


        $data = Cache::get("ESTADIOS");

        return response([ "Data"=>$data ], 200);
    }
}
