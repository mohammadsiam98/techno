<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Banner extends Model
{
    use SoftDeletes; // In order to use softdelete we have to write this line in banner model.
    protected $fillable=['heading','subheading','image','status'];
    use HasFactory;
}
