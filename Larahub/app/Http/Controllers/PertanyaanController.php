<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
            return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        $tanya = $request->all();
        unset($tanya["_token"]);
        $data = PertanyaanModel::save($tanya);
        // dd($tanya);
        // dd($data);
        if($data){
            return redirect('/pertanyaan');
        }
    }
}
