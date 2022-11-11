<?php
namespace Calchiuhqui;

use App\Models\ColumnModel;

class FloatModifier implements Modifier{

    public function toString(ColumnModel $column): string{
        $info = json_decode($column->build);

        return $column->type + '(' + $info->total_digits + ',' + $info->right_digits + ')';
    }
}