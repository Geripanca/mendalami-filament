<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    use HasFactory;
    protected $table = 'guest_book';
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
