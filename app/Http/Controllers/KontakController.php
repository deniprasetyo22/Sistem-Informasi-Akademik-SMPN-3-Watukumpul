<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function admin()
    {
        $kontak = Kontak::all();
        return view('admin/admin-kontak', ['kontak' => $kontak]);
    }

    public function index()
    {
        $kontak = Kontak::all();
        return view('user/kontak', ['kontak' => $kontak]);
    }

    public function edit(Request $request, $id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin/admin-edit-kontak', ['kontak' => $kontak]);
    }

    public function update(Request $request, $id)
    {

        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());
        return redirect('admin-kontak');
    }
}
