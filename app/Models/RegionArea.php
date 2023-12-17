<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionArea extends Model
{
    use HasFactory;
    protected $table='tbl_region_area';

    protected $fillable = ['name'];

    // Add this line to enable timestamps
    public $timestamps = false;
}
