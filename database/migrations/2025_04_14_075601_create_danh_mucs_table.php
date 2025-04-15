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
        Schema::create('danh_mucs', function (Blueprint $table) {
            $table->increments('MaDM'); // Khóa chính, int tự động tăng
            $table->string('TenDM'); // varchar
            $table->dateTime('NgayTao'); // datetime
            $table->text('MoTa')->nullable(); // text thay blob
            $table->unsignedBigInteger('MaTK'); // Phải là unsignedBigInteger để khớp với id của users
            $table->foreign('MaTK')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_mucs');
    }
};