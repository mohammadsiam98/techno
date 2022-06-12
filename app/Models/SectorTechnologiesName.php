<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorTechnologiesName extends Model
{
    protected $fillable=['category_id','Sector_technologies_name_heading'];
    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    } 
    use HasFactory;
}
