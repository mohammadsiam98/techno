<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->text('details');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('company_details');
    }
}
