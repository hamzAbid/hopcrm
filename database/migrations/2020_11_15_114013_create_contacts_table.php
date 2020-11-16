<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Illuminate\Database\Eloquent\SoftDeletes;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    use SoftDeletes;
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civilite');
            $table->string('prenom');
            $table->string('nom');
            $table->string('fonction');
            $table->string('service');
            $table->string('email');
            $table->string('telephone');
            $table->date('date_naissance');
            $table->string('societe');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('numero');
            $table->string('site');
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
        Schema::dropIfExists('contacts');
    }
}
