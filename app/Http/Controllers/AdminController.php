<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index() {
        return view('admindashboard');
    }

    public function storeStaff(Request $request) {


        $validated = $request->validate([
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'username' => ['required', 'string', 'min:5', 'unique:utente'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:utente'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        User::create([
            'nome' => $validated['nome'],
            'cognome' => $validated['cognome'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'privilegio' => "staff",
        ]);


        return redirect()->route('admincompletemsg', 0);
    }

    public function deleteStaff(Request $request) {


        $product = $this->_catalogModel->getProductByCode([$request->id]);
        if ($product->immagine != null) {
            $destinationPath = public_path() . '/images/products_images/' . $product->immagine;
            unlink($destinationPath);
        }
        $product->delete();
        $validated = $request->validate([
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'username' => ['required', 'string', 'min:5', 'unique:utente'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:utente'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        return redirect()->route('admincompletemsg', 0);
    }

    public function saveStaff(Request $request) {


        $validated = $request->validate([
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'username' => ['required', 'string', 'min:5', 'unique:utente'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:utente'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        User::create([
            'nome' => $validated['nome'],
            'cognome' => $validated['cognome'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'privilegio' => "staff",
        ]);


        return redirect()->route('admincompletemsg', 0);
    }

    public function editStaff($id = null) {
        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');
        $staff = User::find($id)->first();

        return view('addstaff')
                        ->with('users', $users)
                        ->with('staff',$staff);
        
                
    }

    public function showStaff() {

        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');


        return view('editstaff')
                        ->with('users', $users);
    }

    public function completeMsg($id) {
        $msg = 'message';
        switch ($id) {
            case 0:
                $msg = 'Staff aggiunto correttamente';
                break;
            case 1:
                $msg = 'Prodotto aggiornato correttamente';
                break;
            case 2:
                $msg = 'Prodotto eliminato correttamente';
                break;
            default:
                $msg = 'Error';
                break;
        }
        return view('admincompletemsg')
                        ->with('message', $msg);
    }

}
