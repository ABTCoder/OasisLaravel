<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewStaffRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException; //response json
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('can:isAdmin');
    }

    public function index() {
        return view('admin.admindashboard');
    }

    public function storeStaff(NewStaffRequest $request) {
        $validated = $request->validated();
        User::create([
            'nome' => $validated['nome'],
            'cognome' => $validated['cognome'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'privilegio' => "staff",
        ]);

        return response()->json(['redirect' => route('admincompletemsg', 0)]);
    }

    public function deleteStaff(Request $request) {
        foreach ($request->id as $idcanc) {
            $staff = User::all()->whereIn('id', $idcanc)->first();
            $staff->delete();
        }
    }

    public function saveStaff(Request $request, $id) {

        $user = User::all()->whereIn('id', $id)->first();
        $validator = Validator::make($request->all(), [
                    'password' => ['nullable', 'string', 'min:8', 'confirmed'],
                    'email' => ['required', 'string', 'email', 'max:50', Rule::unique('utente', 'email')->ignore($user->id)],
                    'nome' => ['required', 'string', 'max:20'],
                    'cognome' => ['required', 'string', 'max:20'],
        ]);

        if ($validator->fails()) {
            throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
        } else {

            if ($request['password'] != null) {
                $user->password = Hash::make($request['password']);
            }

            $user->nome = $request['nome'];
            $user->cognome = $request['cognome'];
            $user->email = $request['email'];

            $user->save();
            return response()->json(['redirect' => route('admincompletemsg', 1)]);
        }
    }

    public function editStaff($id) {
        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');
        $staff = User::all()->whereIn('id', $id)->first();

        if ($users->isEmpty())
            return view('admin.editstaff');
        else {
            return view('admin.editstaff')
                            ->with('users', $users)
                            ->with('staff', $staff);
        }
    }

    public function showStaff() {

        $users = User::all()->whereIn('privilegio', 'staff')->pluck('username', 'id');

        if ($users->isEmpty())
            return view('admin.editstaff');
        else {
            return view('admin.editstaff')
                            ->with('users', $users);
        }
    }

    public function showStaffForm() {
        return view('admin.addstaff');
    }

    public function showdeleteStaff() {

        $users = User::all()->whereIn('privilegio', 'staff');
        if ($users->isEmpty())
            return view('admin.selectuser');
        else {
            return view('admin.selectuser')
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
                $msg = 'Staff eliminato/i correttamente';
                break;
            case 3:
                $msg = 'Utente/i eliminati correttamente';
                break;
            default:
                $msg = 'Error';
                break;
        }
        return view('admin.admincompletemsg')
                        ->with('message', $msg);
    }

    public function showUsers() {

        $users = User::all()->whereIn('privilegio', 'cliente');

        if ($users->isEmpty())
            return view('admin.selectuser');
        else {
            return view('admin.selectuser')
                            ->with('users', $users);
        }
    }

    public function deleteUser(Request $request) {
        foreach ($request['id'] as $id) {
            $user = User::all()->whereIn('id', $id)->first();
            $user->delete();
        }
    }

}
