<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Specify the fields that are mass-assignable
    protected $fillable = ['name', 'email', 'subject', 'message'];

    // If you have custom table name (other than plural of model name), you can set it like this
    // protected $table = 'messages';
}
