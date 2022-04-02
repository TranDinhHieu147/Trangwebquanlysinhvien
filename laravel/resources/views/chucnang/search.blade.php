@extends('../layout')
@section('content')
<div class="container">
    <h2 class="tieude">Tìm Kiếm sinh viên: {{$tukhoa}}</h2>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <table class="table">

                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">STT</th>
                          <th scope="col">MÃ SV</th>
                          <th scope="col">Họ Tên</th>
                          <th scope="col">Lớp</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            @foreach($curd as $key => $value)
                            <th scope="row">{{$key}}</th>               
                            <td class="masv">{{$value->masv}}</td> 
                            <td class="name">{{$value->name}}</td>
                            <td class="lop">{{$value->lop}}</td> 

                        </tr> 
                        @endforeach 
                    </tbody>
                    </table>
                        
                           
    
              
</div>
@endsection