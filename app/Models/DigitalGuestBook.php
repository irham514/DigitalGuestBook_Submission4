<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalGuestBook extends Model
{
    //Submission 4
    use HasFactory;

    protected $table = 'digitalguestbook';

    protected $fillable = [
        'id',
        'name',
        'from',
        'email',
        'phone number'
    ];
}
