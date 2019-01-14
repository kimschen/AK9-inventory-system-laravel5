<?php

/*
|----------------------------------------------------------------
| Services
|----------------------------------------------------------------
| a layer for handling all your application’s logic
|
*/

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductService {

    public function __construct(ProductRepository $product) {

        $this->product = $product;

    }

    public function index() {

        return $this->product->all()->sortByDesc('created_at');

    }

    public function read($id) {

        return $this->product->find($id);

    }

    public function create(Request $request) {

        $data = $request->all();

        if($request->hasFile('image_path')) {

            $imagePath = $request->file('image_path')->store('products', 'gcs');

            $disk = Storage::disk('gcs');
            $disk->put('products/', $imagePath);

            $data['image_path'] = $disk->url($imagePath);

        }

        return $this->product->create($data);

    }

    public function update(Request $request, $id) {

        $data = $request->all();

        if($request->hasFile('image_path')) {

            $imagePath = $request->file('image_path')->store('products', 'gcs');

            $disk = Storage::disk('gcs');
            $disk->put('products/', $imagePath);

            $data['image_path'] = $disk->url($imagePath);

        }

        return $this->product->update($id, $data);

    }

    public function delete($id) {

        return $this->product->delete($id);

    }

}
