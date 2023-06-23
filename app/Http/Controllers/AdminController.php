<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator; //memanggil fungsi validator
use Illuminate\Support\Facades\Hash;  //untuk membaca password hash
use Carbon\Carbon; //membaca class carbon
use Session;

class AdminController extends Controller
{
    public function tabelprofile(){
        $data = UserModel::all();
        return view('profiladmin.tabel-admin', compact(['data']));
    }

    public function admin()
    {
        return view('profiladmin.tabel-admin');
    }

    public function create()
    {
        return view('profiladmin.tambah-admin');
    }
    public function edit($id)
    {
        $data = UserModel::where('user_id',$id)->first();
        return view('profiladmin.tambah-admin',compact('data'));
    }
    public function store(Request $request)
    {
 
        $data = UserModel::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        UserModel::find($request->except(['_token','submit']));

        return redirect()->route('tabelprofile');
    }
}
