@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Môn học</div>

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

                    <form method="POST" action="{{route('Monhoc.store')}}">
                        @csrf
                      <div class="form-group">
                        <label for="mamh">Mã Môn Học:</label>
                        <input type="text" class="form-control" name="mamh">
                      </div>
                      <div class="form-group">
                        <label for="tenmh">Tên Môn Học:</label>
                        <input type="text" class="form-control" name="tenmh">
                      </div>
                      
                      <div class="form-group">
                        <label for="sotinchi">Số Tín Chỉ:</label>
                        <input type="text" class="form-control" name="sotinchi">
                      </div>
                      <div class="form-group">
                        <label for="sotiet">Số tiết:</label>
                        <input type="text" class="form-control" name="sotiet">
                      </div>
                      <div class="form-group">
                        <label for="masv_curd">Mã Sinh Viên:</label>
                        <input type="text" class="form-control" name="masv_curd" >
                      </div>
                      <div class="form-group">
                        <label for="namegv_post">Tên Giảng Viên:</label>
                        <input type="text" class="form-control" name="namegv_post" >
                      </div>
                      
                      <form action="/action_page.php">
                      
                      <button type="submit" class="btn btn-primary">Thêm Môn Học</button>
                      <a class="btn btn-success" href="{{route('Monhoc.index')}}">Danh sách Môn Học</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
