<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'mamh','tenmh','sotinchi','sotiet','masv_curd','namegv_post'
    ];
    protected $primaryKey = 'id';
    protected $table = 'monhoc';
    public function curd(){
    	return $this->belongsTo('App\curd','id');
    }
    public function post(){
    	return $this->belongsTo('App\post','id');
    }
    
}
