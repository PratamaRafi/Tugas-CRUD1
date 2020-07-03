<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($tanya) {
        $new_pertanyaan = DB::table('pertanyaan')->insert($tanya);
        return $new_pertanyaan;
    }
}