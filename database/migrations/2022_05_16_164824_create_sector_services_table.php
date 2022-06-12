<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorServicesTable extends Migration
{
    public function up()
    {
        Schema::create('sector_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('Sector_service_name_id');
            $table->string('title')->unique();
            $table->text('details');
            $table->string('image');
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sector_services');
    }
}
