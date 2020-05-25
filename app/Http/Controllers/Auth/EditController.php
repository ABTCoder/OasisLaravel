<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class EditController extends Controller {
       
    public function __construct() {
        $this->middleware('can:isUser');
    }


	public function editAccount() {
        
		$user = Auth::user();
        return view('auth.edit')
						->with('user', $user);
    }
	
	public function saveAccount(Request $request) {
		
		$user = Auth::user();
		
		$validated = $request->validate([
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'residenza' => ['required', 'string', 'max:50'],
			'data_nasc' => ['required'],
			'occupazione' => ['required'],
        ]);
		
		$user->fill($validated);
		
		/*
		$user->nome = $validated->nome;
        $user->cognome = $validated->cognome;
		$user->residenza = $validated->residenza;
		$user->data_nasc = $validated->data_nasc;
		$user->occupazione = $validated->occupazione;
		*/
        $user->save();

		return redirect()->route('home');
    }

}
