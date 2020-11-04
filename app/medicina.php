<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicina extends Model
{
    protected $fillable = ["id", "name", "activo", "tipo", "cantidad", "area"];
}
