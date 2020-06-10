<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        //Prodotti
        if (Gate::forUser($user)->allows('isUser')) {
            $prods = $this->_catalogModel->getAllProds('sconto', 'desc');
        } else {
            $prods = $this->_catalogModel->getAllProds();
        }
        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

    public function showProductsCat($catId) {
        $user = Auth::user();
        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        if (Gate::forUser($user)->allows('isUser')) {
            $prods = $this->_catalogModel->getProdsByCat([$catId], 'sconto', 'desc');
        } else {
            $prods = $this->_catalogModel->getProdsByCat([$catId]);
        }

        $catString = $cats->where('id', $catId)->first()->nome;

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
                        ->with('catString', $catString);
    }

    public function showProductsSubCat($subCatId) {
        $user = Auth::user();
        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        if (Gate::forUser($user)->allows('isUser')) {
            $prods = $this->_catalogModel->getProdsBySubCat([$subCatId], 'sconto', 'desc');
        } else {
            $prods = $this->_catalogModel->getProdsBySubCat([$subCatId]);
        }

        $selected = $subCats->where('id', $subCatId)->first();
        $selectedParent = $cats->where('id', $selected->categoria)->first();

        $catString = $selected->nome . ' in ' . $selectedParent->nome;

        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods)
                        ->with('catString', $catString);
    }

    public function showProductsSearch($term) {

        //Categorie
        $cats = $this->_catalogModel->getCats();

        //Sottocategorie
        $subCats = $this->_catalogModel->getSubCats();

        //Prodotti
        $prods = $this->_catalogModel->getProdsByTerm([$term]);


        return view('products')
                        ->with('categories', $cats)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

    public function showProduct($productCode) {
        //Prodotto
        $product = $this->_catalogModel->getProductByCode([$productCode]);
        return view('viewproduct')
                        ->with('product', $product);
    }

}
