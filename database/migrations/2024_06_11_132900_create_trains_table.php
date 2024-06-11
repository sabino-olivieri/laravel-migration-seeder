<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * CREATE TABLE `trains` (
    * `id` INT AUTO_INCREMENT PRIMARY KEY,
    * `agency` VARCHAR(255) NOT NULL,
    * `departure_station` VARCHAR(255) NOT NULL,
    * `arrival_station` VARCHAR(255) NOT NULL,
    * `departure_time` TIME NOT NULL,
    * `arrival_time` TIME NOT NULL,
    * `train_code` VARCHAR(15) NOT NULL,
    * `number_carriages` TINYINT UNSIGNED NOT NULL,
    * `is_on_time` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
    * `deleted` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
    * `created_at` TIMESTAMP NULL,
    * `updated_at` TIMESTAMP NULL
    * );
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 15);
            $table->unsignedTinyInteger('number_carriages');
            $table->boolean('is_on_time')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
