<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'mtitle',
        'ctitle1',
        'ctitle2',
        'ctitle3',
        'ctitle4',
        'ctitle5',
        'ctitle6',
        'cdsc1',
        'cdsc2',
        'cdsc3',
        'cdsc4',
        'cdsc5',
        'cdsc6',
    ];
}
