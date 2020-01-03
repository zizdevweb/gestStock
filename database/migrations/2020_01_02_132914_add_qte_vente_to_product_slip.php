<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQteVenteToProductSlip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_slip', function (Blueprint $table) {
            //
            $table->Integer('qte_vente')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_slip', function (Blueprint $table) {
            //
            $table->dropColumn('qte_vente');
        });
    }
}
