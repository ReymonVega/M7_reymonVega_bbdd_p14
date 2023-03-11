<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements(column: 'id');
            $table->string(column: 'marcaZapatilla', length:50)->unique();
            $table->text(column: 'informacion');
            $table->float(column: 'preu_salida', total:7, places:2)->unsigned();
            $table->float(column: 'preu_reventa', total:7, places:2)->unsigned();
            $table->integer(column: 'numero_modelo')->unsigned();
            $table->text(column: 'estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(table: 'articles');
    }
};
