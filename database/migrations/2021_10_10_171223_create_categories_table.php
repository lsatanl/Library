<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name');
        });
        DB::table('categories')->insert([
              array(
                'cat_name' => 'before20th',
            ),
             array(
                'cat_name' => '20th',
            ),
             array(
                'cat_name' => '21st',
            ),
             array(
                'cat_name' => 'England',
            ),
             array(
                'cat_name' => 'Italy',
            ),
             array(
                'cat_name' => 'English',
            ),
             array(
                'cat_name' => 'Italian',
            ),
             array(
                'cat_name' => 'Russian',
            ),
             array(
                'cat_name' => 'person',
            ),
             array(
                'cat_name' => 'organisation',
            ),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
