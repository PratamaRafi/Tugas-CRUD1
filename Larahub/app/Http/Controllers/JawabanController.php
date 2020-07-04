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

    public function store($pertanyaan_id, Request $request) {
        $jawab = $request->all();
        // dd($jawab);
        unset($jawab["_token"]);
        JawabanModel::save($jawab);
        

    }
}
