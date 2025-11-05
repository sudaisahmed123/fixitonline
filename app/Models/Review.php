<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'ReviewName',
        'ReviewEmail',
        'Rating',
        'ReviewComment',
        'userid',
        'workerid',
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function worker()
    {
        return $this->belongsTo(ApprovedWorker::class, 'workerid');
    }
}
