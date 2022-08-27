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
        Schema::create('affections', function (Blueprint $table) {
            $table->id();
            $table->string('package');
            $table->string('ecosystem');
            $table->string('introduced');
            $table->string('fixed');
            $table->unsignedBigInteger('vulnerability_id')->nullable();
            $table->timestamps();
        });

        $this->relationships();
    }

    /**
     * Define relationships
     *
     * @return void
     */
    private function relationships()
    {
        Schema::table('affections', function (Blueprint $table) {
            $table->foreign('vulnerability_id')
                ->references('id')
                ->on('vulnerabilities')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->index('vulnerability_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affections');
    }
};
