<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Projects\Status;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('projects', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('name');

            $table->string('status')->default(Status::ACTIVE->value);

            $table
                ->foreignUlid('team_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();



            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
