<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Curd;
use App\Monhoc;


class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trangchu(){
        $monhoc = Monhoc::orderBy('id','DESC')->get();
        $post = Post::orderBy('id','DESC')->paginate(10);
        $curd = Curd::all();
        return view('chucnang.home')->with(compact('curd','post','monhoc'));
    }
   
    public function tim_kiem(Request $request)
    {
        $tukhoa = $_GET['tukhoa'];

        $chucnang = Curd::where('id','LIKE','%'.$tukhoa.'%')->get();
        $chucnang = Post::where('id','LIKE','%'.$tukhoa.'%')->get();

        
        $curd = Curd::all();
        return view('chucnang.search')->with(compact('curd','tukhoa','chucnang'));
    }
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
