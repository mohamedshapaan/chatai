<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable=[
        'sender_id',
        'recever_id',
        'conversation_id',
        'read',
        'type',
        'body'
    ];

}
