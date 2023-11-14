<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpPagesComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_pages_components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tp_page_id');
            $table->foreign('tp_page_id')->references('id')->on('tp_pages')->onDelete('cascade');
            $table->unsignedBigInteger('tp_component_id');
            $table->foreign('tp_component_id')->references('id')->on('tp_components')->onDelete('cascade');
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
        Schema::dropIfExists('tp_pages_components');
    }
}
