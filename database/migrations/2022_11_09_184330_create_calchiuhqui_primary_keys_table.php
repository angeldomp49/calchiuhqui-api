<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiPrimaryKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_primary_keys', function (Blueprint $table) {
            $table->string('real_name', 255)->unique();
            $table->string('alias', 50);
            $table->string('on_update', 20);
            $table->string('on_delete', 20);

            $table->primary('real_name');
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
        Schema::dropIfExists('calchiuhqui_primary_keys');
    }
}
