<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('domain',255)->nullable();
            $table->string('company_name',255)->nullable();
            $table->string('logo',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_profiles');
    }
}
