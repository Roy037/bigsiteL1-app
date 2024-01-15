<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        //create table cars
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('count');
            $table->longText('description');
            //created_at and updated_at,thoi gian tao lap
            $table->timestamps();
            //foreign keys
            $table->unsignedInteger('category_id');
            //tham chieu den id trong categories
            $table->foreign('category_id')
                ->integer('category_id')
                //on sử dụng để chỉ định bảng mà khóa ngoại đang tham chiếu đến.
                ->on('categories')
                //khi xoa thuc the 1 thi thuc the n bi xoa theo
                ->onDelete('cascade');
            // khi xoa thuc the 1 thi thuc the n khong bi xoa theo
            // ->onDelete('set null');

            //Cột category_id trong bảng cars sẽ tham chiếu đến cột id trong bảng categories. 
            //Điều này tạo một mối quan hệ giữa hai bảng, 
            //cho phép bạn liên kết dữ liệu từ bảng cars với bảng categories thông qua khóa ngoại category_id.
        });


        //create table categories
        //trong cars(thuc the 1) co nhieu danh muc categories(thuc the nhieu)
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
