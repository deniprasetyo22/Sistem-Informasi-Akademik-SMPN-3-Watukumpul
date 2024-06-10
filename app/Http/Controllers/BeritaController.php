<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Spatie\Backtrace\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function admin(Request $request)
    {
        $search = $request->search;
        $berita = Berita::where('judul', 'LIKE', '%'.$search.'%')
                            ->orWhere('deskripsi', 'LIKE', '%'.$search.'%')
                            ->paginate(15);
        return view('admin/admin-berita', ['berita' => $berita]);
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $berita = Berita::where('judul', 'LIKE', '%'.$search.'%')
                            ->orWhere('deskripsi', 'LIKE', '%'.$search.'%')
                            ->paginate(15);
        return view('user/berita', ['berita' => $berita]);
    }

    public function create()
    {
        return view('admin/admin-add-berita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/berita', $fileName);
        }

        $Berita = Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-berita');
    }

    public function edit(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin/admin-edit-berita', ['berita' => $berita]);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/berita', $fileName);

            $hapusfoto = ('foto/berita/' . $berita->foto);
            Storage::delete($hapusfoto);

            $berita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $berita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-berita');
    }

    public function delete($id)
    {
        $hapusberita = Berita::find($id);
        $hapusimage = ('foto/berita/' . $hapusberita->foto);
        Storage::delete($hapusimage);
        $hapusberita->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        // Session::flash('status', 'success');
        // Session::flash('message', 'Data Berhasil dihapus');

        return redirect('admin-berita');
    }

    public function detail(Request $request, $id)
    {
        $detail = Berita::findOrFail($id);
        return view('user/detail-berita', ['detail' => $detail]);
    }
}
