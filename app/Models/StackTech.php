<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SectorTechnologiesName;
use Illuminate\Database\Eloquent\SoftDeletes;
class StackTech extends Model
{
    use SoftDeletes;

    protected $fillable=['stack_id','stackName','details','image','status'];

    public function get_technology_name()
    {
        return $this->belongsTo('App\Models\SectorTechnologiesName', 'stack_id');
    }

    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    } 
    use HasFactory;
}
