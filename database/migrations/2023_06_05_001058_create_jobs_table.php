<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Job Title or Name');
            $table->string('thumbnail')->comment('Thumbnail')->default('job-list1.png');
            $table->bigInteger('category_id');
            $table->bigInteger('company_id');
            $table->bigInteger('salary_min')->comment('Salary Minimum');
            $table->bigInteger('salary_max')->comment('Salary Maximum');
            $table->text('desc')->comment('Job Description');
            $table->text('req')->comment('Required Knowledge, Skills, and Abilities');
            $table->text('edu')->comment('Education + Experience');
            // $table->text('vacancy')->comment('Vacancy');
            $table->text('location')->comment('Location');
            $table->text('job_nature')->comment('Job nature');
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
        Schema::dropIfExists('jobs');
    }
}
