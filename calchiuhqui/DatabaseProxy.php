<?php
namespace Calchiuhqui;

use App\Models\DatabaseModel;
use Illuminate\Support\Facades\DB;

class DatabaseProxy{

    public function create( DatabaseModel $model ){

        $model->save();
        
    }

    public function delete($real_name){

        DatabaseModel::firstWhere('real_name', $real_name)->delete();
    }

}