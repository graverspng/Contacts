<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing primary key column named 'id'
            $table->string('name');
            $table->integer('number');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};

