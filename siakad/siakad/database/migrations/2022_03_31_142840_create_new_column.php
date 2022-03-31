<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateNewColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function ($table) {
            $table->string('jenis_kelamin',15)->nullable;
            $table->string('email', 45)->nullable;
            $table->string('alamat',50)->nullable;
            $table->date('tanggal_lahir')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function ($table) {
            $table->dropColumn('jenis_kelamin',15);
            $table->dropColumn('email', 45);
            $table->dropColumn('alamat',50);
            $table->dropColumn('tanggal_lahir');
        });
    }
}
