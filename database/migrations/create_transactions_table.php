<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_payment_gateway', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->float('amount');
            $table->string('hash');
            $table->string('currency')->default(config('multi-currency-gateway.default_currency'));
            $table->enum('action', ['CREATE_CHECKOUT_SESSION', 'RETRIEVE_ORDER'])->default('CREATE_CHECKOUT_SESSION');
            $table->json('meta')->nullable();
            $table->json('merchant_account')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('transactions_payment_gateway');
    }
}
