<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

}
