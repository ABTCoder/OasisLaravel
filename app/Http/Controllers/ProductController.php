<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class ProductController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showProductsAll() {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        $prods = $this->_catalogModel->getAllProds();

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }
	
	public function showProductsCat($catId) {
		//Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        $prods = $this->_catalogModel->getProdsByCat([$catId]);
		
		$catString = $cats->where('id', $catId)->first()->nome;

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
						->with('catString',$catString);
	}

    public function showProductsSubCat($subCatId) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        $prods = $this->_catalogModel->getProdsBySubCat([$subCatId]);
		
		$selected = $subCats->where('id', $subCatId)->first();
		$selectedParent = $cats->where('id', $selected->categoria)->first();
		
		$catString = $selected->nome . ' in ' . $selectedParent->nome ;

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
						->with('catString',$catString);
    }
	
	public function showProductsSearch(Request $request) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();
	
        //Prodotti
		$validated = $request->validate([
            'term' => ['required', 'max:30'],
        ]);
        $prods = $this->_catalogModel->getProdsByTerm([$validated['term']]);
	

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }
    
    public function showProduct($productCode){
        //Prodotto
		$product = $this->_catalogModel->getProductByCode([$productCode]);
		return view('viewproduct')
					->with('product', $product);
    }
}
