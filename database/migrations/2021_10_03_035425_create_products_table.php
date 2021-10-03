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
            $table->id();
            $table->string("uuid",40)->nullable();
            $table->string("code", 30)->nullable()->unique();
            $table->string("product_name",150)->nullable()->index();
            $table->string("short_name", 50)->nullable();
            $table->string("group_uuid")->nullable();
            $table->string("category_uuid")->nullable();
            $table->string("item_type", 50)->nullable();
            $table->integer("min_stock")->nullable()->default(0);
            $table->string("tax_type")->nullable();
            $table->boolean("sellable")->default(true);
            $table->string("primary_photo")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
