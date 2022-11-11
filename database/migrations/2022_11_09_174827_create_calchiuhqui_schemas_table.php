<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiSchemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_schemas', function (Blueprint $table) {
            $table->id();
            $table->string('database_real_name', 255);
            $table->string('name', 50);

            $table->foreign('database_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_databases')
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
        Schema::dropIfExists('calchiuhqui_schemas');
    }
}
