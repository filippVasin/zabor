<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('company_phone');
            $table->string('company_email');
            $table->string('leads_email');
            $table->text('offer');
            $table->string('banner');
            $table->string('video');
            $table->string('video_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mains');
    }
}
