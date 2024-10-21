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
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('name', 'nama_lengkap');
            $table->string('kelas', 2)->after('entry_year');
            $table->dropForeign(['nidn']);
            $table->dropIndex('students_nidn_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('nama_lengkap', 'name');
            $table->dropColumn('kelas');
            $table->foreign('nidn')->references('nidn')->on('lecturers');
        });
    }
};
