<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Appreciation extends Model
{
    use HasFactory;
    protected $fillable= [
        'semester',
        'subject_code',
        'hours',
        'quality_point',
        'subject_id',
        'user_id',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
