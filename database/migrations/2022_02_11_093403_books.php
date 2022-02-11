<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('isbn');
            $table->string('title');
            $table->string('title_original')->nullable();
            $table->string('author')->nullable();
            $table->integer('episode')->nullable();
            $table->string('series')->nullable();
            $table->integer('pages');
            $table->string('publisher');
            $table->string('translator')->nullable();
            $table->string('category');
            $table->primary('isbn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
