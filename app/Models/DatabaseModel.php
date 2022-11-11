<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseModel extends Model{

    protected $primaryKey = 'calchiuhqui_databases';
    use HasFactory;

    public function tables(){
        return $this->hasMany(TableModel::class);
    }

    public function schemas(){
        return $this->hasMany(SchemaModel::class);
    }

}
