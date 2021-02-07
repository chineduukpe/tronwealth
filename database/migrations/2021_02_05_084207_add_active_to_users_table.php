<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('status')->default('unapproved');
            $table->string('profile_image_url')->default('assets/img/default-avatar.jpg');
            $table->uuid('approved_by')->nullable();
            $table->uuid('referrer_id');
            $table->integer('referral_code');
            $table->string('wallet_address');
            $table->integer('plan_id');
            $table->integer('level')->default(1)->comment('User\'s current level based on referrals');
            $table->string('role')->default('user');
            $table->double('earnings')->default(0.0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
