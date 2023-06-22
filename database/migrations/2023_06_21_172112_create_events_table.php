<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('events', static function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('name');
            $table->string('icon');


            $table->text('description');

            $table->boolean('notify')->default(false);

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
