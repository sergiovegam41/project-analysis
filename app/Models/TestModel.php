<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class TestModel extends EloquentModel
{
    use SoftDeletes;

    // Mongodb
    protected $connection = 'mongodb';
    protected $collection = 'test_model';

    protected $fillable = [
        '_id',
        'data'
    ];

}
