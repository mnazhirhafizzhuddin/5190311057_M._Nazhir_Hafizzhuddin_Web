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
        Schema::create('logbarangmasuk', function (Blueprint $table) {
            $table->bigIncrements('idlogmasuk');
            $table->bigInteger('idbarang')->unsigned();
            $table->string('Status');
            $table->timestamps();

        });
        Schema::table('logbarangmasuk', function($table) {
            $table->foreign('idbarang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbarangmasuk');
    }
};
