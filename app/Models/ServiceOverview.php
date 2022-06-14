<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
class ServiceOverview extends Model
{
    use SoftDeletes;
    protected $fillable=['page_heading','category_id','title','details','image'];
    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    } 
    use HasFactory;
}
