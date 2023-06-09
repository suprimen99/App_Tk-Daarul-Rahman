<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }

    public function registrasi()
    {
        $user = User::paginate(3);
        return view('Auth.register2',compact('user'));
    }
    public function registrasi2()
    {
        $user = User::paginate(3);
        return view('Auth.register2',compact('user'));
    }
    public function registerprocess( Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        // Session::flash('status', 'sucess');
        // Session::flash('message', 'Register success, Silakan Login');
        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function hapusauth($id)
    {
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Data User Berhasil Dihapus');
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        $user = User::where('username', 'like', '%'.$search.'%')
            // Tambahkan kondisi pencarian sesuai dengan kolom yang ingin dicari
            ->paginate(5);

        return view('Auth.register2', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');

    }

    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return  redirect('/dashboard');
            }
            if(Auth::user()->role_id == 2){

                return  redirect('dashboardsiswa');
            }
        }
                Session::flash('error', 'Failed');
                Session::flash('message', 'Login invalid');
                return redirect('/login')->with('error', 'Anda Belum Memiliki Akun, Silakan Registrasi!!');
    }


}
