@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                          Session::forget('success');
                        @endphp
                      </div>
                    @endif
                   
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                    </div>
                    @endif
                    <div class="card-header">Danh sách Môn Học</div> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">

                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">STT</th>
                          <th scope="col">MÃ MÔN HỌC</th>
                          <th scope="col">Tên MÔN HỌC</th>
                          <th scope="col">Số Tín Chỉ</th>
                          <th scope="col">Số Tiết</th>
                          <th scope="col">Mã Sinh Viên</th>
                          <th scope="col">Tên Giảng Viênc</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($monhoc as $key => $value)
                        <tr>
                          <th scope="row">{{$key}}</th>
                          
                          <td>{{$value->mamh}}</td>
                          <td>{{$value->tenmh}}</td>
                          <td>{{$value->sotinchi}}</td>
                          <td>{{$value->sotiet}}</td>
                          <td>{{$value->masv_curd}}</td>
                          <td>{{$value->namegv_post}}</td>
                          <td>
                            <a class='btn btn-info' href="{{route('Monhoc.create',[$value->id])}}">Thêm</a>
                            <a class='btn btn-primary' href="{{route('Monhoc.show',[$value->id])}}">Edit</a>
                            <form action="{{route('Monhoc.destroy',[$value->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit"  value="DELETE"/>
                            </form>
                       
                        @endforeach
                      </tbody>
                    </table>

                    

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection