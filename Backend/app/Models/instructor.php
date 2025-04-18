<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    protected $table = 'instructor';

    protected $fillable = [
        'instructor_id',
        'fname',
        'email',
        'phone',
       
    ];

    public function section()
    {
        return $this->hasOne(Section::class, 'instructor_id', 'instructor_id');
    }
}
