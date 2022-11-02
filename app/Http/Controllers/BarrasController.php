<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BarrasController extends Controller
{
    public function index(Request $request)
    {


        $data = Cache::get("BARRAS");

        return response([ "Data"=>$data ], 200);
    }
}
