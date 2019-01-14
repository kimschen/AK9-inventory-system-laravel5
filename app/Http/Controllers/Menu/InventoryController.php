<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\InventoryRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class InventoryController extends Controller
{

    protected $productservice;

    public function __construct(ProductService $productservice) {

        $this->productservice = $productservice;

    }

    public function index() {

        $products = $this->productservice->index();

        return view('menu.inventory.index', compact('products'));
    }

    public function create() {

        return view('menu.inventory.create');

    }

    public function store(InventoryRequest $request) {

        $products = $this->productservice->create($request);

        return redirect('inventory')->with('success', trans('products.created'));
    }

    public function edit($id) {

        $products = $this->productservice->read($id);

        return view('menu.inventory.edit', compact('products', 'id'));
    }

    public function update(InventoryRequest $request, $id) {

        $products = $this->productservice->update($request, $id);

        return redirect('inventory')->with('success', trans('products.updated'));
    }

    public function destroy($id) {

        $products = $this->productservice->delete($id);

        return redirect('inventory')->with('success', trans('products.deleted'));

    }
}
