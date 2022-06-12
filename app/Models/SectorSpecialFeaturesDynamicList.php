<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SectorSpecialFeatureSection;
class SectorSpecialFeaturesDynamicList extends Model
{
    use SoftDeletes;

    protected $fillable=['sector_Special_feature_id','featureName','status'];

    public function get_sector_special_feature_section()
    {
        return $this->belongsTo('App\Models\SectorSpecialFeatureSection', 'sector_Special_feature_id');
    }
    use HasFactory;
}
