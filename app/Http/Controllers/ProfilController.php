<?php

namespace App\Http\Controllers;

use App\Models\GuruDanKaryawan;
use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{

    public function admin()
    {
        $profil = ProfilSekolah::all();
        return view('admin/admin-profilsekolah', ['profil' => $profil]);
    }

    public function index()
    {
        $profil = ProfilSekolah::all();
        $gurudankaryawan = GuruDanKaryawan::all();
        return view('user/profil', ['profil' => $profil, 'gurudankaryawan' => $gurudankaryawan]);
    }

    public function edit(Request $request, $id)
    {
        $profil = ProfilSekolah::findOrFail($id);
        return view('admin/admin-edit-profilsekolah', ['profil' => $profil]);
    }

    public function update(Request $request, $id)
    {
        $profil = ProfilSekolah::findOrFail($id);

        if ($request->hasFile('struktur')) {
            $extension = $request->file('struktur')->getClientOriginalExtension();
            $fileName = 'struktur' . '-' . now()->timestamp . '.' . $extension;
            $request->file('struktur')->storeAs('foto/struktur', $fileName);

            $hapusfoto = ('foto/struktur/' . $profil->struktur);
            Storage::delete($hapusfoto);

            $profil->update([
                'namasekolah' => $request->namasekolah,
                'npsp' => $request->npsp,
                'statussekolah' => $request->statussekolah,
                'bentuksekolah' => $request->bentuksekolah,
                'statuskepemilikan' => $request->statuskepemilikan,
                'akreditasi' => $request->akreditasi,
                'kurikulum' => $request->kurikulum,
                'jumlahguru' => $request->jumlahguru,
                'jumlahsiswa' => $request->jumlahsiswa,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'struktur' => $fileName
            ]);
        } else {
            $profil->update([
                'namasekolah' => $request->namasekolah,
                'npsp' => $request->npsp,
                'statussekolah' => $request->statussekolah,
                'bentuksekolah' => $request->bentuksekolah,
                'statuskepemilikan' => $request->statuskepemilikan,
                'akreditasi' => $request->akreditasi,
                'kurikulum' => $request->kurikulum,
                'jumlahguru' => $request->jumlahguru,
                'jumlahsiswa' => $request->jumlahsiswa,
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
        }
        Alert::success('Success !', 'Data Berhasil diupdate');
        return redirect('admin-profilsekolah');
    }
}
