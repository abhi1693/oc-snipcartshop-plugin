<?php namespace OFFLINE\SnipcartShop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineSnipcartshopDiscounts extends Migration
{
    public function up()
    {
        Schema::create('offline_snipcartshop_discounts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('snipcart_id');
            $table->string('name');
            $table->string('code');
            $table->string('item_id')->default('""');
            $table->decimal('total_to_reach', 10, 0)->nullable();
            $table->string('type')->default('Rate');
            $table->integer('rate')->nullable()->unsigned();
            $table->decimal('amount', 10, 0)->nullable();
            $table->decimal('alternate_price', 10, 0)->nullable();
            $table->integer('max_number_of_usages')->nullable()->unsigned();
            $table->dateTime('expires')->nullable();
            $table->integer('number_of_usages')->nullable()->unsigned();
            $table->integer('number_of_usages_uncompleted')->nullable()->unsigned();
            $table->string('shipping_description')->nullable();
            $table->decimal('shipping_cost', 10, 0);
            $table->integer('shipping_guaranteed_days_to_delivery')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_snipcartshop_discounts');
    }
}
