<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
<<<<<<< HEAD
class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('uuid')->unique();
=======
            $table->string('uuid',100)->unique();
>>>>>>> origin/them_slide
=======
            $table->string('uuid')->unique();
>>>>>>> Login_Register
=======
=======
>>>>>>> danhmuc_list
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid',100)->unique();
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
=======
=======
>>>>>>> danhmuc_list
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
