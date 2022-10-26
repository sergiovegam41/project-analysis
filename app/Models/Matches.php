<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Matches extends EloquentModel
{
    use SoftDeletes;

    // Mongodb
    protected $connection = 'mongodb';
    protected $collection = 'Matches';


}
