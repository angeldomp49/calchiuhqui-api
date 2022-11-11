<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColumnModel extends Model{

    protected $primaryKey = 'calchiuhqui_columns';
    use HasFactory;

    public function table(){
        return $this->belongsTo(TableModel::class);
    }

    public function foreignKeys(){
        return $this->belongsToMany(ForeignKeyModel::class);
    }

    public function primaryKeys(){
        return $this->belongsToMany(PrimaryKeyModel::class);
    }
}
