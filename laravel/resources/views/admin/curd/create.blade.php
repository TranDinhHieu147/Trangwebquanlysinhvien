@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Sinh Viên</div>

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

                    <form method="POST" action="{{route('Curd.store')}}">
                        @csrf
                      <div class="form-group">
                        <label for="masv">Mã Sinh Viên:</label>
                        <input type="text" class="form-control" name="masv">
                      </div>
                      <div class="form-group">
                        <label for="name">Họ Tên:</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <div class="form-group">
                        <label for="lop">Lớp:</label>
                        <input type="text" class="form-control" name="lop">
                      </div>
                      <div class="form-group">
                        <label for="noisinh">Nơi Sinh:</label>
                        <input type="text" class="form-control" name="noisinh">
                      </div>
                      <div class="form-group">
                        <label for="ngaysinh">Ngày Sinh:</label>
                        <input type="text" class="form-control" name="ngaysinh">
                      </div>
                      <div class="form-group">
                        <label for="gioitinh">Giới Tính:</label>
                        <input type="text" class="form-control" name="gioitinh">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <label for="magv_post">Mã Giảng Viên</label>
                        <input type="magv_post" class="form-control" name="magv_post">
                      </div>
                      <div class="form-group">
                        <label for="tenmh_monhoc">Tên Môn Học</label>
                        <input type="tenmh_monhoc" class="form-control" name="tenmh_monhoc">
                      </div>
                      <form action="/action_page.php">
                      
                      <button type="submit" class="btn btn-primary">Thêm Sinh Viên</button>

                         <a class="btn btn-success" href="{{route('Curd.index')}}">Danh sách sinh viên</a>
                
              
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
