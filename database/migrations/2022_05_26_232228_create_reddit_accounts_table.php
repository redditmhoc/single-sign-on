<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedditAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('reddit_accounts', function (Blueprint $table) {
            $table->id();

            $table->string('username');
            $table->boolean('administrator')->default(false);
            $table->boolean('speakership')->default(false);
            $table->boolean('moderator')->default(false);

            $table->rememberToken();
            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->unsignedBigInteger('token_expires')->nullable();
            $table->timestamp('last_logon')->default(now());
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reddit_accounts');
    }
}
