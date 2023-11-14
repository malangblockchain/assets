<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_components', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('tp_components_html_id');
            $table->bigInteger('tp_components_css_id')->nullable();
            $table->bigInteger('tp_components_js_id')->nullable();
            $table->unsignedBigInteger('tp_type_id');
            $table->foreign('tp_type_id')->references('id')->on('tp_types')->onDelete('cascade');
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
        Schema::dropIfExists('tp_components');
    }
}
