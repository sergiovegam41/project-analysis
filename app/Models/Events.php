<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Events extends EloquentModel
{
    use SoftDeletes;

    // Mongodb
    protected $connection = 'mongodb';
    protected $collection = 'Events';

}
