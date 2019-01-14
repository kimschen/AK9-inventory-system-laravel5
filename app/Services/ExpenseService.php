<?php

/*
|----------------------------------------------------------------
| Services
|----------------------------------------------------------------
| a layer for handling all your application’s logic
|
*/

namespace App\Services;

use App\Models\Expense;
use App\Repositories\ExpenseRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExpenseService {

    public function __construct(ExpenseRepository $expense) {

        $this->expense = $expense;

    }

    public function index() {

        return $this->expense->all()->sortByDesc('created_at');

    }

    public function read($id) {

        return $this->expense->find($id);

    }

    public function create(Request $request) {

        $data = $request->all();

        return $this->expense->create($data);

    }

    public function update(Request $request, $id) {

        $data = $request->all();

        return $this->expense->update($id, $data);

    }

    public function delete($id) {

        return $this->expense->delete($id);

    }

}
