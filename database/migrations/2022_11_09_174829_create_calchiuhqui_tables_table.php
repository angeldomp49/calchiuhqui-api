<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_tables', function (Blueprint $table) {

            $table->string('real_name', 255)->unique();
            $table->string('alias', 50);
            $table->string('database_real_name', 255);
            $table->unsignedBigInteger('schema_id');

            $table->primary('real_name');
            $table->foreign('database_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_databases')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->foreign('schema_id')
                    ->references('id')
                    ->on('calchiuhqui_schema')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calchiuhqui_tables');
    }
}
