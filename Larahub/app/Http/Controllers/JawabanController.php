<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index() {
        $jawaban = JawabanModel::get_all();
            return view('jawaban.menjawab', compact('jawaban'));
    }

    public function store($id, Request $request) {
        $jawab = $request->all();
        unset($jawab["_token"]);
        $hasil = JawabanModel::save($id, $jawab);
        dd($hasil);
        if($hasil){
            return redirect('/jawaban/hasil');
        }
    }
}
