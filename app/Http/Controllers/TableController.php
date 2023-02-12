<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Http\Requests\TableRequest;

class TableController extends Controller
{
    public function getCreatePage() {
        return view('create');
    }


    public function createTable(TableRequest $request){
    
        Table::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);


        return redirect(route('getTables'));
    }

    public function getTables(){
        $tables = Table::all();
        return view('view', ['tables' => $tables]);
    }

    public function getTableById($id){
        $table = Table::find($id);

        return view('update',['table'=>$table]);
    }

    public function updateTable(TableRequest $request, $id){
        $table = Table::find($id);

        $table->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect(route('getTables'));
    }

    public function deleteTable($id){
        Table::destroy($id);

        return redirect(route('getTables'));
    }

    
}
