<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('item')->paginate(10);
        return view('home', ['pegawai' => $data]);
    }
}
