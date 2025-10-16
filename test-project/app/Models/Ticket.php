<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    protected $fillable = [
        'customer_id',
        'subject',
        'description',
        'status',
        'manager_response_at',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
