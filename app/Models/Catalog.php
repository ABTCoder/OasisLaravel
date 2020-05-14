<?php

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\SubCategory;
use App\Models\Resources\Product;

class Catalog {

	public function getCats() {
		return Category::all();
	}

    public function getSubCats() {
        return SubCategory::all();
    }
	
	public function getAllProds() {
		$prods = Product::all()->orderBy('sconto', 'desc');
		return $prods;
	}

    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsBySubCat($catId, $paged = 1, $order = null, $discounted = false) {

        $prods = Product::whereIn('sottocategoria', $catId);
            
        if ($discounted) {
            $prods = $prods->where('sconto', '>', 0);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('sconto', $order);
        }
        return $prods->paginate($paged);
    }

}
