<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->text('question'); // FAQ question
            $table->text('answer'); // FAQ answer
            $table->unsignedBigInteger('blog_id'); // Foreign key to blogs table

            // Timestamps for created_at and updated_at
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('blog_id')
                ->references('id')
                ->on('blogs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
};
