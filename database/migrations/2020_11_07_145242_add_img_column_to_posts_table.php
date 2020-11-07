<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImg2ColumnToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('img')->after('body')->default('https://images-na.ssl-images-amazon.com/images/I/61JbK%2BGDqgL._AC_.jpg');
            //$table->string('img')->after('body')->nullable(); //se voglio che l'immagine non sia obbligatoria
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
            $table->dropColumn('img');
        });
    }
}
