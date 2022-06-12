<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorSpecialFeatureSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('sector_special_feature_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('heading');
            $table->text('details');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sector_special_feature_sections');
    }
}
