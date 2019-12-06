<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToProductCategoryId extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->unsignedInteger('categorie_id')->after('prix_vente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('categorie_id');
        });
    }
}
