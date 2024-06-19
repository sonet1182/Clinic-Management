<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->integer('patient_age')->nullable();
            $table->integer('patient_phone')->nullable();
            $table->string('patient_address')->nullable();
            $table->string('patient_status')->nullable();
            $table->string('doctor_id')->nullable();
            $table->string('reference')->nullable();
            $table->decimal('total_price', 10, 2);
            $table->decimal('total_vat', 10, 2);
            $table->decimal('final_price', 10, 2);
            $table->json('items');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();  // Add this line for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
};
