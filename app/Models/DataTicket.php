<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTicket extends Model
{
    use HasFactory;

    protected $table = 'tickets'; // nama table yang digunakan

    protected $fillable = [
        'concert_name', 'date', 'location', 'time', 'category'
    ];
}
