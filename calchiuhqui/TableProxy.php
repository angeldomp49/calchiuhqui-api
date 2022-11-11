<?php
namespace Calchiuhqui;

use App\Models\TableModel;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class TableProxy{

    public function create( TableModel $table ){

        $database = $table->database();

        Config::set('database.connections.calchiuhqui', [
            'host' => $database->host,
            'port' => $database->port,
            'username' => $database->username,
            'password' => $database->password,
            'database' => $database->real_name,
            'driver' => 'mysql'
        ]);

        DB::transaction( function() use($table){
            DB::connection('calchiuhqui')
                ->statement('CREATE TABLE ' + $this->completeName($table) + ';');
        } );

        $table->save();
    }

    public function update(TableModel $table){

        DB::transaction( function() use($table){

            $query = 'ALTER TABLE ' + $this->completeName($table);

            foreach ($table->columns as $column) {
                $modifierClass = $column->modifier_class;
                $modifier = new $modifierClass();
                $query .= ' ' + $modifier->toString($column);
            }

            $query .= ' ;';

            DB::connection('calchiuhqui')->statement($query);

            
        } );

        $table->save();
    }

    public function delete( string $real_name){

        $table = TableModel::firstWhere('real_name', $real_name);

        DB::transaction( function() use($table){
            DB::connection('calchiuhqui')
                ->statement('DROP TABLE ' + $this->completeName($table) + ';'); 
        } );

        $table->delete();

    }

    public function completeName(TableModel $table): string{
        return $table->schema->name + '_' + $table->real_name;
    }
}