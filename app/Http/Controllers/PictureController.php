<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Galery;
use App\Models\Logo;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function tambahlogo()
    {
        $logo = Logo::paginate(2);
        return view('admin.Logo',compact('logo'));
    }
    public function simpanlogo(Request $request)
    {
        $validated = $request->validate([
            'foto' => ''
        ]);

        $Logo = new Logo();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $Logo->foto = $filename;
        }

        $Logo->save();

        return redirect()->route('tambahlogo')->with('status', 'Paralax Added Successfully');

    }

    public function hapuslogo($id)
    {
        $logo = Logo::findOrFail($id);
        $logo->delete();
        return redirect()->back()->with('success', 'Data logo berhasil dihapus');
    }

    public function tambahparalax()
    {
        $paralax = Picture::paginate(3);
        return view('admin.paralax',compact('paralax'));
    }

    public function simpanparalax(Request $request)
    {
        $validated = $request->validate([
            'foto' => '',
            'titleparalax' => '',
            'captionparalax' => '',
        ]);

        $picture = new Picture();
        $picture->titleparalax = $request->titleparalax;
        $picture->captionparalax = $request->captionparalax;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $picture->foto = $filename;
        }

        $picture->save();

        return redirect()->route('tambahparalax')->with('status', 'Paralax Added Successfully');

    }

    public function hapusparalax($id)
{
    $picture = Picture::findOrFail($id);
    $picture->delete();
    return redirect()->back()->with('success', 'Data paralax berhasil dihapus');
}
    public function hapusgalery($id)
{
    $picture = Galery::findOrFail($id);
    $picture->delete();
    return redirect()->back()->with('success', 'Data Galery berhasil dihapus');
}



    public function tambahgalery()
    {
        $Galery = Galery::paginate(3);
        return view('admin.galery', compact('Galery'));
    }


    public function simpangalery(Request $request)
    {
        $validated = $request->validate([
            'foto' => '',
            'titlegalery' => '',
            'captiongalery' => '',
        ]);

        $Galery = new Galery();
        $Galery->titlegalery = $request->titlegalery;
        $Galery->captiongalery = $request->captiongalery;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move('storage', $filename);
            $Galery->foto = $filename;
        }

        $Galery->save();

        return redirect()->route('tambahgalery')->with('status', 'Galery Added Successfully');

    }


}
