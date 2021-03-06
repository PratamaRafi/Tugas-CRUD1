<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all() {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function find_by_pertanyaan_id($pertanyaan_id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
        // dd($jawaban);
        return $jawaban;
    }

    public static function save($jawab) {
        $new_jawaban = DB::table('jawaban')->insert($jawab);
        return $new_jawaban;
    }

    
}