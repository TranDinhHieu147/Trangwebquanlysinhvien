<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monhoc;
use Validate;
use App\Curd;
use App\Post;
use storage; 

class MonhocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monhoc = Monhoc::orderBy('id','DESC')->get();
       return view('admin.monhoc.index')->with(compact('monhoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monhoc = Monhoc::orderBy('id','DESC')->get();
       return view('admin.monhoc.create')->with(compact('monhoc'));
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
            'mamh' => 'required|max:255',
            'tenmh' => 'required',
            'sotinchi' => 'required',
            'sotiet' => 'required',
            'masv_curd' => 'required',
            'namegv_post' => 'required',

        ], [
            'mamh.required' => 'Yêu Cầu mỗi môn học một mã',
            'tenmh.required' => 'Yêu Cầu nhập tên môn học',
            'sotinchi.required' => 'Yêu Cầu nhập  tín chỉ',
            'sotiet.required' => 'Yêu Cầu nhập tiết',
            'masv_curd.required' => 'Yêu Cầu nhập mã sv',
            'namegv_post.required' => 'Yêu Cầu nhập tên gv'
        ]);
        $monhoc = new Monhoc();
        $monhoc->mamh = $data['mamh'];
        $monhoc->tenmh = $data['tenmh'];
        $monhoc->sotinchi = $data['sotinchi'];
        $monhoc->sotiet = $data['sotiet'];
        $monhoc->masv_curd = $data['masv_curd'];
        $monhoc->namegv_post = $data['namegv_post'];
        $monhoc->save();
        return back()->with('success','Thêm Môn Học Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monhoc = Monhoc::find($id);
        return view('admin.monhoc.show')->with(compact('monhoc'));
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
            'mamh' => 'required|max:255',
            'tenmh' => 'required',
            'sotinchi' => 'required',
            'sotiet' => 'required',
            'masv_curd' => 'required|max:255',
            'namegv_post' => 'required',

        ], [
            'mamh.required' => 'Yêu Cầu mỗi môn học một mã',
            'tenmh.required' => 'Yêu Cầu nhập tên môn học',
            'sotinchi.required' => 'Yêu Cầu nhập so tín chỉ',
            'sotiet.required' => 'Yêu Cầu nhập tiết',
            'masv_curd.required' => 'Yêu Cầu nhập mã sv',
            'namegv_post.required' => 'Yêu Cầu nhập tên gv',
            
        ]);
        $monhoc = Monhoc::find($id);
        $monhoc->mamh = $data['mamh'];
        $monhoc->tenmh = $data['tenmh'];
        $monhoc->sotinchi = $data['sotinchi'];
        $monhoc->sotiet = $data['sotiet'];
        $monhoc->masv_curd = $data['masv_curd'];
        $monhoc->namegv_post = $data['namegv_post'];
        $monhoc->save();
        return back()->with('success','Cập Nhật Môn Học Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monhoc = Monhoc::find($id);
        $monhoc->delete();
        return back()->with('success','xõa Môn học thành công');
    }
}
