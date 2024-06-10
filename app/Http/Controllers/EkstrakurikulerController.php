<?php

namespace App\Http\Controllers;

use App\Models\Drumband;
use App\Models\Englishclub;
use App\Models\Osis;
use App\Models\Pencaksilat;
use App\Models\Pmr;
use App\Models\Pramuka;
use App\Models\Rebana;
use App\Models\Teater;
use App\Models\Tilawatilquran;
use App\Models\Voli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('user/ekstrakurikuler');

    }
    public function show()
    {
        return view('admin/admin-ekstrakurikuler');
    }

    public function osis()
    {
        $osis = Osis::all();
        return view('user/ekstrakurikuler-osis', ['osis' => $osis]);
    }

    public function pramuka()
    {
        $pramuka = Pramuka::all();
        return view('user/ekstrakurikuler-pramuka', ['pramuka' => $pramuka]);
    }

    public function drumband()
    {
        $drumband = Drumband::all();
        return view('user/ekstrakurikuler-drumband', ['drumband' => $drumband]);
    }

    public function rebana()
    {
        $rebana = Rebana::all();
        return view('user/ekstrakurikuler-rebana', ['rebana' => $rebana]);
    }

    public function tilawatilquran()
    {
        $tilawatilquran = Tilawatilquran::all();
        return view('user/ekstrakurikuler-tilawatilquran', ['tilawatilquran' => $tilawatilquran]);
    }

    public function pencaksilat()
    {
        $pencaksilat = Pencaksilat::all();
        return view('user/ekstrakurikuler-pencaksilat', ['pencaksilat' => $pencaksilat]);
    }

    public function voli()
    {
        $voli = Voli::all();
        return view('user/ekstrakurikuler-voli', ['voli' => $voli]);
    }

    public function pmr()
    {
        $pmr = Pmr::all();
        return view('user/ekstrakurikuler-pmr', ['pmr' => $pmr]);
    }

    public function englishclub()
    {
        $englishclub = Englishclub::all();
        return view('user/ekstrakurikuler-englishclub', ['englishclub' => $englishclub]);
    }

    public function teater()
    {
        $teater = Teater::all();
        return view('user/ekstrakurikuler-teater', ['teater' => $teater]);
    }

    public function adminOsis(Request $request)
    {
        $search = $request->search;
        $osis = Osis::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-osis', ['osis' => $osis]);
    }

    public function createOsis()
    {
        return view('admin/admin-add-ekstrakurikuler-osis');
    }

    public function storeOsis(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $osis = Osis::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-osis');
    }

    public function editOsis(Request $request, $id)
    {
        $osis = osis::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-osis', ['osis' => $osis]);
    }

    public function updateOsis(Request $request, $id)
    {
        $osis = Osis::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $osis->foto);
            Storage::delete($hapusfoto);

            $osis->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $osis->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-osis');
    }

    public function deleteOsis($id)
    {
        $hapusosis = Osis::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapusosis->foto);
        Storage::delete($hapusimage);
        $hapusosis->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-osis');
    }

    public function adminPramuka(Request $request)
    {
        $search = $request->search;
        $pramuka = Pramuka::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-pramuka', ['pramuka' => $pramuka]);
    }

    public function createPramuka()
    {
        return view('admin/admin-add-ekstrakurikuler-pramuka');
    }

    public function storePramuka(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $pramuka = Pramuka::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-pramuka');
    }

    public function editPramuka(Request $request, $id)
    {
        $pramuka = Pramuka::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-pramuka', ['pramuka' => $pramuka]);
    }

    public function updatePramuka(Request $request, $id)
    {
        $pramuka = Pramuka::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $pramuka->foto);
            Storage::delete($hapusfoto);

            $pramuka->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $pramuka->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-pramuka');
    }

    public function deletePramuka($id)
    {
        $hapuspramuka = Pramuka::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapuspramuka->foto);
        Storage::delete($hapusimage);
        $hapuspramuka->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-pramuka');
    }

    public function adminDrumband(Request $request)
    {
        $search = $request->search;
        $drumband = Drumband::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-drumband', ['drumband' => $drumband]);
    }

    public function createDrumband()
    {
        return view('admin/admin-add-ekstrakurikuler-drumband');
    }

    public function storeDrumband(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $drumband = Drumband::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-drumband');
    }

    public function editDrumband(Request $request, $id)
    {
        $drumband = Drumband::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-drumband', ['drumband' => $drumband]);
    }

    public function updateDrumband(Request $request, $id)
    {
        $drumband = Drumband::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $drumband->foto);
            Storage::delete($hapusfoto);

            $drumband->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $drumband->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-drumband');
    }

    public function deleteDrumband($id)
    {
        $hapusdrumband = Drumband::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapusdrumband->foto);
        Storage::delete($hapusimage);
        $hapusdrumband->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-drumband');
    }


    public function adminRebana(Request $request)
    {
        $search = $request->search;
        $rebana = Rebana::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-rebana', ['rebana' => $rebana]);
    }

    public function createRebana()
    {
        return view('admin/admin-add-ekstrakurikuler-rebana');
    }

    public function storeRebana(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $rebana = Rebana::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-rebana');
    }

    public function editRebana(Request $request, $id)
    {
        $rebana = Rebana::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-rebana', ['rebana' => $rebana]);
    }

    public function updateRebana(Request $request, $id)
    {
        $rebana = Rebana::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $rebana->foto);
            Storage::delete($hapusfoto);

            $rebana->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $rebana->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-rebana');
    }

    public function deleteRebana($id)
    {
        $hapusrebana = Rebana::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapusrebana->foto);
        Storage::delete($hapusimage);
        $hapusrebana->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-rebana');
    }

    public function adminTilawatilquran(Request $request)
    {
        $search = $request->search;
        $tilawatilquran = Tilawatilquran::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-tilawatilquran', ['tilawatilquran' => $tilawatilquran]);
    }

    public function createTilawatilquran()
    {
        return view('admin/admin-add-ekstrakurikuler-tilawatilquran');
    }

    public function storeTilawatilquran(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $tilawatilquran = Tilawatilquran::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-tilawatilquran');
    }

    public function editTilawatilquran(Request $request, $id)
    {
        $tilawatilquran = Tilawatilquran::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-tilawatilquran', ['tilawatilquran' => $tilawatilquran]);
    }

    public function updateTilawatilquran(Request $request, $id)
    {
        $tilawatilquran = Tilawatilquran::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $tilawatilquran->foto);
            Storage::delete($hapusfoto);

            $tilawatilquran->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $tilawatilquran->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-tilawatilquran');
    }

    public function deleteTilawatilquran($id)
    {
        $hapustilawatilquran = Tilawatilquran::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapustilawatilquran->foto);
        Storage::delete($hapusimage);
        $hapustilawatilquran->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-tilawatilquran');
    }

    public function adminPencaksilat(Request $request)
    {
        $search = $request->search;
        $pencaksilat = Pencaksilat::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-pencaksilat', ['pencaksilat' => $pencaksilat]);
    }

    public function createPencaksilat()
    {
        return view('admin/admin-add-ekstrakurikuler-pencaksilat');
    }

    public function storePencaksilat(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $pencaksilat = Pencaksilat::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-pencaksilat');
    }

    public function editPencaksilat(Request $request, $id)
    {
        $pencaksilat = Pencaksilat::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-pencaksilat', ['pencaksilat' => $pencaksilat]);
    }

    public function updatePencaksilat(Request $request, $id)
    {
        $pencaksilat = Pencaksilat::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $pencaksilat->foto);
            Storage::delete($hapusfoto);

            $pencaksilat->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $pencaksilat->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-pencaksilat');
    }

    public function deletePencaksilat($id)
    {
        $hapuspencaksilat = Pencaksilat::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapuspencaksilat->foto);
        Storage::delete($hapusimage);
        $hapuspencaksilat->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-pencaksilat');
    }

    public function adminVoli(Request $request)
    {
        $search = $request->search;
        $voli = Voli::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-voli', ['voli' => $voli]);
    }

    public function createVoli()
    {
        return view('admin/admin-add-ekstrakurikuler-voli');
    }

    public function storeVoli(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $voli = Voli::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-voli');
    }

    public function editVoli(Request $request, $id)
    {
        $voli = Voli::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-voli', ['voli' => $voli]);
    }

    public function updateVoli(Request $request, $id)
    {
        $voli = Voli::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $voli->foto);
            Storage::delete($hapusfoto);

            $voli->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $voli->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-voli');
    }

    public function deleteVoli($id)
    {
        $hapusvoli = Voli::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapusvoli->foto);
        Storage::delete($hapusimage);
        $hapusvoli->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-voli');
    }

    public function adminPmr(Request $request)
    {
        $search = $request->search;
        $pmr = Pmr::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-pmr', ['pmr' => $pmr]);
    }

    public function createPmr()
    {
        return view('admin/admin-add-ekstrakurikuler-pmr');
    }

    public function storePmr(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $pmr = Pmr::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-pmr');
    }

    public function editPmr(Request $request, $id)
    {
        $pmr = Pmr::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-pmr', ['pmr' => $pmr]);
    }

    public function updatePmr(Request $request, $id)
    {
        $pmr = Pmr::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $pmr->foto);
            Storage::delete($hapusfoto);

            $pmr->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $pmr->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-pmr');
    }

    public function deletePmr($id)
    {
        $hapuspmr = Pmr::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapuspmr->foto);
        Storage::delete($hapusimage);
        $hapuspmr->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-pmr');
    }

    public function adminEnglishclub(Request $request)
    {
        $search = $request->search;
        $englishclub = Englishclub::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-englishclub', ['englishclub' => $englishclub]);
    }

    public function createEnglishclub()
    {
        return view('admin/admin-add-ekstrakurikuler-englishclub');
    }

    public function storeEnglishclub(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $englishclub = Englishclub::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-englishclub');
    }

    public function editEnglishclub(Request $request, $id)
    {
        $englishclub = Englishclub::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-englishclub', ['englishclub' => $englishclub]);
    }

    public function updateEnglishclub(Request $request, $id)
    {
        $englishclub = Englishclub::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $englishclub->foto);
            Storage::delete($hapusfoto);

            $englishclub->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $englishclub->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-englishclub');
    }

    public function deleteEnglishclub($id)
    {
        $hapusenglishclub = Englishclub::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapusenglishclub->foto);
        Storage::delete($hapusimage);
        $hapusenglishclub->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-englishclub');
    }

    public function adminTeater(Request $request)
    {
        $search = $request->search;
        $teater = Teater::where('deskripsi', 'LIKE', '%'.$search.'%')->paginate(15);
        return view('admin/admin-ekstrakurikuler-teater', ['teater' => $teater]);
    }

    public function createTeater()
    {
        return view('admin/admin-add-ekstrakurikuler-teater');
    }

    public function storeTeater(Request $request)
    {
        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);
        }

        $teater = Teater::create([
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');

        return redirect('admin-ekstrakurikuler-teater');
    }

    public function editTeater(Request $request, $id)
    {
        $teater = Teater::findOrFail($id);
        return view('admin/admin-edit-ekstrakurikuler-teater', ['teater' => $teater]);
    }

    public function updateTeater(Request $request, $id)
    {
        $teater = Teater::findorFail($id);

        $request->validate([
            'foto' => 'image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileName = $request->deskripsi . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('foto/ekstrakurikuler', $fileName);

            $hapusfoto = ('foto/ekstrakurikuler/' . $teater->foto);
            Storage::delete($hapusfoto);

            $teater->update([
                'deskripsi' => $request->deskripsi,
                'foto' => $fileName
            ]);
        } else {
            $teater->update([
                'deskripsi' => $request->deskripsi
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-ekstrakurikuler-teater');
    }

    public function deleteTeater($id)
    {
        $hapusteater = Teater::findorFail($id);
        $hapusimage = ('foto/ekstrakurikuler/' . $hapusteater->foto);
        Storage::delete($hapusimage);
        $hapusteater->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');

        return redirect('admin-ekstrakurikuler-teater');
    }

}
