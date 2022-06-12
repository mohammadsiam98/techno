<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStackTechesTable extends Migration
{
    public function up()
    {
        Schema::create('stack_teches', function (Blueprint $table) {
            $table->id();
            $table->string('stack_id');
            $table->string('stackName');
            $table->text('details');
            $table->string('image');
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stack_teches');
    }
}
