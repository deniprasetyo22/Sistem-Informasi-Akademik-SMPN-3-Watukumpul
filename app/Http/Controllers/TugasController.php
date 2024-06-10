<?php

namespace App\Http\Controllers;

use App\Models\Ips;
use App\Models\Siswa;
use App\Models\TugasBahasaindonesia;
use App\Models\TugasBahasaInggris;
use App\Models\TugasIpa;
use App\Models\TugasIps;
use App\Models\TugasMatematika;
use App\Models\TugasPabp;
use App\Models\TugasPjok;
use App\Models\TugasPpkn;
use App\Models\TugasPrakarya;
use App\Models\TugasSenibudaya;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    // Bahasa Indonesia
    public function bahasaindonesia(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasbahasaindonesia = TugasBahasaindonesia::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-bahasaindonesia', ['tugasbahasaindonesia' => $tugasbahasaindonesia, 'siswa' => $siswa]);
    }

    public function adminbahasaindonesia(Request $request)
    {
        $search = $request->search;
        $tugasbahasaindonesia = TugasBahasaindonesia::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-bahasaindonesia', ['tugasbahasaindonesia' => $tugasbahasaindonesia]);
    }

    public function storebahasaindonesia(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasbahasaindonesia = TugasBahasaindonesia::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-bahasaindonesia');
    }

    public function deletebahasaindonesia($id)
    {
        $hapusbahasaindonesia = TugasBahasaindonesia::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusbahasaindonesia->file);
        Storage::delete($hapusfile);
        $hapusbahasaindonesia->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-bahasaindonesia');
    }

    // Matematika
    public function matematika(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasmatematika = TugasMatematika::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-matematika', ['tugasmatematika' => $tugasmatematika, 'siswa' => $siswa]);
    }

    public function adminmatematika(Request $request)
    {
        $search = $request->search;
        $tugasmatematika = TugasMatematika::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-matematika', ['tugasmatematika' => $tugasmatematika]);
    }

    public function storematematika(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasmatematika = TugasMatematika::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-matematika');
    }

    public function deletematematika($id)
    {
        $hapusmatematika = TugasMatematika::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusmatematika->file);
        Storage::delete($hapusfile);
        $hapusmatematika->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-matematika');
    }

    // Bahasa Inggris
    public function bahasainggris(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasbahasainggris = TugasBahasaInggris::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-bahasainggris', ['tugasbahasainggris' => $tugasbahasainggris, 'siswa' => $siswa]);
    }

    public function adminbahasainggris(Request $request)
    {
        $search = $request->search;
        $tugasbahasainggris = TugasBahasaInggris::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-bahasainggris', ['tugasbahasainggris' => $tugasbahasainggris]);
    }

    public function storebahasainggris(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasbahasainggris = TugasBahasaInggris::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-bahasainggris');
    }

    public function deletebahasainggris($id)
    {
        $hapusbahasainggris = TugasBahasaInggris::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusbahasainggris->file);
        Storage::delete($hapusfile);
        $hapusbahasainggris->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-bahasainggris');
    }

    // IPA
    public function ipa(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasipa = TugasIpa::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-ipa', ['tugasipa' => $tugasipa, 'siswa' => $siswa]);
    }

    public function adminipa(Request $request)
    {
        $search = $request->search;
        $tugasipa = TugasIpa::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-ipa', ['tugasipa' => $tugasipa]);
    }

    public function storeipa(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasipa = TugasIpa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-ipa');
    }

    public function deleteipa($id)
    {
        $hapusipa = TugasIpa::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusipa->file);
        Storage::delete($hapusfile);
        $hapusipa->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-ipa');
    }

    // IPS
    public function ips(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasips = TugasIps::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-ips', ['tugasips' => $tugasips, 'siswa' => $siswa]);
    }

    public function adminips(Request $request)
    {
        $search = $request->search;
        $tugasips = TugasIps::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-ips', ['tugasips' => $tugasips]);
    }

    public function storeips(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasips = TugasIps::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-ips');
    }

    public function deleteips($id)
    {
        $hapusips = TugasIps::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusips->file);
        Storage::delete($hapusfile);
        $hapusips->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-ips');
    }

    // PABP
    public function pabp(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugaspabp = TugasPabp::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-pabp', ['tugaspabp' => $tugaspabp, 'siswa' => $siswa]);
    }

    public function adminpabp(Request $request)
    {
        $search = $request->search;
        $tugaspabp = TugasPabp::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-pabp', ['tugaspabp' => $tugaspabp]);
    }

    public function storepabp(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugaspabp = TugasPabp::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-pabp');
    }

    public function deletepabp($id)
    {
        $hapuspabp = TugasPabp::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapuspabp->file);
        Storage::delete($hapusfile);
        $hapuspabp->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-pabp');
    }

    // PPKn
    public function ppkn(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasppkn = TugasPpkn::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-ppkn', ['tugasppkn' => $tugasppkn, 'siswa' => $siswa]);
    }

    public function adminppkn(Request $request)
    {
        $search = $request->search;
        $tugasppkn = TugasPpkn::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-ppkn', ['tugasppkn' => $tugasppkn]);
    }

    public function storeppkn(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasppkn = TugasPpkn::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-ppkn');
    }

    public function deleteppkn($id)
    {
        $hapusppkn = TugasPpkn::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusppkn->file);
        Storage::delete($hapusfile);
        $hapusppkn->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-ppkn');
    }

    // Seni Budaya
    public function senibudaya(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugassenibudaya = TugasSenibudaya::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-senibudaya', ['tugassenibudaya' => $tugassenibudaya, 'siswa' => $siswa]);
    }

    public function adminsenibudaya(Request $request)
    {
        $search = $request->search;
        $tugassenibudaya = TugasSenibudaya::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-senibudaya', ['tugassenibudaya' => $tugassenibudaya]);
    }

    public function storesenibudaya(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugassenibudaya = TugasSenibudaya::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-senibudaya');
    }

    public function deletesenibudaya($id)
    {
        $hapussenibudaya = TugasSenibudaya::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapussenibudaya->file);
        Storage::delete($hapusfile);
        $hapussenibudaya->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-senibudaya');
    }

    // PJOK
    public function pjok(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugaspjok = TugasPjok::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-pjok', ['tugaspjok' => $tugaspjok, 'siswa' => $siswa]);
    }

    public function adminpjok(Request $request)
    {
        $search = $request->search;
        $tugaspjok = TugasPjok::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-pjok', ['tugaspjok' => $tugaspjok]);
    }

    public function storepjok(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugaspjok = TugasPjok::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-pjok');
    }

    public function deletepjok($id)
    {
        $hapuspjok = TugasPjok::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapuspjok->file);
        Storage::delete($hapusfile);
        $hapuspjok->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-pjok');
    }

    // Prakarya
    public function prakarya(Request $request)
    {
        $search = $request->search;
        $siswa = User::where('role_id', 3)->paginate();
        $tugasprakarya = TugasPrakarya::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/tugas-prakarya', ['tugasprakarya' => $tugasprakarya, 'siswa' => $siswa]);
    }

    public function adminprakarya(Request $request)
    {
        $search = $request->search;
        $tugasprakarya = TugasPrakarya::where('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('kelas', 'LIKE', '%' . $search . '%')
            ->orWhere('judul', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-tugas-prakarya', ['tugasprakarya' => $tugasprakarya]);
    }

    public function storeprakarya(Request $request)
    {
        $fileName = '';
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('file')->storeAs('file/tugas', $fileName);
        }

        $tugasprakarya = TugasPrakarya::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        Alert::success('Success !', 'Tugas Berhasil ditambah');
        return redirect('tugas-prakarya');
    }

    public function deleteprakarya($id)
    {
        $hapusprakarya = TugasPrakarya::findOrFail($id);
        $hapusfile = ('file/tugas/' . $hapusprakarya->file);
        Storage::delete($hapusfile);
        $hapusprakarya->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-tugas-prakarya');
    }
}
