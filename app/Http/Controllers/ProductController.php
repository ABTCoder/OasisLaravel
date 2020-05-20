<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

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
	
	public function showProductsCat($catName) {
		//Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        $prods = $this->_catalogModel->getProdsByCat([$catName]);
		
		$catString = $cats->where('nome', $catName)->first()->nome;

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
		
		$catString = $selected->nome . ' in ' . $selected->categoria ;

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
						->with('catString',$catString);
    }
    
    public function showProduct($productCode){
        //Prodotto
		$product = $this->_catalogModel->getProductByCode([$productCode]);
		return view('viewproduct')
					->with('product', $product);
    }

    public function showCatalog2($topCatId) {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId([$topCatId]);

        //Prodotti in sconto della categoria Top selezionata, ordinati per sconto decrescente
        $prods = $this->_catalogModel->getProdsByCat([$topCatId], 2, 'desc', true);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

    public function showCatalog3($topCatId, $catId) {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId([$topCatId]);

        // Prodotti della categoria selezionata, in sconto o meno
        $prods = $this->_catalogModel->getProdsByCat([$catId]);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

}
