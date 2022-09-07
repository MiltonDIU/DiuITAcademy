<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiredSKillsTable extends Migration
{
    public function up()
    {
        Schema::create('required_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('is_active');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}