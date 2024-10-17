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
        Schema::create('resto', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',["M", "F", "O"]);
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resto');
    }
};
