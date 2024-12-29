<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionPassenger extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'flight_seat_id',
        'name',
        'date_of_birth',
        'nationality',
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function flight_seat()
    {
        return $this->belongsTo(FlightSeat::class, 'flight_seat_id');
    }
}