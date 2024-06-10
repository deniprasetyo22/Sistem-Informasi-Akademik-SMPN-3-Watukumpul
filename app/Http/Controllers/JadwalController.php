<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalController extends Controller
{
    public function admin(Request $request)
    {
        $search = $request->search;
        $jadwal = Jadwal::where('kelas', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin/admin-jadwal', ['jadwal' => $jadwal]);
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $jadwal = Jadwal::where('kelas', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user/jadwal', ['jadwal' => $jadwal]);
    }

    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('admin/admin-detail-jadwal', ['jadwal' => $jadwal]);
    }

    public function showuser($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('user/detail-jadwal', ['jadwal' => $jadwal]);
    }

    public function create()
    {
        return view('admin/admin-add-jadwal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required'
        ]);

        $jadwal = Jadwal::create([
            'kelas' => $request->kelas,
            'jam1' => $request->jam1,
            'jam2' => $request->jam2,
            'jam3' => $request->jam3,
            'jam4' => $request->jam4,
            'jam5' => $request->jam5,
            'jam6' => $request->jam6,
            'jam7' => $request->jam7,
            'jam8' => $request->jam8,
            'jam9' => $request->jam9,
            'jam10' => $request->jam10,
            'senin1' => $request->senin1,
            'senin2' => $request->senin2,
            'senin3' => $request->senin3,
            'senin4' => $request->senin4,
            'senin5' => $request->senin5,
            'senin6' => $request->senin6,
            'senin7' => $request->senin7,
            'senin8' => $request->senin8,
            'senin9' => $request->senin9,
            'senin10' => $request->senin10,
            'selasa1' => $request->selasa1,
            'selasa2' => $request->selasa2,
            'selasa3' => $request->selasa3,
            'selasa4' => $request->selasa4,
            'selasa5' => $request->selasa5,
            'selasa6' => $request->selasa6,
            'selasa7' => $request->selasa7,
            'selasa8' => $request->selasa8,
            'selasa9' => $request->selasa9,
            'selasa10' => $request->selasa10,
            'rabu1' => $request->rabu1,
            'rabu2' => $request->rabu2,
            'rabu3' => $request->rabu3,
            'rabu4' => $request->rabu4,
            'rabu5' => $request->rabu5,
            'rabu6' => $request->rabu6,
            'rabu7' => $request->rabu7,
            'rabu8' => $request->rabu8,
            'rabu9' => $request->rabu9,
            'rabu10' => $request->rabu10,
            'kamis1' => $request->kamis1,
            'kamis2' => $request->kamis2,
            'kamis3' => $request->kamis3,
            'kamis4' => $request->kamis4,
            'kamis5' => $request->kamis5,
            'kamis6' => $request->kamis6,
            'kamis7' => $request->kamis7,
            'kamis8' => $request->kamis8,
            'kamis9' => $request->kamis9,
            'kamis10' => $request->kamis10,
            'jumat1' => $request->jumat1,
            'jumat2' => $request->jumat2,
            'jumat3' => $request->jumat3,
            'jumat4' => $request->jumat4,
            'jumat5' => $request->jumat5,
            'jumat6' => $request->jumat6,
            'jumat7' => $request->jumat7,
            'jumat8' => $request->jumat8,
            'jumat9' => $request->jumat9,
            'jumat10' => $request->jumat10,
            'sabtu1' => $request->sabtu1,
            'sabtu2' => $request->sabtu2,
            'sabtu3' => $request->sabtu3,
            'sabtu4' => $request->sabtu4,
            'sabtu5' => $request->sabtu5,
            'sabtu6' => $request->sabtu6,
            'sabtu7' => $request->sabtu7,
            'sabtu8' => $request->sabtu8,
            'sabtu9' => $request->sabtu9,
            'sabtu10' => $request->sabtu10,
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-jadwal');
    }

    public function edit(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('admin/admin-edit-jadwal', ['jadwal' => $jadwal]);
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);

        $request->validate([
            'kelas' => 'required',
        ]);

        $jadwal->update([
            'kelas' => $request->kelas,
            'jam1' => $request->jam1,
            'jam2' => $request->jam2,
            'jam3' => $request->jam3,
            'jam4' => $request->jam4,
            'jam5' => $request->jam5,
            'jam6' => $request->jam6,
            'jam7' => $request->jam7,
            'jam8' => $request->jam8,
            'jam9' => $request->jam9,
            'jam10' => $request->jam10,
            'senin1' => $request->senin1,
            'senin2' => $request->senin2,
            'senin3' => $request->senin3,
            'senin4' => $request->senin4,
            'senin5' => $request->senin5,
            'senin6' => $request->senin6,
            'senin7' => $request->senin7,
            'senin8' => $request->senin8,
            'senin9' => $request->senin9,
            'senin10' => $request->senin10,
            'selasa1' => $request->selasa1,
            'selasa2' => $request->selasa2,
            'selasa3' => $request->selasa3,
            'selasa4' => $request->selasa4,
            'selasa5' => $request->selasa5,
            'selasa6' => $request->selasa6,
            'selasa7' => $request->selasa7,
            'selasa8' => $request->selasa8,
            'selasa9' => $request->selasa9,
            'selasa10' => $request->selasa10,
            'rabu1' => $request->rabu1,
            'rabu2' => $request->rabu2,
            'rabu3' => $request->rabu3,
            'rabu4' => $request->rabu4,
            'rabu5' => $request->rabu5,
            'rabu6' => $request->rabu6,
            'rabu7' => $request->rabu7,
            'rabu8' => $request->rabu8,
            'rabu9' => $request->rabu9,
            'rabu10' => $request->rabu10,
            'kamis1' => $request->kamis1,
            'kamis2' => $request->kamis2,
            'kamis3' => $request->kamis3,
            'kamis4' => $request->kamis4,
            'kamis5' => $request->kamis5,
            'kamis6' => $request->kamis6,
            'kamis7' => $request->kamis7,
            'kamis8' => $request->kamis8,
            'kamis9' => $request->kamis9,
            'kamis10' => $request->kamis10,
            'jumat1' => $request->jumat1,
            'jumat2' => $request->jumat2,
            'jumat3' => $request->jumat3,
            'jumat4' => $request->jumat4,
            'jumat5' => $request->jumat5,
            'jumat6' => $request->jumat6,
            'jumat7' => $request->jumat7,
            'jumat8' => $request->jumat8,
            'jumat9' => $request->jumat9,
            'jumat10' => $request->jumat10,
            'sabtu1' => $request->sabtu1,
            'sabtu2' => $request->sabtu2,
            'sabtu3' => $request->sabtu3,
            'sabtu4' => $request->sabtu4,
            'sabtu5' => $request->sabtu5,
            'sabtu6' => $request->sabtu6,
            'sabtu7' => $request->sabtu7,
            'sabtu8' => $request->sabtu8,
            'sabtu9' => $request->sabtu9,
            'sabtu10' => $request->sabtu10,
        ]);

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-jadwal');
    }

    public function delete($id)
    {
        $hapusjadwal = Jadwal::find($id);
        $hapusjadwal->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-jadwal');
    }
}
