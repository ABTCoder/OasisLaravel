<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

class StaffController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->middleware('can:isStaff');
        $this->_catalogModel = new Catalog;
    }
    
    public function index() {
        return view('admindashboard');
    }

    public function showProductsList() {
        //Prodotti
        $prods = $this->_catalogModel->getAllProds(false);
        return view('selectproduct')->with('products', $prods);
    }

    public function addProduct() {
        $prodCats = $this->_catalogModel->getSubCats();
        return view('addproduct')
                        ->with('subCategories', $prodCats);
    }

    //il client non invia al server solo il nome dell'immagine, ma un oggetto complesso che contiene sia il nome che i byte dell'immagine
    public function storeProduct(NewProductRequest $request) { //NewProductRequest è la classe associata al processo di validazione della form!
        //è presente nella cartella Request di Http
        //processa il contenuto della form e dopo aver generato un nuovo oggetto  eloqeunt che mappa la tupla, andrà a crearne una nel db
        if ($request->hasFile('immagine')) {
            $image = $request->file('immagine');
            $imageName = $image->getClientOriginalName(); //estrae solo il nome dell'immagine
        } else {
            $imageName = NULL;
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->immagine = $imageName;
        $product->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products_images';
            $image->move($destinationPath, $imageName);
        }

        return redirect()->action('StaffController@index');
    }

}
