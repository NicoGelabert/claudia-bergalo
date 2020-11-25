<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'type',
        'category',
        'length',
        'location',
        'url',
        'image',
    ];
}