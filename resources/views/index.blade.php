<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trung Tâm Lái Xe OVERDOSE</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://marsurl.com/images/2021/05/19/logo.png" type="image/icon type">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="shortcut icon" href="./IMAGE/logo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <section class='header'>
        <div class="logo-container">
            <img src="./IMAGE/logo.png" alt="logo">

        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="{{Route('index')}}">Trang chủ</a></li>
                <li><a class="nav-link" href="{{Route('intro')}}">Giới thiệu</a></li>
                <li><a class="nav-link" href="{{Route('home')}}">Khóa học</a></li>
                <li><a class="nav-link" href="{{Route('questiona1')}}">Ôn lý thuyết</a></li>
                @if (Auth::check())
    
    {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
                    {{-- <li><a class="nav-link" href=" {{ route('logout') }}">Đăng xuất</a></li> --}}
                    {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
                    {{-- {!! Form::close() !!} --}}
                    <a class="nav-link" id="logoutbutton" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logoutform').submit();">
                                Đăng xuất
                            </a>
                            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                
     @else
     <li><a class="nav-link" href="{{route('login')}}">Đăng nhập</a></li>
    @endif
            </ul>
        </nav>
    </section>

    
    <main>
    <section class="presentation">
      <div class="introduction">
        <div class="intro-text">
          <h1>OVERDOSE</h1>
          <br><br><br>
          <p>CHẠY XE TRONG CƠN SAY</p>
        </div>
        <div class="cta" >
          <button class="cta-select" onclick="openForm()">THAM GIA</button>
        </div>
      </div>
      <div class=cover>
        <img src="./IMAGE/presentation1.jpg" alt="cover-bg">
      </div>
    </section>

    </main>
    <section class="facilities">
        <h1>Các Chương Trình Đào Tạo</h1>
        <br>
        
        <div class="grid-container">
            @foreach($Courses as $Courses)
            <div class="grid-item">
                <img src="{{$Courses->thumbnail}}" alt="">
                <a href="course/{{$Courses->id}}"><h3>{{$Courses->title}}</h3></a>
                <p>{{$Courses->description}}</p>
               
            </div>
           
           @endforeach 
        </div>
    </section>
    
    <section class="news">

        <button class="open-button" onclick="openForm()">Đăng ký theo dõi</button>
        
        <div class="form-popup" id="myForm">
          <form method="post" action="{{Route('theodoi.store')}}" class="form-container">
            @csrf
            <h1>Đăng ký theo dõi</h1>
        
            <label for="name"><b>Họ Tên</b></label>
            <input type="text" placeholder="Nhập họ tên" name="hoten" required>
        
            <label for="phone"><b>Số Điện Thoại</b></label>
            <input type="text" placeholder="Nhập SĐT" name="sdt" required>
        
            <button type="submit" class="btn">Đăng ký theo dõi</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
        
       
    </section>

    <div class="footer-basic">
            <footer>
                <div class="social">
                    <a href="#"><i class="icon ion-social-instagram"></i></a>
                    <a href="#"><i class="icon ion-social-snapchat"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://www.facebook.com/Trung-tâm-dạy-lái-xe-Overdose-107896341488474/?notif_id=1621501594289030&notif_t=page_name_change_admin&ref=notif"><i class="icon ion-social-facebook"></i></a>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{Route('index')}}">Trang Chủ</a></li>
                    <li class="list-inline-item"><a href="{{Route('intro')}}">Giới Thiệu</a></li>
                    <li class="list-inline-item"><a href="https://hoclaixemoto.com/thi-bang-lai-xe-may-a1-online/">Ôn lý thuyết</a></li>
                    <li class="list-inline-item"><a href="{{Route('home')}}">Khóa Học</a></li>
                    @if (Auth::check())

                    {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
                    {{-- <a class="nav-link" href=" {{ route('logout') }}">Logout</a> --}}
                    {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
                    {{-- {!! Form::close() !!} --}}
                    <li class="list-inline-item"><a id="logoutbutton" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logoutform').submit();">
                            Đăng xuất
                        </a></li>
                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    @else
                    <li class="list-inline-item"><a href="{{route('login')}}">Đăng nhập</a></li>
                    @endif
                </ul>
                <p class="copyright" style="font-size:40px">OVERDOSE DRIVING SCHOOL</p>
            </footer>
        </div>
    
</body>
<script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html> 