<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DTResources extends Model
{
    /**
     * @var table name
     */
    protected $table = 'dt_resources';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'mime_type', 'path', 'width', 'height', 'size'];
}
