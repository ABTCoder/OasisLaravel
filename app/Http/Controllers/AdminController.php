<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $staff = User::all()->whereIn('id', $request['staff'])->first();
        $staff->delete();

        return redirect()->route('admincompletemsg', 2);
    }

    public function saveStaff(Request $request, $id) {


        $user = User::all()->whereIn('id', $id)->first();
		
		$validated = $request->validate([
			'password' => ['nullable', 'string', 'min:8', 'confirmed'],
			'email' => ['required', 'string', 'email', 'max:50', Rule::unique('utente', 'email')->ignore($user->id)],
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
        ]);
		
		if($validated['password'] != null) {
			$user->password = Hash::make($validated['password']);
		}
		
		$user->nome = $validated['nome'];
		$user->cognome = $validated['cognome'];
		$user->email = $validated['email'];
		
		$user->save();

        return redirect()->route('admincompletemsg', 1);
    }

    public function editStaff($id) {
        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');
        $staff = User::all()->whereIn('id', $id)->first();
        
        if($users->isEmpty()) return view ('editstaff');
        else{
           return view('editstaff')
                        ->with('users', $users)
                        ->with('staff', $staff); 
        }
    }

    public function showStaff() {

        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');
        
        if($users->isEmpty()) return view ('editstaff');
        else{
            return view('editstaff')
                        ->with('users', $users);
        }
    }

    public function showdeleteStaff() {

        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');
        if($users->isEmpty()) return view ('deletestaff');
        else{
        return view('deletestaff')
                        ->with('users', $users);
        }
    }

    public function completeMsg($id) {
        $msg = 'message';
        switch ($id) {
            case 0:
                $msg = 'Staff aggiunto correttamente';
                break;
            case 1:
                $msg = 'Staff aggiornato correttamente';
                break;
            case 2:
                $msg = 'Staff eliminato correttamente';
                break;
            case 3:
                $msg = 'Utente eliminato correttamente';
                break;
            default:
                $msg = 'Error';
                break;
        }
        return view('admincompletemsg')
                        ->with('message', $msg);
    }
    
    public function showUsers() {

        $users = User::all()->whereIn('privilegio', 'cliente')->pluck('username', 'id');
        
        if($users->isEmpty()) return view ('deleteuser');
        else{
            return view('deleteuser')
                        ->with('users', $users);
        }
    }
    
    public function deleteUser(Request $request) {
        $cliente = User::all()->whereIn('id', $request['cliente'])->first();
        $cliente->delete();

        return redirect()->route('admincompletemsg', 3);
    }

}
