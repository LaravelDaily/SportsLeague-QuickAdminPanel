<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1496402975GamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('games')) {
            Schema::create('games', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('team1_id')->unsigned()->nullable();
                $table->foreign('team1_id', '41908_59314c1f52463')->references('id')->on('teams')->onDelete('cascade');
                $table->integer('team2_id')->unsigned()->nullable();
                $table->foreign('team2_id', '41908_59314c1f5682b')->references('id')->on('teams')->onDelete('cascade');
                $table->datetime('start_time')->nullable();
                $table->integer('result1')->nullable();
                $table->integer('result2')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
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
        Schema::dropIfExists('games');
    }
}
