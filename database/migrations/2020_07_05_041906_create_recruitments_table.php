<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('recruitments', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('recruiter_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('cv_profile')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('recruitments');
    }
}
