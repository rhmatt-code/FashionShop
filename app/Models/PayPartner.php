<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayPartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tax',
    ];
    protected $table = 'pay_partners';
}
