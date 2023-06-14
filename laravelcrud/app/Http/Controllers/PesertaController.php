<?php

namespace App\Http\Controllers;

use App\Models\Peserta;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function daftar()
    {
        $data = Peserta::all();
        return view('daftar', compact('data'));
    }

    public function form()
    {
        return view('form');
    }

    public function create(Request $request)
    {
        Peserta::create($request->all());
        return redirect()->route('daftar');
    }

    public function getid($id)
    {
        $data = Peserta::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Peserta::find($id);
        $data->update($request->all());
        return redirect()->route('daftar');
    }

    public function delete($id)
    {
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('daftar');
    }
}
