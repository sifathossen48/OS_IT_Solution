<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('image_filepath')->nullable();
            $table->string('location');
            $table->string('description');
            $table->enum('package_type',['inside', 'outside']);
            $table->integer('capacity');
            $table->integer('days');
            $table->integer('nights');
            $table->string('food');
            $table->double('adult_per_person_price');
            $table->double('child_per_person_price');
            $table->double('family_discount_rate');
            $table->double('corporate_discount_rate');
            $table->enum('offer_type',['regular', 'special']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
