<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'amount',
        'transactions_id',
    ];
    protected $table = 'transaction_details';

    public function transaction(){
        return $this -> BelongsTo(transaction::class);
    }
    public function product(){
        return $this -> belongsTo(Product::class);
    }
}
