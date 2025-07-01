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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); 
            $table->double('price')->nullable();
             $table->double('Palary')->nullable();
             $table->double('calculatt')->nullable();


    
            // Name of the product
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.wenn wir die Migration rückgängig machen wollen, löschen wir die Tabelle.
     * This method is called when rolling back the migration.
     * It drops the 'products' table.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
