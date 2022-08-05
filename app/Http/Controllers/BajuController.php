<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }
    public function product()
    {
        return view('customer.product', compact('product'));

    }
    public function store()
    {
        
        return view('customer.store', compact('store'));
    }
    public function checkout()
    {
        return view('customer.checkout', compact('checkout'));

    }
    public function cart()
    {
        return view('customer.cart', compact('cart'));

    }

   
}
