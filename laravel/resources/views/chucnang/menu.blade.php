
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <div class="col-md-3 header">
         <img src="{{asset('image/logo.png')}}" width="35%">

      </div>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Danh Sách</a>
        
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
        
      </li>
    </ul>
    <form method="GET" class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}">
      <input class="form-control mr-sm-2" name="tukhoa" type="search" placeholder="Tìm Kiếm..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
    </form>
    
  </div>
</nav>