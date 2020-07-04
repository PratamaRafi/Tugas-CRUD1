<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all() {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function find_by_id($id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->first();
        return $jawaban;
    }

    public static function save($id, $jawab) {
        $jawab['pertanyaan_id'] = $id;
        $new_jawaban = DB::table('jawaban')->insert($jawab);
        return $new_jawaban;
    }

    
}