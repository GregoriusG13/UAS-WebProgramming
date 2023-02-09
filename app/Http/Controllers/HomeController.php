<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        //mengambil data pegawai dari database
        $data = Item::paginate(10);

        //mengirim data pegawai ke view pegawai
        return view('home', ['items' => $data]);
    }

    public function show($item_id)
    {
        $data = Item::findOrFail($item_id); //This will fetch the respective record from the table.
        return view('detail', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['account_id'] = Auth::user()->account_id;
        Order::create($data);
        return redirect()->route('cart');
    }
}
