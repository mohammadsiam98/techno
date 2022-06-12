<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    use SoftDeletes;
    protected $fillable=['user_id','category_id','title','description','image','thumbnail_image','status'];
    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function get_user_name()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    use HasFactory;
}
