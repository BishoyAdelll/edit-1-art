<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table='chapters';
    protected $fillable=[
        'final_mark',
        'Daily_work',
        'subject_code',
        'subject_id',
        'user_id'
    ];

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
