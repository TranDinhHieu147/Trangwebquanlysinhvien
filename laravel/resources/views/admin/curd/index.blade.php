@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xg-8">
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
                    <div class="card-header">Danh sách sinh viên</div> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">

                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">STT</th>
                          <th scope="col">MÃ SV</th>
                          <th scope="col">Họ Tên</th>
                          <th scope="col">Lớp</th>
                          <th scope="col">Nơi Sinh</th>
                          <th scope="col">Ngày Sinh</th>
                          <th scope="col">Giới Tính</th>
                          <th scope="col">Email</th>
                          <th scope="col">Mã Giảng Viên</th>
                          <th scope="col">Tên Môn Học</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($curd as $key => $value)
                        <tr>
                          <th scope="row">{{$key}}</th>
                          
                          <td>{{$value->masv}}</td>
                          <td>{{$value->name}}</td>
                          <td>{{$value->lop}}</td>
                          <td>{{$value->noisinh}}</td>
                          <td>{{$value->ngaysinh}}</td>
                          <td>{{$value->gioitinh}}</td>
                          <td>{{$value->email}}</td>
                          <td>{{$value->magv_post}}</td>
                          <td>{{$value->tenmh_monhoc}}</td>
                          <td>
                            <a class='btn btn-info' href="{{route('Curd.create',[$value->id])}}">Thêm</a>
                            <a class='btn btn-primary' href="{{route('Curd.show',[$value->id])}}">Edit</a>
                            <form action="{{route('Curd.destroy',[$value->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit"  value="DELETE"/>
                            
                            </form>
                       </tr>
                        @endforeach
                      </tbody>
                    </table>

                    

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection