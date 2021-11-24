<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number');
            $table->date('invoice_Date')->nullable();
            $table->date('Due_date')->nullable();
            $table->string('product');
            $table->string('section');
            $table->string('discount');
            $table->string('rate_vat');
            $table->decimal('value_vat', 8, 2);
            $table->decimal('Total', 8, 2);
            $table->string('Status', 50);
            $table->integer('Value_Status');
            $table->text('note')->nullable();
            $table->string('user');
            $table->softDeletes();
            $table->timestamps();
//            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
//            $table->decimal('Amount_collection', 8, 2)->nullable();;
//            $table->decimal('Amount_Commission', 8, 2);
//            $table->date('Payment_Date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
