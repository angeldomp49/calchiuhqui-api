<?php
namespace Calchiuhqui;

use App\Models\ColumnModel;

class IntegerModifier implements Modifier{

    public function toString(ColumnModel $column): string{
        $info = json_decode($column->attributes);

        $isUnsignedText = $info->unsigned ? 'UNSIGNED' : '';
        $isAutoIncrement = $info->autoIncrement ? 'AUTO_INCREMENT' : '';

        return $column->type + $isUnsignedText + $isAutoIncrement;
    }
}