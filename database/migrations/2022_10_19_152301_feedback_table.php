<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
       {
           Schema::create('feedback', function (Blueprint $table) {
               $table->id();
                $table->unsignedBigInteger("event_id");
               $table->string('description');
                $table->date("date_feedback");
               $table->timestamps();
               $table->foreign("event_id")->references('id')->on('events')->onDelete('cascade');
           });
       }

       /**
        * Reverse the migrations.
        *
        * @return void
        */
       public function down()
       {
           Schema::dropIfExists('feedback');
       }
};
