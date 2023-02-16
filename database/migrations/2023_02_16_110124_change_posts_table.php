<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title')->default('default title')->change();
            $table->text('desc')->nullable()->change();
            $table->text('desc')->comment('description of post')->change();
            $table->string('name', 100)->change();
            $table->renameColumn('text', 'message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['title', 'desc']);
            $table->string('name', 255)->change();
            $table->renameColumn('message', 'text');
        });
    }
};
