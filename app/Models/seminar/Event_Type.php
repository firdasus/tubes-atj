<?php

namespace App\Models\Seminar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Type extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_event_type';
}
