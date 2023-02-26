<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('invoices', function (Blueprint $table) {
        $table->id('invoice_id');
        $table->integer('user_id');
        $table->string('lpg_type');
        $table->string('shipping_fee');
        $table->integer('tank_qty')->nullable();
        $table->integer('bill')->nullable();
        $table->string('Status')->nullable();

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
        //
    }
}
