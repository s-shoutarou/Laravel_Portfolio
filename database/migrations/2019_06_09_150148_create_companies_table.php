<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('status');
            $table->string('goodpoint1');
            $table->string('goodpoint2');
            $table->string('goodpoint3');
            $table->string('badpoint1');
            $table->string('badpoint2');
            $table->string('badpoint3');
            $table->string('reason');
            $table->string('platform');
            $table->string('myvalue');
            $table->string('address');
            $table->string('url');
            $table->datetime('meetingday');
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
        Schema::dropIfExists('companies');
    }
}
