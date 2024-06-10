<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruDanKaryawan;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GuruDanKaryawanController extends Controller
{
    public function admin(Request $request)
    {
        $search = $request->search;
        $gurudankaryawan = GuruDanKaryawan::where('nama', 'LIKE', '%' . $search . '%')
                                            ->orWhere('jabatan', 'LIKE', '%' . $search . '%')
                                            ->paginate(15);
        return view('admin/admin-gurudankaryawan', ['gurudankaryawan' => $gurudankaryawan]);
    }

    public function create()
    {
        return view('admin/admin-add-gurudankaryawan');
    }

    public function store(Request $request)
    {
        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/gurudankaryawan', $fileName);
        }

        GuruDanKaryawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-gurudankaryawan');
    }

    public function edit(Request $request, $id)
    {
        $gurudankaryawan = GuruDanKaryawan::findOrFail($id);
        return view('admin/admin-edit-gurudankaryawan', ['gurudankaryawan' => $gurudankaryawan]);
    }

    public function update(Request $request, $id)
    {
        $gurudankaryawan = GuruDanKaryawan::findOrFail($id);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/gurudankaryawan', $fileName);

            $hapusfoto = ('foto/gurudankaryawan/' . $gurudankaryawan->foto);
            Storage::delete($hapusfoto);

            $gurudankaryawan->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $fileName
            ]);
        } else {
            $gurudankaryawan->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-gurudankaryawan');
    }

    public function delete($id)
    {
        $hapusgurudankaryawan = GuruDanKaryawan::findOrFail($id);
        $hapusimage = ('foto/gurudankaryawan/' . $hapusgurudankaryawan->foto);
        Storage::delete($hapusimage);
        $hapusgurudankaryawan->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-gurudankaryawan');
    }
}
