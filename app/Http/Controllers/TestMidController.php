<?php

namespace App\Http\Controllers;

use App\Models\TestMid;
use Illuminate\Http\Request;

class TestMidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = TestMid::all();
        return view("/index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new TestMid();
        $products->Name = $request->Name;
        $products->Price = $request->Price;
        $products->Quantity = $request->Quantity;
        $products->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestMid  $testMid
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestMid  $testMid
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = TestMid::find($request->id);
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestMid  $testMid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        TestMid::where('id', $request->id)->update([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'Quantity' => $request->product_qty,
            'updated_at' => now()
        ]);
        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestMid  $testMid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        TestMid::find($request->id)->delete();
        return redirect()->back();
    }
}
