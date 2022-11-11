<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForeignKeyModel extends Model{

    protected $primaryKey = 'calchiuhqui_foreign_keys';
    use HasFactory;

    public function columns(){
        return $this->belongsToMany(ColumnModel::class);
    }
}
