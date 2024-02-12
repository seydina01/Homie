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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('room');
            $table->integer('bathroom');
            $table->integer('garage');
            $table->double('surface');
            $table->date('yearOfBuild')->nullable();
            $table->longText('description');
            $table->string('adresse');
            $table->boolean('status')->default(true);
            $table->double('price');
            $table->string('picture1')->nullable();
            $table->string('picture2')->nullable();
            $table->string('picture3')->nullable();
            $table->string('picture4')->nullable();
            $table->string('picture5')->nullable();
            $table->string('picture6')->nullable();
            $table->foreignId('city_id')->constrained(table:'cities', indexName: 'properties_city_id');
            $table->foreignId('category_id')->constrained(table:'categories', indexName: 'properties_category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
