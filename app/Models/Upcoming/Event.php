<?php

namespace App\Models\Upcoming;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_event';
}
