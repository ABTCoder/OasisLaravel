<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'prodotto';
    protected $primaryKey = 'codice';
    public $timestamps = false;

    public function getPrice($withDiscount = false) {
        $price = $this->prezzo;
        if ($withDiscount == true && $this->sconto > 0) {
            $discount = ($price * $this->sconto) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }

    // Realazione One-To-One con SubCategory
    public function prodCat() {
        return $this->hasOne(SubCategory::class, 'id', 'sottocategoria');
    }

}
