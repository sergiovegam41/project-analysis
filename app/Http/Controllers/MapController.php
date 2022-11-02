<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MapController extends Controller
{
    public function index(Request $request)
    {
        $data = Cache::get("MAPA");

        return response([ "Data"=>$data ], 200 );
    }
}
