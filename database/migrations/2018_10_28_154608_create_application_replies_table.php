<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id')->index()->unsigned();
            $table->string('title');
            $table->text('reply');
            $table->string('author');
            $table->string('email')->unique();
            $table->timestamps();
            
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_replies');
    }
}
