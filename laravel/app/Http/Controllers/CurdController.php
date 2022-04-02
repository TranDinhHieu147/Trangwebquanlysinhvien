<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curd;
use Validate;
use App\Post;
use App\Monhoc;
use storage;

class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curd = Curd::orderBy('id','DESC')->get();
       return view('admin.curd.index')->with(compact('curd'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curd = Curd::orderBy('id','DESC')->get();
       return view('admin.curd.create')->with(compact('curd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request )
    {
        
        $data = $request->validate([
            'masv' => 'required|max:255',
            'name' => 'required',
            'lop' => 'required',
            'noisinh' => 'required',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'email' => 'required',
            'magv_post' => 'required',
            'tenmh_monhoc' => 'required',
        ], [
            'masv.required' => 'Yêu Cầu mỗi sinh viên một mã',
            'name.required' => 'Yêu Cầu nhập tên',
            'lop.required' => 'Yêu Cầu nhập lớp',
            'noisinh.required' => 'Yêu Cầu nhập nơi sinh',
            'ngaysinh.required' => 'Yêu Cầu nhập ngày sinh',
            'gioitinh.required' => 'Yêu Cầu nhập giới tính',
            'magv_post.required' => 'Yêu Cầu nhập nhập mã',
            'tenmh_monhoc.required' => 'Yêu Cầu nhập nhập môn học',
            'email.required' => 'Yêu Cầu nhập email'
        ]);
        $curd = new Curd();
        $curd->masv = $data['masv'];
        $curd->name = $data['name'];
        $curd->lop = $data['lop'];
        $curd->noisinh = $data['noisinh'];
        $curd->ngaysinh = $data['ngaysinh'];
        $curd->gioitinh = $data['gioitinh'];
        $curd->email = $data['email'];
        $curd->magv_post = $data['magv_post'];
        $curd->tenmh_monhoc = $data['tenmh_monhoc'];
        $curd->save();
        return back()->with('success','Thêm Sinh Viên Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $curd = Curd::find($id);
        return view('admin.curd.show')->with(compact('curd'));
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
            'masv' => 'required|max:255',
            'name' => 'required',
            'lop' => 'required',
            'noisinh' => 'required',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'email' => 'required',
            'magv_post' => 'required',
            'tenmh_monhoc' => 'required',
        ], [
            'masv.required' => 'Yêu Cầu mỗi sinh viên một mã',
            'name.required' => 'Yêu Cầu nhập tên',
            'lop.required' => 'Yêu Cầu nhập lớp',
            'noisinh.required' => 'Yêu Cầu nhập nơi sinh',
            'ngaysinh.required' => 'Yêu Cầu nhập ngày sinh',
            'gioitinh.required' => 'Yêu Cầu nhập giới tính',
            'email.required' => 'Yêu Cầu nhập email'
        ]);
        $curd = Curd::find($id);
        $curd->masv = $data['masv'];
        $curd->name = $data['name'];
        $curd->lop = $data['lop'];
        $curd->noisinh = $data['noisinh'];
        $curd->ngaysinh = $data['ngaysinh'];
        $curd->gioitinh = $data['gioitinh'];
        $curd->email = $data['email'];
        $curd->magv_post = $data['magv_post'];
        $curd->tenmh_monhoc = $data['tenmh_monhoc'];
        $curd->save();
        return back()->with('success','Cập Nhật Sinh Viên thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curd = Curd::find($id);
        $curd->delete();
        return back()->with('success','xõa sinh viên thành công');
    }
}
