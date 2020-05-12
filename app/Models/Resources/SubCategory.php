<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

    protected $table = 'sottocategoria';
    protected $primaryKey = 'id';
    public $timestamps = false;
	
	// Realazione One-To-One con SubCategory
    public function superCat() {
        return $this->hasOne(Category::class, 'nome', 'categoria');
    }
}
