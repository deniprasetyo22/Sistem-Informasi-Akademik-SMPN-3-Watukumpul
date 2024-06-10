<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function admin(Request $request)
    {
        $search = $request->search;
        $user = User::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->paginate(15);
        return view('admin/admin-user', ['user' => $user]);
    }

    public function UserAdmin(Request $request)
    {
        $search = $request->search;
        $user = User::Where('role_id', 1)->paginate(15);
        return view('admin/admin-user-admin', ['user' => $user]);
    }

    public function UserTeacher(Request $request)
    {
        $search = $request->search;
        $user = User::Where('role_id', 2)->paginate(15);
        return view('admin/admin-user-teacher', ['user' => $user]);
    }

    public function UserStudent(Request $request)
    {
        $search = $request->search;
        $user = User::Where('role_id', 3)->paginate(15);
        return view('admin/admin-user-student', ['user' => $user]);
    }

    public function create()
    {
        $user = User::all();
        return view('admin/admin-add-user', ['user' => $user]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:users',
            'name' => 'required',
            'jeniskelamin' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ], [
            'nisn.unique' => 'nisn sudah terdaftar',
            'name.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'email.unique' => 'email sudah terdaftar',
            'password.required' => 'password wajib diisi',
            'password.min' => 'password minimal 8 karakter'
        ]);

        $user = User::create([
            'nisn' => $request->nisn,
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password)
        ]);

        Alert::success('Success !', 'Data Berhasil ditambah');
        return redirect('admin-user');
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('admin/admin-edit-user', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'nisn' => $request->nisn,
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password)
        ]);

        Alert::success('Success !', 'Data Berhasil diupdate');

        return redirect('admin-user');
    }

    public function delete($id)
    {
        $hapususer = User::findOrFail($id);
        $hapususer->delete();

        Alert::success('Success !', 'Data Berhasil dihapus');
        return redirect('admin-user');
    }
}
