<?php

namespace App\Http\Controllers;

use App\Http\Resources\DatabaseResource;
use App\Models\DatabaseModel;
use Calchiuhqui\DatabaseProxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DatabaseController extends Controller{

    private DatabaseProxy $databaseProxy;

    public function __construct(DatabaseModel $database){
        $this->databaseProxy = new DatabaseProxy();
    }

    public function index(){
        return DatabaseResource::collection(DatabaseModel::all());
    }

    public function store(Request $request){
        $dto = new DatabaseModel();

        $dto->real_name = $request->real_name;
        $dto->alias = $request->alias;
        $dto->host = $request->host;
        $dto->username = $request->username;
        $dto->password = Crypt::encrypt($request->password);
        $dto->port = $request->port;

        $this->databaseProxy->create($dto);
    }

    public function show($real_name){
        return new DatabaseResource(DatabaseModel::firstWhere('real_name', $real_name));
    }

    public function update(Request $request, $real_name){
        $dto = DatabaseModel::firstWhere('real_name', $real_name);
        
        $dto->real_name = $request->real_name;
        $dto->alias = $request->alias;
        $dto->host = $request->host;
        $dto->username = $request->username;
        $dto->password = Crypt::encrypt($request->password);
        $dto->port = $request->port;

        $dto->save();
    }

    public function destroy($real_name){
        $this->databaseProxy->delete($real_name);
    }
}
