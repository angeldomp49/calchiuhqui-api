<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableModel extends Model{

    protected $primaryKey = 'calchiuhqui_tables';
    use HasFactory;

    public function database(){
        return $this->belongsTo(DatabaseModel::class);
    }

    public function schema(){
        return $this->belongsTo(SchemaModel::class);
    }

    public function columns(){
        return $this->hasMany(ColumnModel::class);
    }
}
