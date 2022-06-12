<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CeoDetails extends Model
{
    protected $fillable=['name','designation','speech','image'];
    use HasFactory;
}
