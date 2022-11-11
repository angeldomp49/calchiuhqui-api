<?php

namespace App\Http\Controllers;

use App\Http\Resources\TableResource;
use App\Models\TableModel;
use Illuminate\Http\Request;
use Calchiuhqui\TableProxy;

class TableController extends Controller{

    private TableProxy $tableProxy;

    public function index($database_real_name){
        return TableResource::collection(TableModel::where('database_real_name', $database_real_name)->get());
    }

    public function store(Request $request){
        $dto = new TableModel();

        $dto->real_name = $request->real_name;
        $dto->alias = $request->alias;
        $dto->database_real_name = $request->database_real_name;
        $dto->schema_id = $request->schema_id;

        $this->tableProxy->create($dto);
    }

    public function show($real_name){
        return new TableResource(TableModel::firstWhere('real_name', $real_name));
    }

    public function update(Request $request, $real_name){
        $dto = TableModel::firstWhere('real_name', $real_name);

        $dto->real_name = $request->real_name;
        $dto->alias = $request->alias;
        $dto->database_real_name = $request->database_real_name;
        $dto->schema_id = $request->schema_id;
        
        $this->tableProxy->update($dto);
    }

    public function destroy($real_name){
        $this->tableProxy->delete($real_name);
    }
}
