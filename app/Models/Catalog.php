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
	
	public function getAllProds($pag = true) {
		if($pag) {
			$prods = Product::paginate(9);
			return $prods;
		}
		else {
			$prods = Product::all();
			return $prods;
		}
	}
	
	// Estrae i prodotti della categoria (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCat($catName, $paged = 9, $order = null, $discounted = true) {

        $prods = Product::whereHas('prodCat', function ($query) use ($catName) {
                        $query->whereIn('categoria', $catName);
		});
            
        if ($discounted) {
            $prods = $prods->where('sconto', '>=', 0);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('sconto', $order);
        }
		return $prods->paginate($paged);
    }
    

    // Estrae i prodotti della sottocategoria (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsBySubCat($catId, $paged = 9, $order = null, $discounted = true) {

        $prods = Product::whereIn('sottocategoria', $catId);
            
        if ($discounted) {
            $prods = $prods->where('sconto', '>=', 0);
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('sconto', $order);
        }
		return $prods->paginate($paged);
    }
    
    public function getProductByCode($code){
        return Product::whereIn('codice',$code)->firstOrFail();
    }
    
    public function getCategoryByID($id){
        return Category::whereIn('id',$id)->firstOrFail();
    }
    
    public function getSubcategoryByID($id){
        return SubCategory::whereIn('id',$id)->firstOrFail();
    }

}
