<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Supplier extends Model
{
    use HasFactory;
     protected $fillable = [
        'code',
        'name',
        'address',
        'phone',
        'status',
        // ... tambahkan atribut lain yang ingin Anda isikan secara massal
    ];
}
