<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmtpBlackholeCatchedEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (config('app.env') !== 'local')  return true;

        Schema::create('smtp_blackhole_catched_email', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('email');
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';	
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (config('app.env') !== 'local')  return true;
        
        Schema::dropIfExists('smtp_blackhole_catched_email');
    }
}
