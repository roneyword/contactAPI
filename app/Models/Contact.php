<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Contact extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'email',
        'phone',
        'cep',
        'street',
        'district',
        'city',
        'state_id',
    ];
}
