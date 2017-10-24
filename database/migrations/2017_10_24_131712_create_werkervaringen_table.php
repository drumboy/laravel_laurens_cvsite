<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWerkervaringenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('werkervaringen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bedrijf');
            $table->string('periode');
            $table->string('technologie');
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
        Schema::drop('werkervaringen');
    }
}
