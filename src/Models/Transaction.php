<?php

namespace Yousef\PaymentGateway\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions_payment_gateway';

    protected $fillable = ['order_id', 'hash', 'status', 'meta'];

    public function setHashAttribute()
    {
        $this->attributes['hash'] = uniqid('trans_');
    }
}
