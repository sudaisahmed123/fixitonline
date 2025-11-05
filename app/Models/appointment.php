<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName', 'phoneNumber', 'email', 'date', 'time', 'area', 'city', 'state', 'code', 'userid', 'workerid','status','issue'
    ];
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->date)->format('F j, Y'); // e.g., August 9, 2024
    }
    public function getFormattedTimeAttribute()
    {
        return Carbon::parse($this->time)->format('g:i A'); // e.g., 3:30 PM
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function worker()
    {
        return $this->belongsTo(ApprovedWorker::class, 'workerid');
    }

}
