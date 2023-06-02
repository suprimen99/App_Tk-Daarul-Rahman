<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Galery;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $siswa = siswa::count();
        $user = User::count();
        return view('admin.dashboard', compact('siswa','user'));
    }


    public function dashboard2()
    {
        $paralax = Picture::all();
        $galeri = Galery::all();
        $logo = Logo::all();
        return view('dashboard2',compact('paralax','galeri','logo'));
    }
    public function dashboardsiswa()
    {
        // $id = auth()->user()->id;
        // $siswa = Siswa::findOrFail($id);
        return view('pendaftar.index');
    }

    public function tambahsiswa()
    {
        return view('pendaftar.tambahsiswa');
    }

    public function simpandata(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $validated = $request->validate([
            'nama_siswa' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => '',
            'notelpon' => 'required',
            'akte' => 'required',
            'nik' => 'required',
            'nama_orangtua' => '',
            'user_id' => '',
        ]);

        $Siswa = new Siswa();
        $Siswa->nama_siswa = $request->nama_siswa;
        $Siswa->usia = $request->usia;
        $Siswa->alamat = $request->alamat;
        $Siswa->jeniskelamin = $request->jeniskelamin;
        $Siswa->notelpon = $request->notelpon;
        $Siswa->akte = $request->akte;
        $Siswa->nik = $request->nik;
        $Siswa->nama_orangtua = $request->nama_orangtua;
        $Siswa->user_id = $user->id;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $Siswa->foto = $filename;
        }

        $Siswa->save();

        return redirect('dashboardsiswa');
    }
}
