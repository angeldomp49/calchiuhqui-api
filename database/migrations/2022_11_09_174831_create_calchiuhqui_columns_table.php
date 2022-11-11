<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_columns', function (Blueprint $table) {

            $table->string('real_name', 255)->unique();
            $table->string('alias', 50);
            $table->string('table_real_name', 255);
            $table->string('column_type_real_name', 255);
            $table->string('modifier_class', 255);
            $table->json('build');

            $table->primary('real_name');
            $table->foreign('table_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_tables')
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
        Schema::dropIfExists('calchiuhqui_columns');
    }
}
