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
            $table->string('skill_1');
            $table->string('skill_2');
            $table->string('skill_3');
            $table->integer('skill_1_years');
            $table->integer('skill_2_years');
            $table->integer('skill_3_years');
            $table->text('body');
            $table->string('name');
            $table->string('photo');
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
