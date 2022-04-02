<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dangkymon extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'masv_curd','magv_post','mamh_monhoc'
    ];
    protected $primaryKey = 'id';
    protected $table = 'dangkymon';

    public function curd(){
    	return $this->belongsTo('App\curd','id');
    }
    public function post(){
    	return $this->belongsTo('App\post','id');
    }
    public function monhoc(){
    	return $this->belongsTo('App\monhoc','id');
    }
}
