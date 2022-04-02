<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monhoc;
use Validate;
use App\Curd;
use App\Post;
use storage;
use App\Dangkymon;

class DangkymonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dangkymon = Dangkymon::orderBy('id','DESC')->get();
       return view('admin.dangkymon.index')->with(compact('dangkymon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dangkymon = Dangkymon::orderBy('id','DESC')->get();
       return view('admin.dangkymon.create')->with(compact('dangkymon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'masv_curd' => 'required',
            'magv_post' => 'required',
            'mamh_monhoc' => 'required',

        ], [
            'masv_curd.required' => 'Yêu Cầu mỗi sinh vien viên một mã',
            'magv_post.required' => 'Yêu Cầu nhập mã giảng viên',
            'mamh_monhoc.required' => 'Yêu Cầu mã môn học',
            
        ]);
        $dangkymon = new Dangkymon();
        $dangkymon->masv_curd = $data['masv_curd'];
        $dangkymon->magv_post = $data['magv_post'];
        $dangkymon->mamh_monhoc = $data['mamh_monhoc'];
        $dangkymon->save();
        return back()->with('success','Đăng ký Môn Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $dangkymon = Dangkymon::find($id);
        return view('admin.dangkymon.show')->with(compact('dangkymon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data = $request->validate([
            'masv_curd' => 'required',
            'magv_post' => 'required',
            'mamh_monhoc' => 'required',

        ], [
            'masv_curd.required' => 'Yêu Cầu mỗi sinh vien viên một mã',
            'magv_post.required' => 'Yêu Cầu nhập mã giảng viên',
            'mamh_monhoc.required' => 'Yêu Cầu mã môn học',
            
        ]);
        
        $dangkymon = Dangkymon::find($id);
        $dangkymon->masv_curd = $data['masv_curd'];
        $dangkymon->magv_post = $data['magv_post'];
        $dangkymon->mamh_monhoc = $data['mamh_monhoc'];
        $dangkymon->save();
        return back()->with('success','Đăng ký Môn Thành Công');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dangkymon = Dangkymon::find($id);
        $dangkymon->delete();
        return back()->with('success','xõa Đăng Ký thành công');
    }
}
