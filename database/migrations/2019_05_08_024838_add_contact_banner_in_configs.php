<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactBannerInConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->string('contact_us_banner_1')->nullable()->after('before_body_script');
            $table->string('contact_us_banner_2')->nullable()->after('contact_us_banner_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn('contact_us_banner_1');
            $table->dropColumn('contact_us_banner_2');
        });
    }
}
