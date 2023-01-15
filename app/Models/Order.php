<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function total()
    {
        return $this->hasOne(Total::class);
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
