<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categoria';
    protected $primaryKey = 'nome';
    public $timestamps = false;
}
