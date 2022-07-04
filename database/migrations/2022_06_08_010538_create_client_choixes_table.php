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
        Schema::create('client_choixes', function (Blueprint $table) {
            $table->id();
            $table->string('Titre_principale')->nullable();
            $table->string('Description')->nullable();
            $table->string('Nom_du_lien')->nullable();
            $table->string('Lien')->nullable();
            $table->string('Titre_principal2')->nullable();
            $table->string('Titre_description')->nullable();
            $table->string('Description2')->nullable();
            $table->string('Traceur_1')->nullable();
            $table->string('Description_traceur1')->nullable();
            $table->string('Traceur_2')->nullable();
            $table->string('Description_traceur2')->nullable();
            $table->string('Traceur_3')->nullable();
            $table->string('Description_traceur3')->nullable();
            $table->string('Titre_information')->nullable();
            $table->string('Description_information')->nullable();
            $table->string('Nom_lien')->nullable();
            $table->string('lien2')->nullable();
            $table->string('layout')->nullable();
            $table->string('position_x_gui')->nullable();
            $table->string('position_y_gui')->nullable();
            $table->string('transition_gui')->nullable();
            $table->string('layout_settings')->nullable();
            $table->string('position_settings')->nullable();
            $table->string('transition_settings')->nullable();
            $table->string('theme',1500)->nullable();
            $table->string('codejs',10000)->nullable();
            $table->unsignedBigInteger('client_id')->unique()->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('client_choixes');
    }
};
