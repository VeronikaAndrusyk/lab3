<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounting;

class AccountingController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Валідація даних $request

        $accounting = new Accounting([
            'code' => $request->code,
            'name' => $request->name,
            'position' => $request->position,
            'salary' => $request->salary,
            'children_count' => $request->children_count,
            'experience' => $request->experience,
        ]);

        $accounting->save();

        return redirect()->route('accounting.index');
    }

    public function index()
    {
        $accountings = Accounting::all();
        return view('index', ['accountings' => $accountings]);
    }

    public function show($id)
    {
        $accounting = Accounting::findOrFail($id);
        return view('show', ['accounting' => $accounting]);
    }

    public function edit($id)
    {
        $accounting = Accounting::findOrFail($id);
        return view('edit', ['accounting' => $accounting]);
    }

    public function update(Request $request, $id)
    {
        // Валідація даних $request

        $accounting = Accounting::findOrFail($id);

        $accounting->code = $request->code;
        $accounting->name = $request->name;
        $accounting->position = $request->position;
        $accounting->salary = $request->salary;
        $accounting->children_count = $request->children_count;
        $accounting->experience = $request->experience;

        $accounting->save();

        return redirect()->route('accounting.index');
    }

    public function destroy($id)
    {
        $accounting = Accounting::findOrFail($id);
        $accounting->delete();

        return redirect()->route('accounting.index');
    }
}
