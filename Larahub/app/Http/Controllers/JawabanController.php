<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index() {
        $jawaban = JawabanModel::get_all();
            return view('jawaban.hasil', compact('jawaban'));
    }

    public function store(Request $request) {
        $jawab = $request->all();
        unset($jawab["_token"]);
        $hasil = JawabanModel::save($jawab);
        // dd($tanya);
        // dd($data);
        if($hasil){
            return redirect('/jawaban/hasil');
        }
    }
}
