<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.auth.login');
    }

    public function pageUserData()
    {
        $view_data = [
            'data' => User::all()
        ];
        return view('pages.user-data', $view_data);
    }

    public function pageRegister()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:12|unique:users',
            'fullname' => 'required|min:5|max:25',
            'address' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $getRole = FacadesAuth::check() ? $request->role_id : 3;

        $body = [
            'username' => $request->username,
            'fullname' => $request->fullname,
            'address' => $request->address,
            'email' => $request->email,
            'role_id' => $getRole,
            'password' => Hash::make($request->password),
        ];

        User::create($body);
        $msg = FacadesAuth::check() ? 'Add User' : 'Register';
        $redirect = FacadesAuth::check() ? '/user-data' : '/auth/login';
        return redirect($redirect)->with('toast_success', 'Succesfully ' . $msg);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $body = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (FacadesAuth::attempt($body)) {
            return redirect('/')->with('toast_success', 'Succesfully Login, Welcome to NooriBook');
        } else {
            return redirect()->back()->with('toast_error', 'Email or password wrong!');
        }
    }

    public function updateUser(Request $request, $id)
    {
        $getFindById = User::findOrFail($id);
        $body = [
            'username' => $request->username,
            'fullname' => $request->fullname,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ];

        if ($getFindById) {
            $getFindById->update($body);
            return redirect()->back()->with('toast_success', 'Succesfully Update User!');
        } else {
            return redirect()->back()->with('toast_error', 'Failed Update User!');
        }
    }

    public function deleteUser($id)
    {
        if ($id) {
            User::destroy($id);
            return redirect()->back()->with('toast_success', 'Succesfully Delete User!');
        } else {
            return redirect()->back()->with('toast_error', 'Failed Delete User!');
        }
    }


    public function doLogout()
    {
        session()->flush();
        FacadesAuth::logout();
        return redirect('auth/login')->with('toast_success', 'Succes Logout!');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
