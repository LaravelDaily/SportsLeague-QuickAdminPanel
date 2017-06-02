<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1496402870PlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('players')) {
            Schema::create('players', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('team_id')->unsigned()->nullable();
                $table->foreign('team_id', '41907_59314bb611908')->references('id')->on('teams')->onDelete('cascade');
                $table->string('name')->nullable();
                $table->string('surname')->nullable();
                $table->date('birth_date')->nullable();
                
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
        Schema::dropIfExists('players');
    }
}
