<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'magv','namegv','ngaysinh','gioitinh','masv_curd'
    ];
    protected $primaryKey = 'id';
    protected $table = 'post';

    public function curd(){
    	return $this->belongsTo('App\curd','id');
    }
    public function monhoc(){
    	return $this->belongsTo('App\monhoc','id');
    }
    
}
