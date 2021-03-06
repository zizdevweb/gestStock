<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',100);
            $table->text('description')->nullabble(true);
            $table->integer('prix_achat')->nullable(true);
            $table->integer('prix_vente')->nullable(true);
            $table->integer('quantity')->nullable(true)->default(0);
            $table->integer('alert_qte')->nullable(true);
            $table->unsignedInteger('user_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
