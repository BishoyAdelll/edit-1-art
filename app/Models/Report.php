<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table='reports';
    protected  $fillable=[
        'Group',
        'type',
        'Day',
        'from',
        'to',
        'class_size',
        'enrolled',
        'waiting',
        'location',
        'date',
        'subject_name',
        'subject_code',
        'subject_id',
        'user_id',
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
