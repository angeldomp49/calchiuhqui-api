<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiColumPrimaryKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_colum_primary_key', function (Blueprint $table) {
            $table->string('primary_key_real_name', 255);
            $table->string('column_real_name', 255);

            $table->foreign('primary_key_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_primary_keys')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->foreign('column_real_name')
                    ->references('real_name')
                    ->on('calchiuhqui_columns')
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
        Schema::dropIfExists('calchiuhqui_colum_primary_key');
    }
}
