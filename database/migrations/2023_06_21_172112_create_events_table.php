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
            $table->string('parser')->nullable();

            $table->text('description');

            $table->boolean('notify')->default(false);

            $table->json('tags')->nullable();
            $table->json('meta')->nullable();

            $table
                ->foreignUlid('channed_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
