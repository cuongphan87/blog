<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvtNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvt_news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_name');
            $table->string('news_slug');
            $table->string('news_image');
            $table->string('news_author');
            $table->text('news_content');
            $table->integer('cats_id');
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
        Schema::dropIfExists('cvt_news');
    }
}
