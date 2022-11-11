<?php

namespace App\Http\Controllers;

use App\Http\Resources\SchemaResource;
use App\Models\SchemaModel;
use Illuminate\Http\Request;

class SchemaController extends Controller{

    public function index($database_real_name){
        return SchemaResource::collection(
            SchemaModel::where('database_real_name', $database_real_name)->get();
        );
    }

    public function store(Request $request){
        SchemaModel::create([
            'database_real_name' => $request->database_real_name,
            'name' => $request->name
        ]);
    }

    public function show($id){
        return new SchemaResource(SchemaModel::find($id));
    }

    public function update(Request $request, $id){

        $schema = SchemaModel::find($id);

        $schema->database_real_name = $request->database_real_name;
        $schema->name = $request->name;
        $schema->save();
        
    }

    public function destroy($id){
        SchemaModel::destroy($id);
    }
}
