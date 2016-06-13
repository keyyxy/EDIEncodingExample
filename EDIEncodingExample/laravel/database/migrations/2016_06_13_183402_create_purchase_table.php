<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            
            //set column here
            $table->string('line1');
            $table->string('line2');
            $table->string('line3');
            $table->string('line4');
            $table->string('line5');
            $table->string('line6');
            $table->string('line7');
            $table->string('line8');
            $table->string('line9');
            $table->string('line10');
            $table->string('line11');
            $table->string('line12');
            $table->string('line13');
            $table->string('line14');
            $table->string('line15');
            $table->string('line16');
            $table->string('line17');
            $table->string('line18');
            $table->string('line19');
            $table->string('line20');
            $table->string('line21');
            $table->string('line22');
            $table->string('line23');
            $table->string('line24');
            $table->string('line25');
            $table->string('line26');
            $table->string('line27');
            $table->string('line28');
            $table->string('line29');
            $table->string('line30');
            $table->string('line31');
            $table->string('line32');
            $table->string('line33');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchase');
    }
}
