<?php
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateTableProducts extends Migration
{
 
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('series');
            $table->string('model-name');
            $table->string('image-url-header');
            $table->string('subheading');
            $table->float('price');
            
            $table->string('body-header-1');
            $table->string('body-content-1');
            $table->string('image-url-body-1');
            
            $table->string('body-header-2');
            $table->string('body-content-2');
            $table->string('image-url-body-2');
            
            $table->string('body-header-3');
            $table->string('body-content-3');
            $table->string('image-url-body-3');
            
            
            
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::drop('products');
    }
}