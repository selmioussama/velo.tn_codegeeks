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
        Schema::create('association_don', function (Blueprint $table) {
            $table->unsignedBigInteger('association_id');
            $table->unsignedBigInteger('don_id');

            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
            $table->foreign('don_id')->references('id')->on('dons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association_don');
    }
};
