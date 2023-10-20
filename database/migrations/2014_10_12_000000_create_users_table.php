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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('dob');
            $table->string('religion')->nullable();
            $table->string('nationality');
            $table->string('guardian');
            $table->string('comaddress');
            $table->string('permaddress');
            $table->string('email');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('examname');
            $table->string('board');
            $table->string('register12');
            $table->string('yearof12');
            $table->string('instname');
            $table->string('state');
            $table->string('image');
            $table->string('dobpdf');
            $table->string('addresspdf');
            $table->string('exampdf');
            $table->string('fee');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
