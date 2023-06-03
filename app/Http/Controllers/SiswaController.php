<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function datapendaftar()
    {
        $siswa = Siswa::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.datapendaftar', compact('siswa'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $siswa = Siswa::where('nama_siswa', 'like', '%'.$search.'%')
            ->orWhere('nik', 'like', '%'.$search.'%')
            ->orWhere('usia', 'like', '%'.$search.'%')
            // Tambahkan kondisi pencarian sesuai dengan kolom yang ingin dicari
            ->paginate(10);

        return view('admin.datapendaftar', compact('siswa'));
    }


    public function berhasildaftar()
    {
        $logo = Logo::all();
        return view('pendaftar.Berhasildaftar', compact('logo'));
    }

    public function tambahpendaftar()
    {
        $siswa = Siswa::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.datapendaftar', compact('siswa'));
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
    return redirect()->route('admin.tambahpendaftar')->with('status', 'Siswa Updated Successfully');
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
        'jeniskelamin' => 'required',
        'notelpon' => 'required',
        'akte' => 'required|numeric',
        'nik' => 'required|unique:siswas|numeric',
        'status' => '',
        'kelas' => '',
        'nama_orangtua' => 'required',
    ],[
        'nama_siswa.required' => 'Nama siswa harus diisi.',
        'usia.required' => 'Usia harus diisi.',
        'usia.numeric' => 'Usia harus berupa angka.',
        'alamat.required' => 'Alamat harus diisi.',
        'jeniskelamin.required' => 'Jenis kelamin harus dipilih.',
        'notelpon.required' => 'Nomor telepon harus diisi.',
        'akte.required' => 'Nomor akte harus diisi.',
        'akte.numeric' => 'Nomor akte harus berupa angka.',
        'nik.required' => 'NIK harus diisi.',
        'nik.unique' => 'NIK sudah digunakan.',
        'nik.numeric' => 'NIK harus berupa angka.',
        'nama_orangtua.required' => 'Nama orang tua harus diisi.',
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
    return redirect()->route('berhasildaftar')->with('success', 'Terimakasih Telah Mendaftar');
 }

public function hapus($id)
{
    $Siswa = Siswa::findOrFail($id);
    $Siswa->delete();
    return redirect()->back()->with('success', 'Data siswa berhasil dihapus');
}


    public function insert(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'nik' => 'required|unique:siswas', // Add unique validation rule for 'nama_siswa' field in 'siswa' table
        'nama_siswa' => 'required',
                    'foto' => '',
                    'usia' => 'required',
                    'alamat' => 'required',
                    'jeniskelamin' => 'required',
                    'notelpon' => 'required',
                    'akte' => 'required',
                    'status' => '',
                    'kelas' => '',
                    'nama_orangtua' => 'required',
                ], [
                    'nama_siswa.required' => 'Nama siswa harus diisi.',
                    'usia.required' => 'Usia harus diisi.',
                    'alamat.required' => 'Alamat harus diisi.',
                    'jeniskelamin.required' => 'Jenis kelamin harus dipilih.',
                    'notelpon.required' => 'Nomor telepon harus diisi.',
                    'akte.required' => 'Nomor akte harus diisi.',
                    'nik.required' => 'NIK harus diisi.',
                    'nik.unique' => 'NIK sudah terdaftar.',
                ]);

        if ($validator->fails()) {
            // Handle validation errors
            // Redirect back or return an error response
        } else {
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

                if ($file->isValid()) {
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move('storage', $filename);
                    $Siswa->foto = $filename;
                }
            }

            $Siswa->save();
        }

        return redirect()->route('admin.tambahpendaftar')->with('success', 'Siswa Added Successfully');
    }

}
