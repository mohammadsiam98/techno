<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorSpecialFeaturesDynamicListsTable extends Migration
{
    public function up()
    {
        Schema::create('sector_special_features_dynamic_lists', function (Blueprint $table) {
            $table->id();
            $table->string('featureName');
            $table->foreignId('sector_Special_feature_id');
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sector_special_features_dynamic_lists');
    }
}
