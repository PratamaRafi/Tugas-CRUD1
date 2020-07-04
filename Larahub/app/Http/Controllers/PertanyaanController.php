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

    public function show($id){
       $pertanyaan = PertanyaanModel::find_by_id($id);
       return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request) {
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $deleted = PertanyaanModel::destroy($id);

        return redirect('/pertanyaan');
    } 
}
