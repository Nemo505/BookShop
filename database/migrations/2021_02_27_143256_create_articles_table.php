<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->foreignId('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');

            $table->string('author');
            $table->string('subcontent');
            $table->text('image');
            $table->string('caption');
            $table->date('publishdate');
            $table->longtext('content');
            
            $table->integer('status');          
            $table->foreignId('language_id')
                ->references('id')->on('languages')
                ->onDelete('cascade');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
