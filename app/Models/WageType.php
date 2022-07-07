<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WageType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'work_days'];
}
