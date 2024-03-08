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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('書名');
            $table->string('author')->comment('作者');
            $table->string('translator')->nullable()->comment('譯者');
            $table->string('ISBN')->comment('ISBN');
            $table->string('category')->nulltable()->comment('類別');
            $table->string('location')->comment('館藏位置');
            $table->longText('cover')->nullable()->comment('封面');
            $table->integer('book_status')->default(0)->comment('借閱狀態(可借閱，不可借閱，已遺失)');
            $table->integer('book_id')->comment('書籍ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
