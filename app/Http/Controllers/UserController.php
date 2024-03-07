<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\User as Model;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil data dari input form
        $akses = $request->input('akses');
        $keyword = $request->input('keyword');

        // Query untuk mencari pengguna berdasarkan akses dan semua bidang

        if ($akses) {
            $model = Model::where('akses', $akses)->paginate(10);
        } elseif ($akses && $keyword) {
            $model = Model::where('akses', $akses)
                ->where('name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->orWhere('alamat', 'like', "%$keyword%")
                ->orWhere('telepon', 'like', "%$keyword%")
                ->paginate(10);
        } elseif ($keyword) {
            $model = Model::where('name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->orWhere('alamat', 'like', "%$keyword%")
                ->orWhere('telepon', 'like', "%$keyword%")
                ->paginate(10);
        } else {
            $model = Model::paginate(10);
        }
        $title = 'Delete User!';
        $text = "Apakah anda yakin ingin menghapus user ini?";

        return view('partial.table', [
            'routePrefix' => 'user',
            'title' => 'Data User',
        ])->with('model', $model);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partial.create', [
            'models' => new Model(),
            'method' => 'POST',
            'title' => 'Create Data User',
            'button' => 'Simpan',
            'route' => 'user.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        User::create($user);
        return redirect()->route('user.index');


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Model::findOrFail($id);

        // Ambil buku yang sedang dipinjam oleh pengguna
        $borrowedBooks = $user->peminjaman()->where('status', 'Dipinjam')->with('buku')->paginate(2);
        $book = $user->peminjaman()->where('status', 'Dikembalikan')->with('buku')->paginate(2);

        // Kirim data ke view
        return view('petugas.user_detail', compact('user', 'borrowedBooks', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Model::findOrfail($id);
        return view('partial.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'role' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'password' => 'nullable',
        ]);
        $model = Model::findOrFail($id);
        if ($requestData['password'] == "") {
            unset($requestData['password']);
        } else {
            $requestData['password'] = Hash::make($requestData['password']);
        }
        $model->fill($requestData);
        $model->save();
        return redirect()
            ->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Model::findOrFail($id);
        $model->delete();
        return redirect()
            ->route('user.index');
    }
}
