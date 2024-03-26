<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained();
            $table->timestamps();
            $table->string('booking_time');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('type',['family','corporate','friends','solo','couple']);
            $table->string('chek_in_date');
            $table->string('chek_out_date');
            $table->integer('people_no');
            $table->integer('child_no');
            $table->double('total_actual_amount')->nullable();
            $table->double('offered_payable_amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
