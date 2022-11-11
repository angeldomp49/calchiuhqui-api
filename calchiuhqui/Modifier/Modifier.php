<?php
namespace Calchiuhqui;

use App\Models\ColumnModel;

interface Modifier{

    public function toString(ColumnModel $column): string;

}