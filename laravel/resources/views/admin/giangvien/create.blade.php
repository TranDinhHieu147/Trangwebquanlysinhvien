@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Giảng  Viên</div>

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

                    <form method="POST" action="{{route('Post.store')}}">
                      @csrf
                      <div class="form-group">
                        <label for="magv">Mã Giảng Viên:</label>
                        <input type="text" class="form-control" name="magv">
                      </div>
                      <div class="form-group">
                        <label for="namegv">Họ Tên Giảng Viên:</label>
                        <input type="text" class="form-control" name="namegv">
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
                        <label for="masv_curd">masv_curd:</label>
                        <input type="text" class="form-control" name="masv_curd" >
                      </div>
                      
                      <form action="/action_page.php">
                      
                      <button type="submit" class="btn btn-primary">Thêm Giảng Viên</button>
                       <a class="btn btn-success" href="{{route('Post.index')}}">Danh sách Giảng Viên</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
