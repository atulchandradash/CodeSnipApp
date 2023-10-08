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
        Schema::create('snippets', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Snippets');
            $table->unsignedBigInteger('Folder_id')->nullable();
            $table->unsignedBigInteger('User_id');
            $table->timestamps();

            //foreign key added
            $table->foreign('User_id')->references('id')->on('users');
            $table->foreign('Folder_id')->references('id')->on('folders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('snippets');
    }
};
