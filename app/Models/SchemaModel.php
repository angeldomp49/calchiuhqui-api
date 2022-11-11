<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemaModel extends Model{

    protected $primaryKey = 'calchiuhqui_schemes';
    use HasFactory;

    public function database(){
        return $this->belongsTo(DatabaseModel::class);
    }

    public function tables(){
        return $this->hasMany(TableModel::class);
    }
}
