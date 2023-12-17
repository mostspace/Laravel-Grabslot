<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='tbl_roles';

    // Add this line to enable timestamps
    public $timestamps = false;

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
