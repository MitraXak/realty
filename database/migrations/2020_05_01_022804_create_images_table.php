<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgStore', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('realty_id');
            //создание внешнего ключа для поля 'id', который связан с полем id realties 'users'

            $table->string('path');
            $table->binary('data_img');
            
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
        Schema::dropIfExists('imgStore');
    }
}
