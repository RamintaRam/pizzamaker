<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTResources extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_resources';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'mime_type', 'path', 'width', 'height'];
}
