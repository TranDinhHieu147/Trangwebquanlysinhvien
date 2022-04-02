<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validate;
use App\Curd;
use storage; 
use App\Monhoc;

class GiangvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('curd')->orderBy('id','DESC')->get();
       return view('admin.giangvien.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $post = Post::with('curd')->orderBy('id','DESC')->get();
       return view('admin.giangvien.create')->with(compact('post'));
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
            'magv' => 'required|max:255',
            'namegv' => 'required',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'masv_curd' => 'required',

        ], [
            'magv.required' => 'Yêu Cầu mỗi giảng viên một mã',
            'namegv.required' => 'Yêu Cầu nhập tên giảng viên',
            'ngaysinh.required' => 'Yêu Cầu nhập ngày sinh',
            'gioitinh.required' => 'Yêu Cầu nhập giới tính',
            'masv_curd.required' => 'Yêu Cầu nhập mã'
        ]);
        $post = new Post();
        $post->magv = $data['magv'];
        $post->namegv = $data['namegv'];
        $post->ngaysinh = $data['ngaysinh'];
        $post->gioitinh = $data['gioitinh'];
        $post->masv_curd = $data['masv_curd'];
        $post->save();
        return back()->with('success','Thêm Giảng viên Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        $post = Post::find($id);
        return view('admin.giangvien.show')->with(compact('post'));
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
            'magv' => 'required|max:255',
            'namegv' => 'required',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'masv_curd' => 'required',
        ], [
            'magv.required' => 'Yêu Cầu mỗi Giảng viên một mã',
            'namegv.required' => 'Yêu Cầu nhập tên',
            'ngaysinh.required' => 'Yêu Cầu nhập ngày sinh',
            'gioitinh.required' => 'Yêu Cầu nhập giới tính',
        ]);
        $post = Post::find($id);
        $post->magv = $data['magv'];
        $post->namegv = $data['namegv'];
        
        $post->ngaysinh = $data['ngaysinh'];
        $post->gioitinh = $data['gioitinh'];
        $post->masv_curd = $data['masv_curd'];
        $post->save();
        return back()->with('success','Cập Nhật Giảng Viên thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back()->with('success','xõa Giảng viên thành công');
    }
}
