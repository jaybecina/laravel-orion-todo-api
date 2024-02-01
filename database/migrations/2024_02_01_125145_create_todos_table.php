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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('note_container_id')->nullable();
            // $table->foreignId('note_container_id')->references('id')->on('note_containers')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('todos', function (Blueprint $table) {
        //     $table->dropForeign('note_container_id');
        // });

        Schema::table('todos', function (Blueprint $table){
            $table->dropForeign('note_container_id');
        });
    }
};
