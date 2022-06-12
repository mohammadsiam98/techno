<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorSpecialFeatureSection extends Model
{
    protected $fillable=['category_id','heading','details','image'];
    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    } 
    use HasFactory;
}
