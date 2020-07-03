<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentsTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('students', function (Blueprint $table){
            $table->addColumn('text', 'achievements')->nullable();
            $table->addColumn('text', 'certificate')->nullable();
            $table->addColumn('text', 'experience')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('students', function (Blueprint $table){
            //
        });
    }
}
