<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProductsColumnToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('category_id')->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->string('main_pic')->nullable()->change();
            $table->string('category_pic')->nullable()->change();
            $table->text('category_des')->nullable()->change();
            $table->text('des')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->string('title')->nullable()->change();
            $table->string('description')->nullable()->change();
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
        });
    }
}
