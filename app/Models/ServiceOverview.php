<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class ServiceOverview extends Model
{
    protected $fillable=['page_heading','category_id','title','details','image'];
    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    } 
    use HasFactory;
}
