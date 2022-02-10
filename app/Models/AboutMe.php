<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'versity',
        'designation',
        'graduation',
        'address',
        'description',
        'skil',
        'image',
    ];
}
