<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $table ="registrations";
    protected $fillable = [
        'user_id',
        'pickup_name',
        'relation',
        'pickup_phone'
    ];

    /*
          Relationship
    */

    public function user()
    {
           return $this->belongsTo(User::class);
    }
}
