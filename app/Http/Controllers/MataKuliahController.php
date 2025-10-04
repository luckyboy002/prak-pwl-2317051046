<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matakuliah;


class MataKuliahController extends Controller
{
        public function index()
    {
        $data = [
            'title' => 'List MK',
            'mks' => mata_kuliah ::all(),
        ];
        return view('list_MKr',$data);
    }
     public create()
    {
        return view('list_MKr',$data);
    }

}
