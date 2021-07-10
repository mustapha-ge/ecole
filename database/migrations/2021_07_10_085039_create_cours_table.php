<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('NameCours');
            $table->string('Typecours');
            $table->integer('DurationCours');
            $table->integer('Coeff');
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
 Schema::dropIfExists('cours');
    }
}
