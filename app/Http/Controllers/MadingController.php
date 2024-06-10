<?php

namespace App\Http\Controllers;

use App\Models\Mading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MadingController extends Controller
{
    public function admin(Request $request)
    {
        $search = $request->search;
        $mading = Mading::where('judul', 'LIKE', '%'.$search.'%')
                            ->orWhere('deskripsi', 'LIKE', '%'.$search.'%')
                            ->paginate(15);
        return view('admin/admin-mading', ['mading' => $mading]);
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $mading = Mading::where('judul', 'LIKE', '%'.$search.'%')
                            ->orWhere('deskripsi', 'LIKE', '%'.$search.'%')
                            ->paginate(15);
        return view('user/mading', ['mading' => $mading]);
    }

    public function create()
    {
        return view('admin/admin-add-mading');
    }

    public function store(Request $request)
    {
        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/mading', $fileName);
        }

        Mading::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');
        return redirect('admin-mading');
    }

    public function edit(Request $request, $id)
    {
        $mading = Mading::findOrFail($id);
        return view('admin/admin-edit-mading', ['mading' => $mading]);
    }

    public function update(Request $request, $id)
    {

        $mading = Mading::findOrFail($id);
        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/mading', $fileName);

            $hapusfoto = ('foto/mading/' . $mading->foto);
            Storage::delete($hapusfoto);

            $mading->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $mading->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');
        return redirect('admin-mading');
    }

    public function delete($id)
    {
        $hapusmading = Mading::findOrFail($id);
        $hapusimage = ('foto/mading/' . $hapusmading->foto);
        Storage::delete($hapusimage);
        $hapusmading->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-mading');
    }

    public function detail(Request $request, $id)
    {
        $detail = Mading::findOrFail($id);
        return view('user/detail-mading', ['detail' => $detail]);
    }
}
