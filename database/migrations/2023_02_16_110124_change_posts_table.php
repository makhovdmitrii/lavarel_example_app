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
            $table->string('title')->default('default title');
            $table->text('desc')->nullable()->comment('description of post');
            $table->string('name', 100)->change();
            $table->string('name')->first()->change(); // no reverse in rollback
            $table->string('vote')->after('id')->change(); // no reverse in rollback
            $table->renameColumn('text', 'message');
        });
        Schema::rename('posts', 'articles');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('articles', 'posts');
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['title', 'desc']);
            $table->string('name', 255)->change();
            $table->renameColumn('message', 'text');
        });
    }
};
