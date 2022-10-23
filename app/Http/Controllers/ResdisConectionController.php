<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class ResdisConectionController extends Controller
{

    public function index(Request $request)
    {

        Cache::put("data","");
        $data = Cache::get("data");

       $data = new TestModel;
       $data->data = "asd";
       $data->save();

        dd("Hel");
    }
}
