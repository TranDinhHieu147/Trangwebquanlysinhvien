@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh sách chúc năng</div>
                
                
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p><a class="btn btn-success" href="{{route('Curd.create')}}">Thêm Sinh Viên</a></p>
                    <p><a class="btn btn-success" href="{{route('Curd.index')}}">Danh sách Sinh Viên</a></p>
                    <p><a class="btn btn-success" href="{{route('Post.create')}}">Thêm  Giảng Viên</a></p>
                    <p><a class="btn btn-success" href="{{route('Post.index')}}">Danh sách Giảng Viên</a></p>
                    <p><a class="btn btn-success" href="{{route('Monhoc.create')}}">Thêm  Môn Học</a></p>
                    <p><a class="btn btn-success" href="{{route('Monhoc.index')}}">Danh sách Môn Học</a></p>
                    <p><a class="btn btn-success" href="{{route('Dangkymon.create')}}">Đăng kí  Môn Học</a></p>
                    <p><a class="btn btn-success" href="{{route('Dangkymon.index')}}">Danh sách Đăng kí  Môn Học</a></p>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
