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

use App\Models\Expense;

class ExpenseRepository {

    protected $expense;

    public function __construct(Expense $expense) {

        $this->expense = $expense;

    }

    public function create($data) {

        return $this->expense->create($data);

    }

    public function all() {

        return $this->expense->all();

    }

    public function find($id) {

        return $this->expense->find($id);

    }

    public function update($id, array $data) {

        return $this->expense->find($id)->update($data);

    }

    public function delete($id) {

        return $this->expense->find($id)->delete();

    }

}
