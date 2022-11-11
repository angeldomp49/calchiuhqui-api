<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryKeyModel extends Model{

    protected $primaryKey = 'calchiuhqui_primary_keys';
    use HasFactory;

    public function columns(){
        return $this->belongsToMany(ColumnModel::class);
    }
}
