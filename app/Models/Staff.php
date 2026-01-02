<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Based on Source [2] and [3], these are the fields in your table
    protected $fillable = [
        'staff_id',
        'role',
        'name',
        'department',
    ];

    /**
     * Note: Laravel usually pluralizes table names (e.g., 'Staff' becomes 'staffs').
     * If your migration table is named exactly 'staff', uncomment the line below:
     */
    protected $table = 'staff';
}
