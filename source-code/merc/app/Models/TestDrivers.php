<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDrivers extends Model
{
    protected $table = 'testdrivers';
    use HasFactory;
    protected $fillable = [
        'testDate',
        'status',
        'userTest',
        'productTest'
    ];
}
