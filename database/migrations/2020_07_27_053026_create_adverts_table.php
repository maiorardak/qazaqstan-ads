<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('advert_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
        });

        Schema::create('adverts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->index();
            $table->integer('advert_types_id');
            $table->string('file_name')->index();
            $table->string('file_hash')->index();
            $table->string('file_mime')->nullable();
            $table->string('file_ext')->nullable();
            $table->integer('file_size')->nullable();
            $table->dateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('adverts');
    }
}
