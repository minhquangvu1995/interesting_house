<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnActiveInPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        dd(\Doctrine\DBAL\Types\Type::getTypesMap());
        //Để có thể modify cột phải cài đặt package "doctrine/dbal" - composer require doctrine/dbal
        //Thư viện này sẽ xác định thuộc tính của cột và tạo câu SQL thay đổi...
        Schema::table('posts', function (Blueprint $table) {
            //Doctrine Dbal không hỗ trợ truyển đổi sang kiểu tinyInteger
            //Để boolean sẽ thành tinyInteger :v
            $table->boolean('active')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
