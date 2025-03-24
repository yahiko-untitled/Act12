<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('real_name');
            $table->string('hero_name');
            $table->string('photo'); // Guardará la ruta de la imagen en local
            $table->text('additional_info')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Agrega soporte para borrado suave
        });
    }

    public function down()
    {
        Schema::dropIfExists('superheroes');
    }
};
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
