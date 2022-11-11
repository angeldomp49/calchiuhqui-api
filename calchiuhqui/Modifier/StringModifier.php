<?php
namespace Calchiuhqui;

use App\Models\ColumnModel;

class StringModifier implements Modifier{

    public function toString(ColumnModel $column): string{
        $info = json_decode($column->build);
        return $column->type + '(' + $info->size + ')';
    }

}