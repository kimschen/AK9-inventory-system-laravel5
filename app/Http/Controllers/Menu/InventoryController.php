<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\InventoryRequest;
use Illuminate\Http\Request;
use App\Models\Products;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Products::orderBy('created_at', 'desc');
        $products = $products->get()->toArray();

        return view('menu.inventory.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventoryRequest $request)
    {
        $products = new Products([
            'name' => $request->get('product_name'),
            'unit_cost' => $request->get('unit_cost'),
            'quantity' => $request->get('quantity'),
            'channel' => $request->get('channel'),
            'supplier' => $request->get('supplier'),
            'image_path' => $request->get('image_path')
        ]);

        $products->save();
        return redirect('inventory')->with('success', trans('products.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);

        return view('menu.inventory.edit', compact('products', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InventoryRequest $request, $id)
    {
        $products = Products::findOrFail($id);
        $products->name = $request->get('product_name');
        $products->unit_cost = $request->get('unit_cost');
        $products->quantity = $request->get('quantity');
        $products->channel = $request->get('channel');
        $products->supplier = $request->get('supplier');
        $products->image_path = $request->get('image_path');

        $products->save();

        return redirect('inventory')->with('success', trans('products.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();

        return redirect('inventory')->with('success', trans('products.deleted'));

    }
}
