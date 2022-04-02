<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trang Quản Lý Sinh Viên</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:@200,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        

    </head>
    <body>
        <!-- Slideshow container -->

        
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary" >

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <div class="col-md-3 header">
                 <img src="{{asset('image/logo.png')}}" width="35%">

              </div>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('Curd.index')}}"></a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Post.index')}}"></a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Monhoc.index')}}"></a>
                
              </li>
              
              <li class="nav-item">
                
                <a class="nav-link" href="{{ url('/register') }}">Đăng kí</a></li>
                <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>

              </li>
            </ul>
             </tr>
              <form method="GET" class="form-inline my-2 my-lg-0"  action="{{url('tim-kiem')}}">
               <input class="form-control mr-sm-2" name="tukhoa" type="search"   placeholder="Tìm Kiếm..." aria-label="Search">
               <button type="submit"><span class="fa fa-search"></span></button>
                 <div class="aa-search-box">
  
              </form>
                      
           
          </div>
        </nav>
          
        </li>

       <div class="p-5 text-center bg-image" style=" background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/010.jpg'); height: 400px; margin-top: 60px;" >
        <div class="mask">
          <div class="d-flex justify-content-center align-items-center h-50">
            <div class="text-white">
              
            
                
              
            </div>
          </div>
        </div>
      </div>
        <div class="container-fluid">
         <!--@include('chucnang.menu')-->
           
          @yield('content')
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"> </script>
    </body>
</html>
