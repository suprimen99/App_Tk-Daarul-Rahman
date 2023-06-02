<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function datapendaftar()
{
    $Siswa = Siswa::orderBy('created_at', 'desc')->paginate(5);
    return view('admin.datapendaftar', compact('Siswa'));
}


    public function berhasildaftar()
    {
        $logo = Logo::all();
        return view('pendaftar.Berhasildaftar', compact('logo'));
    }

    public function tambahpendaftar()
    {
    $Siswa = Siswa::all();
       return view('admin.datapendaftar', compact('Siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('admin.editpendaftar', compact('siswa'));
    }

    public function ubahpendaftar(Request $request, $id)
{

    $Siswa = $request->validated();
    $updateSiswa = Siswa::findOrFail($id);
    $updateSiswa->update($Siswa);
    return redirect()->route('admin.tambahpendaftar')->with('status', 'Category Updated Successfully');
}

 public function pendaftar()
 {
    return view('pendaftar.tambahsiswa');
 }

 public function pendaftarsimpan(Request $request)
 {
    $validated = $request->validate([
        'nama_siswa' => 'required',
        'usia' => 'required|numeric',
        'alamat' => 'required',
        'jeniskelamin' => '',
        'notelpon' => 'required',
        'akte' => 'required|numeric',
        'nik' => 'required|numeric',
        'status' => '',
        'kelas' => '',
        'nama_orangtua' => '',
        'user_id'=>''
    ]);

    $Siswa = new Siswa();
    $Siswa->nama_siswa = $request->nama_siswa;
    $Siswa->usia = $request->usia;
    $Siswa->alamat = $request->alamat;
    $Siswa->jeniskelamin = $request->jeniskelamin;
    $Siswa->notelpon = $request->notelpon;
    $Siswa->akte = $request->akte;
    $Siswa->nik = $request->nik;
    $Siswa->status = $request->status;
    $Siswa->kelas = $request->kelas;
    $Siswa->nama_orangtua = $request->nama_orangtua;



    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        $file->move('storage', $filename);
        $Siswa->foto = $filename;
    }

    $Siswa->save();
    return redirect()->route('berhasildaftar')->with('message', 'Siswa Added Successfully');
 }

public function hapus($id)
{
    $Siswa = Siswa::findOrFail($id);
    $Siswa->delete();
    return redirect()->back()->with('success', 'Data siswa berhasil dihapus');
}


    public function insert(Request $request)
    {


        $validated = $request->validate([
            'nama_siswa' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => '',
            'notelpon' => 'required',
            'akte' => 'required',
            'nik' => 'required',
            'status' => '',
            'kelas' => '',
            'nama_orangtua' => '',
            'user_id'=>''
        ]);

        $Siswa = new Siswa();
        $Siswa->nama_siswa = $request->nama_siswa;
        $Siswa->usia = $request->usia;
        $Siswa->alamat = $request->alamat;
        $Siswa->jeniskelamin = $request->jeniskelamin;
        $Siswa->notelpon = $request->notelpon;
        $Siswa->akte = $request->akte;
        $Siswa->nik = $request->nik;
        $Siswa->status = $request->status;
        $Siswa->kelas = $request->kelas;
        $Siswa->nama_orangtua = $request->nama_orangtua;



        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $Siswa->foto = $filename;
        }

        $Siswa->save();

        return redirect()->route('admin.tambahpendaftar')->with('success', 'Siswa Added Successfully');
    }

}
