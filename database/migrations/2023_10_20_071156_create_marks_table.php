<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('p');
            $table->string('pmax');
            $table->string('phyperc');
            $table->string('c');
            $table->string('cmax');
            $table->string('chemperc');
            $table->string('b');
            $table->string('bmax');
            $table->string('bioperc');
            $table->string('e');
            $table->string('emax');
            $table->string('engperc');
            $table->string('total');
            $table->string('maxtotal');
            $table->string('totalperc');
            $table->string('grand');
            $table->string('grandmax');
            $table->string('grandperc');
            $table->string('applicant_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
