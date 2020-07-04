<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($pertanyaan_id) {
        // dd('test');
        $jawaban = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
            return view('jawaban.hasil', compact('jawaban'));
    }

    public function store($pertanyaan_id, Request $request) {
        $jawab = $request->all();
        // dd($jawab);
        unset($jawab["_token"]);
        JawabanModel::save($jawab);
        return redirect('/pertanyaan');
    }
}
