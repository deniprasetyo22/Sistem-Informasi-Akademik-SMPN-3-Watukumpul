<?php

namespace App\Http\Controllers;

use App\Models\Ipa;
use App\Models\Ips;
use App\Models\Pabp;
use App\Models\Ppkn;
use App\Models\Matematika;
use Illuminate\Http\Request;
use App\Models\BahasaInggris;
use App\Models\BahasaIndonesia;
use App\Models\Pjok;
use App\Models\Prakarya;
use App\Models\SeniBudaya;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MateriController extends Controller
{
    public function admin()
    {
        return view('admin.admin-materi');
    }

    public function index()
    {
        return view('user.materi');
    }

    public function bahasaindonesia(Request $request)
    {
        $search = $request->search;
        $bahasaindonesia = BahasaIndonesia::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-bahasaindonesia', ['bahasaindonesia' => $bahasaindonesia]);
    }

    public function createbahasaindonesia()
    {
        $bahasaindonesia = BahasaIndonesia::all();
        return view('admin/admin-add-materi-bahasaindonesia', ['bahasaindonesia' => $bahasaindonesia]);
    }

    public function storebahasaindonesia(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $bahasaindonesia = BahasaIndonesia::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-bahasaindonesia');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-bahasaindonesia');
        }
    }

    public function editbahasaindonesia(Request $request, $id)
    {
        $bahasaindonesia = BahasaIndonesia::findOrFail($id);
        return view('admin/admin-edit-materi-bahasaindonesia', ['bahasaindonesia' => $bahasaindonesia]);
    }

    public function updatebahasaindonesia(Request $request, $id)
    {
        $bahasaindonesia = BahasaIndonesia::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $bahasaindonesia->file);
            Storage::delete($hapusfile);

            $bahasaindonesia->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $bahasaindonesia->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-bahasaindonesia');
    }

    public function deletebahasaindonesia($id)
    {

        $hapusbahasaindonesia = BahasaIndonesia::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusbahasaindonesia->file);
        Storage::delete($hapusfile);
        $hapusbahasaindonesia->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-bahasaindonesia');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-bahasaindonesia');
        }
    }

    public function materibahasaindonesia(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = BahasaIndonesia::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-bahasaindonesia', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function matematika(Request $request)
    {
        $search = $request->search;
        $matematika = Matematika::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-matematika', ['matematika' => $matematika]);
    }

    public function creatematematika()
    {
        $matematika = Matematika::all();
        return view('admin/admin-add-materi-matematika', ['matematika' => $matematika]);
    }

    public function storematematika(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $matematika = Matematika::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-matematika');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-matematika');
        }
    }

    public function editmatematika(Request $request, $id)
    {
        $matematika = Matematika::findOrFail($id);
        return view('admin/admin-edit-materi-matematika', ['matematika' => $matematika]);
    }

    public function updatematematika(Request $request, $id)
    {
        $matematika = Matematika::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $matematika->file);
            Storage::delete($hapusfile);

            $matematika->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $matematika->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-matematika');
    }

    public function deletematematika($id)
    {
        $hapusmatematika = Matematika::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusmatematika->file);
        Storage::delete($hapusfile);
        $hapusmatematika->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-matematika');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-matematika');
        }
    }

    public function materimatematika(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Matematika::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-matematika', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function bahasainggris(Request $request)
    {
        $search = $request->search;
        $bahasainggris = BahasaInggris::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-bahasainggris', ['bahasainggris' => $bahasainggris]);
    }

    public function createbahasainggris()
    {
        $bahasainggris = BahasaInggris::all();
        return view('admin/admin-add-materi-bahasainggris', ['bahasainggris' => $bahasainggris]);
    }

    public function storebahasainggris(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $bahasainggris = BahasaInggris::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-bahasainggris');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-bahasainggris');
        }
    }

    public function editbahasainggris(Request $request, $id)
    {
        $bahasainggris = BahasaInggris::findOrFail($id);
        return view('admin/admin-edit-materi-bahasainggris', ['bahasainggris' => $bahasainggris]);
    }

    public function updatebahasainggris(Request $request, $id)
    {
        $bahasainggris = BahasaInggris::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $bahasainggris->file);
            Storage::delete($hapusfile);

            $bahasainggris->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $bahasainggris->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-bahasainggris');
    }

    public function deletebahasainggris($id)
    {
        $hapusbahasainggris = BahasaInggris::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusbahasainggris->file);
        Storage::delete($hapusfile);
        $hapusbahasainggris->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-bahasainggris');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-bahasainggris');
        }
    }

    public function materibahasainggris(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = BahasaInggris::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-bahasainggris', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function ipa(Request $request)
    {
        $search = $request->search;
        $ipa = Ipa::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-ipa', ['ipa' => $ipa]);
    }

    public function createipa()
    {
        $ipa = Ipa::all();
        return view('admin/admin-add-materi-ipa', ['ipa' => $ipa]);
    }

    public function storeipa(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $ipa = Ipa::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-ipa');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-ipa');
        }
    }

    public function editipa(Request $request, $id)
    {
        $ipa = Ipa::findOrFail($id);
        return view('admin/admin-edit-materi-ipa', ['ipa' => $ipa]);
    }

    public function updateipa(Request $request, $id)
    {
        $ipa = Ipa::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $ipa->file);
            Storage::delete($hapusfile);

            $ipa->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $ipa->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-ipa');
    }

    public function deleteipa($id)
    {
        $hapusipa = Ipa::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusipa->file);
        Storage::delete($hapusfile);
        $hapusipa->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-ipa');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-ipa');
        }
    }

    public function materiipa(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Ipa::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-ipa', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function ips(Request $request)
    {
        $search = $request->search;
        $ips = Ips::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-ips', ['ips' => $ips]);
    }

    public function createips()
    {
        $ips = Ips::all();
        return view('admin/admin-add-materi-ips', ['ips' => $ips]);
    }

    public function storeips(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $ips = Ips::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-ips');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-ips');
        }
    }

    public function editips(Request $request, $id)
    {
        $ips = Ips::findOrFail($id);
        return view('admin/admin-edit-materi-ips', ['ips' => $ips]);
    }

    public function updateips(Request $request, $id)
    {
        $ips = Ips::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $ips->file);
            Storage::delete($hapusfile);

            $ips->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $ips->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-ips');
    }

    public function deleteips($id)
    {
        $hapusips = Ips::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusips->file);
        Storage::delete($hapusfile);
        $hapusips->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-ips');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-ips');
        }
    }

    public function materiips(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Ips::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-ips', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function pabp(Request $request)
    {
        $search = $request->search;
        $pabp = Pabp::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-pabp', ['pabp' => $pabp]);
    }

    public function createpabp()
    {
        $pabp = Pabp::all();
        return view('admin/admin-add-materi-pabp', ['pabp' => $pabp]);
    }

    public function storepabp(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $pabp = Pabp::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-pabp');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-pabp');
        }
    }

    public function editpabp(Request $request, $id)
    {
        $pabp = Pabp::findOrFail($id);
        return view('admin/admin-edit-materi-pabp', ['pabp' => $pabp]);
    }

    public function updatepabp(Request $request, $id)
    {
        $pabp = Pabp::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $pabp->file);
            Storage::delete($hapusfile);

            $pabp->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $pabp->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-pabp');
    }

    public function deletepabp($id)
    {
        $hapuspabp = Pabp::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapuspabp->file);
        Storage::delete($hapusfile);
        $hapuspabp->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-pabp');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-pabp');
        }
    }

    public function materipabp(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Pabp::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-pabp', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function ppkn(Request $request)
    {
        $search = $request->search;
        $ppkn = Ppkn::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-ppkn', ['ppkn' => $ppkn]);
    }

    public function createppkn()
    {
        $ppkn = Ppkn::all();
        return view('admin/admin-add-materi-ppkn', ['ppkn' => $ppkn]);
    }

    public function storeppkn(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $ppkn = Ppkn::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-ppkn');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-ppkn');
        }
    }

    public function editppkn(Request $request, $id)
    {
        $ppkn = Ppkn::findOrFail($id);
        return view('admin/admin-edit-materi-ppkn', ['ppkn' => $ppkn]);
    }

    public function updateppkn(Request $request, $id)
    {
        $ppkn = Ppkn::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $ppkn->file);
            Storage::delete($hapusfile);

            $ppkn->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $ppkn->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-ppkn');
    }

    public function deleteppkn($id)
    {
        $hapusppkn = Ppkn::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusppkn->file);
        Storage::delete($hapusfile);
        $hapusppkn->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-ppkn');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-ppkn');
        }
    }

    public function materippkn(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Ppkn::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-ppkn', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function senibudaya(Request $request)
    {
        $search = $request->search;
        $senibudaya = SeniBudaya::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-senibudaya', ['senibudaya' => $senibudaya]);
    }

    public function createsenibudaya()
    {
        $senibudaya = SeniBudaya::all();
        return view('admin/admin-add-materi-senibudaya', ['senibudaya' => $senibudaya]);
    }

    public function storesenibudaya(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $senibudaya = SeniBudaya::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-senibudaya');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-senibudaya');
        }
    }

    public function editsenibudaya(Request $request, $id)
    {
        $senibudaya = SeniBudaya::findOrFail($id);
        return view('admin/admin-edit-materi-senibudaya', ['senibudaya' => $senibudaya]);
    }

    public function updatesenibudaya(Request $request, $id)
    {
        $senibudaya = SeniBudaya::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $senibudaya->file);
            Storage::delete($hapusfile);

            $senibudaya->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $senibudaya->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-senibudaya');
    }

    public function deletesenibudaya($id)
    {
        $hapussenibudaya = SeniBudaya::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapussenibudaya->file);
        Storage::delete($hapusfile);
        $hapussenibudaya->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-senibudaya');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-senibudaya');
        }
    }

    public function materisenibudaya(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = SeniBudaya::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-senibudaya', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function pjok(Request $request)
    {
        $search = $request->search;
        $pjok = Pjok::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-pjok', ['pjok' => $pjok]);
    }

    public function createpjok()
    {
        $pjok = Pjok::all();
        return view('admin/admin-add-materi-pjok', ['pjok' => $pjok]);
    }

    public function storepjok(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $pjok = Pjok::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-pjok');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-pjok');
        }
    }

    public function editpjok(Request $request, $id)
    {
        $pjok = Pjok::findOrFail($id);
        return view('admin/admin-edit-materi-pjok', ['pjok' => $pjok]);
    }

    public function updatepjok(Request $request, $id)
    {
        $pjok = Pjok::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $pjok->file);
            Storage::delete($hapusfile);

            $pjok->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $pjok->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-pjok');
    }

    public function deletepjok($id)
    {
        $hapuspjok = Pjok::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapuspjok->file);
        Storage::delete($hapusfile);
        $hapuspjok->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-pjok');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-pjok');
        }
    }

    public function materipjok(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Pjok::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-pjok', ['materi' => $materi, 'siswa' => $siswa]);
    }

    public function prakarya(Request $request)
    {
        $search = $request->search;
        $prakarya = Prakarya::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('admin.admin-materi-prakarya', ['prakarya' => $prakarya]);
    }

    public function createprakarya()
    {
        $prakarya = Prakarya::all();
        return view('admin/admin-add-materi-prakarya', ['prakarya' => $prakarya]);
    }

    public function storeprakarya(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048'
        ]);

        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);
        }

        $prakarya = Prakarya::create([
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-materi-prakarya');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('materi-prakarya');
        }
    }

    public function editprakarya(Request $request, $id)
    {
        $prakarya = Prakarya::findOrFail($id);
        return view('admin/admin-edit-materi-prakarya', ['prakarya' => $prakarya]);
    }

    public function updateprakarya(Request $request, $id)
    {
        $prakarya = Prakarya::find($id);

        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/materi', $fileName);

            $hapusfile = ('file/materi/' . $prakarya->file);
            Storage::delete($hapusfile);

            $prakarya->update([
                'judul' => $request->judul,
                'file' => $fileName
            ]);
        } else {
            $prakarya->update([
                'judul' => $request->judul
            ]);
        }

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-materi-prakarya');
    }

    public function deleteprakarya($id)
    {
        $hapusprakarya = Prakarya::findOrFail($id);
        $hapusfile = ('file/materi/' . $hapusprakarya->file);
        Storage::delete($hapusfile);
        $hapusprakarya->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-materi-prakarya');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('materi-prakarya');
        }
    }

    public function materiprakarya(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $materi = Prakarya::where('judul', 'LIKE', '%' . $search . '%')->paginate(15);
        return view('user.materi-prakarya', ['materi' => $materi, 'siswa' => $siswa]);
    }
}
