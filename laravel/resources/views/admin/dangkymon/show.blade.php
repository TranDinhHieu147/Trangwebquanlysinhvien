@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cập Nhật Sinh Viên ĐÃ Đăng ký</div>

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

                    <form method="POST" action="{{route('Dangkymon.update',[$dangkymon->id])}}" enctype="multipart/form-data">
                    	  @method('PUT')
                        @csrf
                      <div class="form-group">
                        <label for="masv_curd">Mã Sinh Viên:</label>
                        <input type="text" class="form-control" name="masv_curd">
                      </div>
                      <div class="form-group">
                        <label for="magv_post">Mã Giảng Viên:</label>
                        <input type="text" class="form-control" name="magv_post">
                      </div>
                      <div class="form-group">
                        <label for="mamh_monhoc">Mã Môn Học:</label>
                        <input type="text" class="form-control" name="mamh_monhoc">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlSelect2">ĐĂng kí Môn</label>
                          <select  class="form-control" >
                            <option value="1">Dăng KÍ Thành Công</option>
                            <option value="0">Chưa ĐĂng Kí</option>
                            
                          </select>
                        </div>
                     
                      <form action="/action_page.php">
                      
                      <button type="submit" class="btn btn-primary">Cập Nhật Sinh Viên ĐĂng ký</button>
                       <a class="btn btn-success" href="{{route('Dangkymon.index')}}">Danh sách đăng ký</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
