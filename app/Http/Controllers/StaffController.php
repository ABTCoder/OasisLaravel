<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

class StaffController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->middleware('can:isStaff');
        $this->_catalogModel = new Catalog; //metodo che viene attivato ogni volta che un'azione dell'admin viene richiesta
    }
    
    public function index() {
        return view('staffdashboard');
    }

    public function showProductsList() {
        //Prodotti
        $prods = $this->_catalogModel->getAllProds(false);
        return view('selectproduct')->with('products', $prods);
    }

    public function addProduct() {
        $prodCats = $this->_catalogModel->getSubCats()->pluck('nome', 'id');
        return view('addproduct')
                        ->with('subCategories', $prodCats);
    }
	public function editProduct($productCode) {
        $prodCats = $this->_catalogModel->getSubCats()->pluck('nome', 'id');
		$product = $this->_catalogModel->getProductByCode([$productCode]);
        return view('addproduct')
                        ->with('subCategories', $prodCats)
						->with('product', $product);
    }
	
	public function completeMsg($id) {
		$msg = 'message';
		switch($id) {
			case 0:
				$msg = 'Prodotto aggiunto correttamente';
				break;
			case 1:
				$msg = 'Prodotto aggiornato correttamente';
				break;
			default:
				$msg = 'Error';
				break;
		}
		return view('completemsg')
						->with('message', $msg);
	}

    
    public function storeProduct(NewProductRequest $request) { 
        
		$product = new Product;
        $product->fill($request->validated());
		
        if ($request->hasFile('immagine')) {
            $image = $request->file('immagine');
            $imageName = $image->getClientOriginalName(); //estrae solo il nome dell'immagine
			$product->immagine = $imageName;
			$destinationPath = public_path() . '/images/products_images';
            $image->move($destinationPath, $imageName);
        }

        $product->save();

        return redirect()->action('StaffController@completeMsg', 0);
    }
	
	public function saveProduct(NewProductRequest $request, $productCode) { 
        
		
		$product = $this->_catalogModel->getProductByCode([$productCode]);
		$product->fill($request->validated());
		
        if ($request->hasFile('immagine')) {
            $image = $request->file('immagine');
            $imageName = $image->getClientOriginalName(); //estrae solo il nome dell'immagine
			$product->immagine = $imageName;
			$destinationPath = public_path() . '/images/products_images';
            $image->move($destinationPath, $imageName);
        } 

        $product->save();

        return redirect()->action('StaffController@completeMsg', 1);
    }

}
