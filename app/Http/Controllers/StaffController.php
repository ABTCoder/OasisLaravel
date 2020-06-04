<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Product;
use App\Models\Resources\Category;
use App\Models\Resources\SubCategory;
use App\Http\Requests\NewProductRequest;
use App\Http\Requests\NewCategoryRequest;
use App\Http\Requests\NewSubcategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class StaffController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->middleware('can:isStaff');
        $this->_catalogModel = new Catalog;
    }

    public function index() {
        return view('staffdashboard');
    }

    public function showProductsList() {
        //Prodotti
        $prods = $this->_catalogModel->getAllProds('nome','asc',false);
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
        switch ($id) {
            case 0:
                $msg = 'Prodotto aggiunto correttamente';
                break;
            case 1:
                $msg = 'Prodotto aggiornato correttamente';
                break;
            case 2:
                $msg = 'Prodotto/i eliminati correttamente';
                break;
            case 3:
                $msg = 'Categoria aggiunta correttamente';
                break;
            case 4:
                $msg = 'Categoria aggiornata correttamente';
                break;
            case 5:
                $msg = 'Categoria/e eliminate correttamente';
                break;
            case 6:
                $msg = 'Sottocategoria aggiunta correttamente';
                break;
            case 7:
                $msg = 'Sottocategoria aggiornata correttamente';
                break;
            case 8:
                $msg = 'Sottocategoria/e eliminate correttamente';
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
        return response()->json(['redirect' => route('completemsg', 0)]);
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

        return response()->json(['redirect' => route('completemsg', 1)]);
    }

    public function deleteProduct(Request $request) {
		foreach($request->id as $id) {
			$product = $this->_catalogModel->getProductByCode([$id]);
			if($product->immagine !=null) {
				$destinationPath = public_path() . '/images/products_images/' . $product->immagine;
				unlink($destinationPath);
			}
			$product->delete();
		}
    }

    public function showProductsSearch(Request $request) {

        $validated = $request->validate([
            'term' => ['required', 'max:30'],
        ]);
        $prods = $this->_catalogModel->getProdsByTerm([$validated['term'],false,false]);


        return view('selectproduct')
                        ->with('products', $prods);
    }

    //Categorie

    public function showCategoriesList() {

        $cats = $this->_catalogModel->getCats();
        return view('selectcategory')->with('categories', $cats);
    }

    public function addCategory() {
        return view('addcategory');
    }

    public function editCategory($catId) {

        $category = $this->_catalogModel->getCategoryByID([$catId]);
        return view('addcategory')
                        ->with('category', $category);
    }

    public function storeCategory(NewCategoryRequest $request) {

        $category = new Category;
        $category->fill($request->validated());
        $category->save();

        return redirect()->route('completemsg', 3);
    }

    public function saveCategory(NewCategoryRequest $request, $catId) {

        $category = $this->_catalogModel->getCategoryByID([$catId]);
        $category->fill($request->validated());

        $category->save();

        return redirect()->route('completemsg', 4);
    }

    public function deleteCategory(Request $request) {
		try{
			foreach($request->id as $id) {
				$category = $this->_catalogModel->getCategoryByID([$id]);
				$category->delete();
			}
		} catch (QueryException $e) {
			abort(409);
		}
    }

    //Sottocategorie

    public function showSubcategoriesList() {

        $subcats = $this->_catalogModel->getSubCats();
        $cats = $this->_catalogModel->getCats();
        return view('selectsubcategory')
                        ->with('categories', $cats)
                        ->with('subcategories', $subcats);
    }

    public function addSubcategory() {
        $cats = $this->_catalogModel->getCats()->pluck('nome', 'id');
        return view('addsubcategory')
                        ->with('categories', $cats);
    }

    public function editSubcategory($subcategoryID) {
        $cats = $this->_catalogModel->getCats()->pluck('nome', 'id');
        $subcategory = $this->_catalogModel->getSubcategoryByID([$subcategoryID]);
        return view('addsubcategory')
                        ->with('categories', $cats)
                        ->with('subcategory', $subcategory);
    }

    public function storeSubcategory(NewSubcategoryRequest $request) {

        $subcategory = new SubCategory;
        $subcategory->fill($request->validated());

        $subcategory->save();

        return redirect()->route('completemsg', 6);
    }

    public function saveSubcategory(NewSubcategoryRequest $request, $subcategoryID) {

        $subcategory = $this->_catalogModel->getSubcategoryByID([$subcategoryID]);
        $subcategory->fill($request->validated());

        $subcategory->save();

        return redirect()->route('completemsg', 7);
    }

    public function deleteSubcategory(Request $request) {
		try{
			foreach($request->id as $id) {
				$subcategory = $this->_catalogModel->getSubcategoryByID([$id]);
				$subcategory->delete();
			}
		} catch (QueryException $e) {
			abort(409);
		}
    }

}
