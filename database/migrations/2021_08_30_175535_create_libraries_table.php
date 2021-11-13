<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('Name');
            $table->string('Dates associated with name');
            $table->string('Type of name');
            $table->string('Role');
            $table->string('Other names');
            $table->string('BL record ID');
            $table->string('Type of resource');
            $table->string('Content type');
            $table->string('Material type');
            $table->string('BNB number');
            $table->string('Archival Resource Key');
            $table->string('ISBN');
            $table->string('Title');
            $table->string('Variant titles');
            $table->string('Series title');
            $table->string('Number within series');
            $table->string('Country of publication');
            $table->string('Place of publication');
            $table->string('Publisher');
            $table->string('Date of creation/publication');
            $table->string('Edition');
            $table->string('Physical description');
            $table->string('Dewey classification');
            $table->string('BL shelfmark');
            $table->string('Topics');
            $table->string('Genre');
            $table->string('Languages');
            $table->string('Notes');
            $table->string('Provenance');
            $table->date('rented at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
