<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;

class ApprovedWorker extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $fillable = [
        'Name',
        'PhoneNumber',
        'password',
        'confirmpassword',
        'age',
        'city',
        'state',
        'Date',
        'Gender',
        'Bio',
        'Category',
        'profilePic',
        'FileUpload',
        'role',
        'latitude',
        'longitude',
    ];

    protected $hidden = ['Password'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'workerid');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class,'workerid');
    }

    // Other model methods...
}
