<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    //ten class va ten tbale phai khac nhau
    protected $table = 'cars';
    //dat id la khoa chinh
    protected $primarykey = 'id';
    // neu co created/update thi phai them timestamps = true,neu khong thi se khong hien
    public $timestamps = true;
    protected $dateFromat = 'h:m:s';
    //lay ra danh sach cac truong
    protected $fillable = ['name', 'count', 'description','image_path','category_id'];
    

    public function category(){

        return $this->belongsTo(Cars::class);
    }

}
