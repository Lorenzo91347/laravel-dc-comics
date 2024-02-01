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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->text('description');
            $table->string('thumb',30);
            $table->double('price',4,2);
            $table->char('series',16);
            $table->date('sale_date');
            $table->char('type',16);
            $table->char('artists',160);
            $table->char('writers',160);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
