<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   //query from model
        // $goods = Goods::all();
        //dd($goods);
        //query builder untuk ambil data
        $goodsbuilder = db::table('goods')->get();
        $coba = 10;
        // dd($goodsbuilder);                    //akan dipakai di view
        return view('pages.goods.goods', compact('goodsbuilder', 'coba'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Goods $goods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goods $goods)
    {
        return view('pages.goods.edit', compact('goods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goods $goods)
    {
        dd('test');
        $goods->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
        return redirect()->route('goods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goods $goods)
    {
        //
    }
}
