<?php

use App\Models\Khassida;
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
        Schema::create('bayites', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->double('ordre')->nullable();
            $table->foreignIdFor(Khassida::class);
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
        Schema::dropIfExists('bayites');
    }
};
