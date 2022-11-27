<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'password',
        'phone',
        'city',
        'state',
        'street_name', 
        'street_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
