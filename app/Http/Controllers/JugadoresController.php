<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class JugadoresController extends Controller
{
    public function index(Request $request)
    {
        $data = Cache::get("JUGADORES");

        return response([ "Data"=>$data ], 200);
    }
}
