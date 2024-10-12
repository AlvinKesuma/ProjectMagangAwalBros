<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntibioticProphylaxisTable extends Migration
{
    public function up()
    {
        Schema::create('antibiotic_prophylaxis', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->decimal('num', 5, 1);
            $table->decimal('denum', 5, 1);
            $table->year('year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antibiotic_prophylaxis');
    }
}
