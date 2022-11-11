<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiForeignKeyColumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_foreign_key_colum', function (Blueprint $table) {
            
            $table->string('foreign_key_real_name', 255);
            $table->string('column_real_name', 255);

            $table->foreign('foreign_key_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_foreign_keys')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreign('column_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_columns')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('calchiuhqui_foreign_key_colum');
    }
}
