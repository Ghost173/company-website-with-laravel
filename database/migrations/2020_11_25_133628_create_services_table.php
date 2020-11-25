<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('mtitle');
            $table->string('ctitle1');
            $table->string('ctitle2');
            $table->string('ctitle3');
            $table->string('ctitle4');
            $table->string('ctitle5');
            $table->string('ctitle6');
            $table->text('cdsc1');
            $table->text('cdsc2');
            $table->text('cdsc3');
            $table->text('cdsc4');
            $table->text('cdsc5');
            $table->text('cdsc6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
