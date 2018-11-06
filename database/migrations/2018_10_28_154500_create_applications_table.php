<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->index()->unsigned()->nullable();
            $table->integer('user_id')->index()->unsigned()->nullable();
            $table->integer('experience')->index()->unsigned();
            $table->string('certified');
            $table->text('body');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('cert_number')->default(null);
            $table->date('cert_date')->default(null);
            $table->timestamps();
            
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
