<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LPGType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lpgtype', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('lpg_type', 255);
            $table->integer('price');
            $table->integer('is_active'); // 1 for true and 0 is false
        });

        DB::table('lpgtype')->insert(
            array(
                [
               
                    'lpg_type'=>'Catgas',
                    'price'=>'640',
                    'is_active' => '1'
                ],
                [
                    'lpg_type'=>'Gasul',
                    'price'=>'750',
                    'is_active' => '1'

                ],
                [
                    'lpg_type'=>'Petronas',
                    'price'=>'750',
                    'is_active' => '1'
                ],
                [
                    'lpg_type'=>'Solane',
                    'price'=>'750',
                    'is_active' => '1'

                ],
              

             
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
