<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('leagues')) {
            Schema::create('leagues', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->unique()->index();
                $table->string('slug')->index();

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leagues');
    }
}
