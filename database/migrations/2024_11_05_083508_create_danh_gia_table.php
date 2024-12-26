<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_gia', function (Blueprint $table) {
            $table->increments('id_danh_gia');
            $table->unsignedInteger('id_user'); // Thay đổi thành unsignedInteger
            $table->string('ten_danh_gia');
            $table->string('danh_gia');
            $table->longText('danh_gia_binh_luan')->nullable();
            $table->unsignedInteger('id_giay'); // Thay đổi thành unsignedInteger
            $table->timestamps();

            // Thêm foreign key
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_giay')->references('id_giay')->on('giay')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danh_gia');
    }
}
