<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('taxons', function (Blueprint $table) {
			$table->id();
            $table->string('authority')->nullable();
            $table->string('name');
            $table->integer('suptaxon_id')->nullable();
            $table->integer('taxonomic_unit_id')->unsigned()->index()->nullable();
			$table->foreign('taxonomic_unit_id')->references('id')->on('taxonomy')->onDelete('cascade');
            $table->integer('value')->nullable();
			$table->nestedSet();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
		Schema::dropIfExists('taxons');
		Schema::table('taxons', function (Blueprint $table) {
			$table->dropNestedSet();
		});
    }
};
