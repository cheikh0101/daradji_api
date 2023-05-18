<?php

use App\Models\Bayite;
use App\Models\Khassida;
use App\Models\Langues;
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
        Schema::create('bayite_traductions', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->nullable();
            $table->string('content');
            $table->foreignIdFor(Khassida::class)->constrained()->nullable();
            $table->foreignIdFor(Bayite::class)->constrained();
            $table->foreignIdFor(Langues::class)->constrained();
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
        Schema::dropIfExists('bayite_traductions');
    }
};
