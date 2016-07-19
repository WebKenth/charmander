<?php

namespace App;

use App\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $table = "permissions";
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
