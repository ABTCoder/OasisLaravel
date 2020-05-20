<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

class AdminController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_catalogModel = new Catalog;
    }

    public function index() {
        return view('admindashboard');
    }


}
