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
        Schema::create('ouvriers', function (Blueprint $table) {
            $table->id();
            $table->string('nom',30);
            $table->string('prenom',30);
            $table->string('address',100);
            $table->string('ville',30);
            $table->string('cin');
            $table->string('bio')->nullable();
            $table->string('profile_url')->nullable();
            $table->string('phone',13);
            $table->enum('sexe',['male','famele','autre']);
            $table->enum('active',[0,1,2])->default(0);
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('categorie_id')->constrained('categories'); 
            $table->string('experience');
            $table->rememberToken();
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
        Schema::dropIfExists('ouvriers');
    }
};
