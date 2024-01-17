<?php

// database/migrations/xxxx_xx_xx_add_party_to_news_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPartyToNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('party'); // Add this line for 'party'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('party'); // If needed, define the reverse operation
        });
    }
}

