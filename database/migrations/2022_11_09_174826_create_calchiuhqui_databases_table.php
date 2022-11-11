<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalchiuhquiDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calchiuhqui_databases', function (Blueprint $table) {

            $table->string('real_name', 255)->unique();
            $table->string('alias', 50);
            $table->string('host', 50);
            $table->string('port', 50);
            $table->string('username', 50);
            $table->string('password', 255);

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
        Schema::dropIfExists('calchiuhqui_databases');
    }
}
