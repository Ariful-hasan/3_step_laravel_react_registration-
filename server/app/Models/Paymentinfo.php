<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Paymentinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'iban',
        'payment_data_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
