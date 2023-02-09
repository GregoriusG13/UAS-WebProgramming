<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $data = Order::join('item', 'item.item_id', '=', 'order.item_id')->where('account_id', Auth::user()->account_id)->get();
        return view('cart', ['orders' => $data]);
    }

    public function Erase($id)
    {
        $post = Order::findOrFail($id);
        $post->delete();
        return redirect('cart');
    }
}
