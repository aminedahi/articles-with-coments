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
        Schema::create('commantaire',function(Blueprint $table){
            $table->id();
            $table->longText('content');
            $table->date('date_pub');
            $table->foreignId('article_id')->constrained('article');
            $table->timestamps();
        });
    
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        schema::dropIfExists('article');
    }
};
