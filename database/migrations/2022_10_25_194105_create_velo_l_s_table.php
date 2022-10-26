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
        Schema::create('velo_l_s', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("etat");
            $table->string("addresse");
            $table->string("description");
            $table->double("prix");
            $table->string("start_date");
            $table->string("end_date");
            $table->string("image")->nullable(true);

            $table->foreignId("user_id")->constrained("users");

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
        Schema::dropIfExists('velo_l_s');
    }
};
