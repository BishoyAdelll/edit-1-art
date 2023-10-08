<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddData extends Model
{
    use HasFactory;
    protected $table='add_data';
    protected $fillable=[
        'name_arabic',
        'name_english',
        'program_name',
        'last_term_GPA',
        'total_credits',
        'user_id',
        'GPA'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
