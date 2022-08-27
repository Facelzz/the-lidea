<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    private string $tableName = 'specialities';

    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table): void {
            $table->id();

            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists($this->tableName);
    }
};