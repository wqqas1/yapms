<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPermissionsTableAddModuleIdAndAccessDropNameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function(Blueprint $table) {
            $table->dropColumn('name');
            $table->integer('module_id')->unsigned()->after('id');
            $table->enum('access', ['read', 'write'])->after('module_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function(Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn('module_id');
            $table->dropColumn('access');
        });
    }
}
