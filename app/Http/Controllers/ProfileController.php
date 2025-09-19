<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama="",$NPM="",$kelas="") {
        $data = [
            'nama' => $nama,
            'npm' => $NPM,
            'kelas' => $kelas,
        ];
        return view('profile', $data);
    }
}
