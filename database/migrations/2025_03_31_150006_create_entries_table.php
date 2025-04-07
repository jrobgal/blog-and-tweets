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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();

			$table->string(column: 'title');
			$table->text(column: 'content');

			//Autor
			$table->unsignedBigInteger(column: 'user_id');
			$table->foreign(columns: 'user_id')->references(columns: 'id')->on(table: 'users');
            
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
