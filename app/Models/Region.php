<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table='tbl_region';

    protected $fillable = ['name', 'area_id', 'url'];

    // Add this line to enable timestamps
    public $timestamps = false;
}
