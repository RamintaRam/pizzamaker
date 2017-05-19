<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DTUsers_Resources_Connections extends Model
{
    /**
     * @var table name
     */
    protected $table = 'dt_users_resources_connections';

    /**
     * @var tables fillables
     */
    protected $fillable = ['users_id', 'resources_id', 'id'];

    /**
     * @var bool
     */
//    protected $updated_at = false;

public function resource ()
{
    return $this->hasOne(DTResources::class, 'id', 'resources_id');
}

//    public function ingredient (  )
//    {
////        return $this->hasOne(DTIngredients::class, 'id', 'ingredients_id');
//    }
}
