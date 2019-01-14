<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Services\ExpenseService;


class ExpenseController extends Controller
{

    protected $expenseservice;

    public function __construct(ExpenseService $expenseservice) {

        $this->expenseservice = $expenseservice;

    }

    public function index()
    {
        $expenses = $this->expenseservice->index();

        return view('menu.expense.index', compact('expenses'));
    }

    public function create()
    {
        return view('menu.expense.create');
    }

    public function store(Request $request)
    {
        $expenses = $this->expenseservice->create($request);

        return redirect('expense')->with('success', trans('expenses.created'));
    }

    public function edit($id)
    {
        $expenses = $this->expenseservice->read($id);

        return view('menu.expense.edit', compact('expenses', 'id'));
    }

    public function update(Request $request, $id)
    {
        $expenses = $this->expenseservice->update($request, $id);

        return redirect('expense')->with('success', trans('expenses.updated'));

    }

    public function destroy($id)
    {
        $expenses = $this->expenseservice->delete($id);
        
        return redirect('expense')->with('success', trans('expenses.deleted'));

    }
}
