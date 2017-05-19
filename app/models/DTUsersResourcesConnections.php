<?php


namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTUsersResourcesConnections extends CoreModel
{
    public $incrementing = false;
    /**
     * @var table name
     */
    protected $table = 'dt_users_resources_connections';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'user_id', 'resources_id'];

    /**
     * @var bool
     */
//    protected $updated_at = false;

    public function resource ()
    {
        return $this->hasMany(DTUsers::class, 'user_id', 'id');
    }
}
