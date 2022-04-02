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
                    <div class="card-header">Danh sách sinh viên ĐÃ ĐĂNG KÝ</div> 
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
                          <th scope="col">Mã Giảng Viên</th>
                          <th scope="col">Mã Môn Học</th>
                          <th scope="col">Quản lý</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dangkymon as $key => $value)
                        <tr>
                          <th scope="row">{{$key}}</th>
                          
                          <td>{{$value->masv_curd}}</td>
                          <td>{{$value->magv_post}}</td>
                          <td>{{$value->mamh_monhoc}}</td>
                         
                          <td>
                            <a class='btn btn-info' href="{{route('Dangkymon.create',[$value->id])}}">Thêm</a>
                            <a class='btn btn-primary' href="{{route('Dangkymon.show',[$value->id])}}">Edit</a>
                            <form action="{{route('Dangkymon.destroy',[$value->id])}}" method="POST">
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