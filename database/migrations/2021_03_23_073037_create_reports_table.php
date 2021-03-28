<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('report_id');
            $table->string('report_nik', 16);
            $table->string('report_name', 255);
            $table->boolean('report_sex');
            $table->string('report_birth_place', 255);
            $table->date('report_birth_date');
            $table->string('report_address', 255);
            $table->integer('report_rt');
            $table->integer('report_rw');
            $table->string('report_phone', 16);
            $table->string('report_job', 255);
            $table->unsignedBigInteger('report_province');
            $table->unsignedBigInteger('report_district');
            $table->string('report_duration', 255);
            $table->string('report_purpose', 255);
            $table->enum('report_health_status', ['sehat', 'sakit']);

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
        Schema::dropIfExists('reports');
    }
}
