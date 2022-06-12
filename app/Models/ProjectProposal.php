<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProjectProposal extends Model
{
    use SoftDeletes;
    protected $fillable=['servicesSelected','full_name','email','ref_website','mobile_number','details'];
    use HasFactory;
}
