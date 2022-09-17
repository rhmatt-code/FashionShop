<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\TransactionDetails;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date',
        'code_transaksi',
    ];
    protected $table = "transactions";

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
