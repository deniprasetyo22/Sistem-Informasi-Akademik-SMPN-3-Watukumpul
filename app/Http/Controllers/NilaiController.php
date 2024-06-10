<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NilaiController extends Controller
{
    public function admin(Request $request)
    {
        $search = $request->search;
        $nilai = Nilai::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('jenis_kelamin', 'LIKE', '%' . $search . '%')
            ->orWhere('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('semester', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-nilai', ['nilai' => $nilai]);
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $nilai = Nilai::where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('jenis_kelamin', 'LIKE', '%' . $search . '%')
            ->orWhere('nisn', 'LIKE', '%' . $search . '%')
            ->orWhere('semester', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('user/nilai', ['nilai' => $nilai]);
    }

    public function create()
    {
        $siswa = User::where('role_id', 3)->paginate();
        return view('admin/admin-add-nilai',['siswa' => $siswa]);
    }

    public function teachercreate()
    {
        $siswa = User::where('role_id', 3)->paginate();
        return view('user/add-nilai', ['siswa'=>$siswa]);
    }

    public function store(Request $request)
    {
        $nilai = Nilai::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'semester' => $request->semester,
            'pabp_a' => $request->pabp_a,
            'pabp_b' => $request->pabp_b,
            'pabp_c' => $request->pabp_c,
            'ppkn_a' => $request->ppkn_a,
            'ppkn_b' => $request->ppkn_b,
            'ppkn_c' => $request->ppkn_c,
            'b_indo_a' => $request->b_indo_a,
            'b_indo_b' => $request->b_indo_b,
            'b_indo_c' => $request->b_indo_c,
            'mtk_a' => $request->mtk_a,
            'mtk_b' => $request->mtk_b,
            'mtk_c' => $request->mtk_c,
            'ipa_a' => $request->ipa_a,
            'ipa_b' => $request->ipa_b,
            'ipa_c' => $request->ipa_c,
            'ips_a' => $request->ips_a,
            'ips_b' => $request->ips_b,
            'ips_c' => $request->ips_c,
            'b_inggris_a' => $request->b_inggris_a,
            'b_inggris_b' => $request->b_inggris_b,
            'b_inggris_c' => $request->b_inggris_c,
            'seni_budaya_a' => $request->seni_budaya_a,
            'seni_budaya_b' => $request->seni_budaya_b,
            'seni_budaya_c' => $request->seni_budaya_c,
            'pjok_a' => $request->pjok_a,
            'pjok_b' => $request->pjok_b,
            'pjok_c' => $request->pjok_c,
            'prakarya_a' => $request->prakarya_a,
            'prakarya_b' => $request->prakarya_b,
            'prakarya_c' => $request->prakarya_c
        ]);

        if (Auth::User()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('admin-nilai');
        } else {
            Alert::success('Success !', 'Data Berhasil ditambah');
            return redirect('nilai');
        }
    }

    public function show($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('admin/admin-detail-nilai', ['nilai' => $nilai]);
    }

    public function edit(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('admin/admin-edit-nilai', ['nilai' => $nilai]);
    }

    public function teacheredit(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('user/edit-nilai', ['nilai' => $nilai]);
    }

    public function update(Request $request, $id)
    {

        $nilai = Nilai::findOrFail($id);
        $nilai->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'semester' => $request->semester,
            'pabp_a' => $request->pabp_a,
            'pabp_b' => $request->pabp_b,
            'pabp_c' => $request->pabp_c,
            'ppkn_a' => $request->ppkn_a,
            'ppkn_b' => $request->ppkn_b,
            'ppkn_c' => $request->ppkn_c,
            'b_indo_a' => $request->b_indo_a,
            'b_indo_b' => $request->b_indo_b,
            'b_indo_c' => $request->b_indo_c,
            'mtk_a' => $request->mtk_a,
            'mtk_b' => $request->mtk_b,
            'mtk_c' => $request->mtk_c,
            'ipa_a' => $request->ipa_a,
            'ipa_b' => $request->ipa_b,
            'ipa_c' => $request->ipa_c,
            'ips_a' => $request->ips_a,
            'ips_b' => $request->ips_b,
            'ips_c' => $request->ips_c,
            'b_inggris_a' => $request->b_inggris_a,
            'b_inggris_b' => $request->b_inggris_b,
            'b_inggris_c' => $request->b_inggris_c,
            'seni_budaya_a' => $request->seni_budaya_a,
            'seni_budaya_b' => $request->seni_budaya_b,
            'seni_budaya_c' => $request->seni_budaya_c,
            'pjok_a' => $request->pjok_a,
            'pjok_b' => $request->pjok_b,
            'pjok_c' => $request->pjok_c,
            'prakarya_a' => $request->prakarya_a,
            'prakarya_b' => $request->prakarya_b,
            'prakarya_c' => $request->prakarya_c
        ]);

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil diupdate');
            return back();
        } else {
            Alert::success('Success !', 'Data Berhasil diupdate');
            return redirect('nilai');
        }
    }

    public function delete($id)
    {
        $hapusnilai = Nilai::findOrFail($id);
        $hapusnilai->delete();

        if (Auth::user()->role_id == 1) {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('admin-nilai');
        } else {
            Alert::success('Success !', 'Data Berhasil dihapus');
            return redirect('nilai');
        }
    }

    public function showUser($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('user/detail-nilai', ['nilai' => $nilai]);
    }
}
