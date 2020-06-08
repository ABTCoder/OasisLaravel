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

    public function getAllProds($field = 'nome', $order = 'asc', $paged = true) {
        if ($paged) {
            $prods = Product::orderBy($field, $order)->paginate(9);
        } else {
            $prods = Product::orderBy($field, $order)->get();
        }
        return $prods;
    }

    // Estrae i prodotti della categoria (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByCat($catId,$field = 'nome', $order = 'asc', $paged = 9, $discounted = false) {

        $prods = Product::whereHas('prodCat', function ($query) use ($catId) {
                    $query->whereIn('categoria', $catId);
                });

        if ($discounted) {
            $prods = $prods->where('sconto', '>=', 0);
        } 
            $prods = $prods->orderBy($field, $order);
      
        return $prods->paginate($paged);
    }

    // Estrae i prodotti della sottocategoria (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsBySubCat($catId, $field = 'nome', $order= 'asc', $paged = 9, $discounted = false) {

        $prods = Product::whereIn('sottocategoria', $catId);

        if ($discounted) {
            $prods = $prods->where('sconto', '>=', 0);
        }
         $prods = $prods->orderBy($field, $order);
        return $prods->paginate($paged);
    }

    // Estrae i prodotti della sottocategoria (tutti o solo quelli in sconto), eventualmente ordinati
    public function getProdsByTerm($term, $paged = 9, $discounted = false) {

        $prods = Product::where('nome', 'like', "%$term[0]%")
						->orWhere('desc_esaustiva', 'like', "%$term[0]%")
						->orWhere('desc_breve', 'like', "%$term[0]%");

        if ($discounted) {
            $prods = $prods->where('sconto', '>=', 0);
        }
        $prods = $prods->orderBy('nome');
        return $prods->paginate($paged);
    }


    public function getProductByCode($code) {
        return Product::whereIn('codice', $code)->firstOrFail();
    }

    public function getCategoryByID($id) {
        return Category::whereIn('id', $id)->firstOrFail();
    }

    public function getSubcategoryByID($id) {
        return SubCategory::whereIn('id', $id)->firstOrFail();
    }

}
