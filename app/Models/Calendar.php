<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $table='calendars';
    protected $fillable=[
        'user_code',
        'user_name',
        'batch',
        'saturday',
        'sunday',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'user_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }


}
