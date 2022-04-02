@extends('../layout')
@section('content')

@foreach($post as $key =>$value)
	<p>MÃ SINH VIÊN: {{$value->masv}}</p>
	<p>HỌ TÊN: {{$value->name}}</p>
	<p>LỚP: {{$value->lop}}</p>
	<p>NƠI SINH: {{$value->noisinh}}</p>
	<p>NGÀY SINH: {{$value->ngaysinh}}</p>
	<p>GiỚI TÍNH: {{$value->gioitinh}}</p>
@endforeach
@endsection