<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use RealRashid\SweetAlert\Facades\Alert;

class MataPelajaranController extends Controller
{
    public function admin()
    {
        $matapelajaran = MataPelajaran::all();
        return view('admin/admin-matapelajaran', ['matapelajaran' => $matapelajaran]);
    }

    public function index()
    {
        $matapelajaran = MataPelajaran::all();
        return view('user/matapelajaran', ['matapelajaran' => $matapelajaran]);
    }

    public function create()
    {
        return view('admin/admin-add-matapelajaran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $matapelajaran = MataPelajaran::create([
            'nama' => $request->nama,
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-matapelajaran');
    }

    public function edit(Request $request, $id)
    {
        $matapelajaran = MataPelajaran::findOrFail($id);
        return view('admin/admin-edit-matapelajaran', ['matapelajaran' => $matapelajaran]);
    }

    public function update(Request $request, $id)
    {
        $matapelajaran = MataPelajaran::find($id);

        $request->validate([
            'nama' => 'required',
        ]);

        $matapelajaran->update([
            'nama' => $request->nama,
        ]);

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-matapelajaran');
    }

    public function delete($id)
    {
        $hapusmatapelajaran = matapelajaran::find($id);
        $hapusmatapelajaran->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        // Session::flash('status', 'success');
        // Session::flash('message', 'Data Berhasil dihapus');

        return redirect('admin-matapelajaran');
    }
}
