<?php

/*
|-----------------------------------------------------------
| Repositories
|-----------------------------------------------------------
| a common wrapper for your model and the place where
| you would write different queries to your database
|
*/

namespace App\Repositories;

use App\Models\Product;

class ProductRepository {

    protected $product;

    public function __construct(Product $product) {

        $this->product = $product;

    }

    public function create($data) {

        return $this->product->create($data);

    }

    public function all() {

        return $this->product->all();

    }

    public function find($id) {

        return $this->product->find($id);

    }

    public function update($id, array $data) {

        return $this->product->find($id)->update($data);

    }

    public function delete($id) {

        return $this->product->find($id)->delete();

    }

}
