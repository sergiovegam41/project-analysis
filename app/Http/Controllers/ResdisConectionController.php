<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use function MongoDB\BSON\fromJSON;


class ResdisConectionController extends Controller
{

    public function index(Request $request)
    {

        return response([ "Data"=>[ 1,2,3,4 ] ], 200);
    }
}
