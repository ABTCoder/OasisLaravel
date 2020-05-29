<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
			'newpassword' => ['exclude_if:oldpassword,null', 'string', 'min:8', 'confirmed'],
			'oldpassword' => 'required_with:newpassword',
			'email' => ['required', 'string', 'email', 'max:50', Rule::unique('utente', 'email')->ignore($user->id)],
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'residenza' => ['required', 'string', 'max:50'],
			'data_nasc' => ['required'],
			'occupazione' => ['required'],
        ]);
		
		
		if($request['oldpassword'] != null) {
			if(Hash::check($request['oldpassword'], $user->password)) {
				$user->password = Hash::make($validated['newpassword']);
			}
			
		}
		
		$user->nome = $validated['nome'];
		$user->cognome = $validated['cognome'];
		$user->residenza = $validated['residenza'];
		$user->email = $validated['email'];
		$user->data_nasc = $validated['data_nasc'];
		$user->occupazione = $validated['occupazione'];
		
        $user->save();

		return redirect()->route('home');
    }

}
