<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curd extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'masv','name','lop','noisinh','ngaysinh','gioitinh','email','magv_post','tenmh_monhoc'
    ];
    protected $primaryKey = 'id';
    protected $table = 'curd';
    public function post(){
    	return $this->belongsTo('App\post','id');
    }
    public function monhoc(){
    	return $this->belongsTo('App\monhoc','id');
    }
    
}
