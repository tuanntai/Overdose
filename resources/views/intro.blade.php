<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://marsurl.com/images/2021/05/19/logo.png" type="image/icon type">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/intro.css">
    <link rel="shortcut icon" href="./IMAGE/logo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
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

    

    <section class="intro-presentation">
        <h1>------CHỈ CÓ TẠI OVERDOSE DRIVE SCHOOL-------</h1><BR><br>
        <div class="presentation-cols">

            <div class="presentation-col">
                <img loading="lazy" class="vcex-icon-box-image wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/dao-tao-lai-xe-viet-thanh-vn-13.jpg" alt="" width="720" height="479">
                <h3>CÓ SÂN SÁT HẠCH RIÊNG</h3>
                <p>OVERDOSE có hệ thông sân tập hiện đại với diện tích trên 5000m2. Xe tập lái là xe đời mới và luôn
                    được kiểm tra, bảo hành đảm bảo cho các kì thi không lỗi kỹ thuật.</p>

            </div>
            <div class="presentation-col">
                <img loading="lazy" class="vcex-icon-box-image wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/dao-tao-lai-xe-viet-thanh-vn-3.jpg" alt="" width="720" height="479">
                <h3>CAM KẾT GIÁ RẺ NHẤT NGHỆ AN</h3>
                <p>OVERDOSE là trung tâm trực thuộc sở GTVT Nghệ An. Trung tâm trực tiếp tuyển sinh không qua trung gian
                    vì vậy học viên sẽ được nộp học phí với mức giá Tận gốc.</p>

            </div>
            <div class="presentation-col">
                <img loading="lazy" class="vcex-icon-box-image wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/dao-tao-lai-xe-viet-thanh-vn-6.jpg" alt="" width="720" height="479">
                <h3>GIÁO VIÊN NHIỆT TÌNH TÂM HUYẾT</h3>
                <p> Chúng tôi đã tạo nên đội ngũ tư vấn trẻ và năng động - phục vụ tận tâm. Luôn quan tâm theo sát học
                    viên trong quá trình đào tạo. Mọi vấn đề đều được giải quyết.</p>
            </div>
            <div class="presentation-col">
                <img loading="lazy" class="vcex-icon-box-image wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/dao-tao-lai-xe-viet-thanh-vn-9.jpg" alt="" width="720" height="479">
                <h3>ĐÀO TẠO BÀI BẢN - HỌC GẦN NHÀ</h3>
                <P>Với gần 20 năm kinh nghiệm. Overdose có chương trình đào tạo riêng, tiết kiệm được thời gian học lái
                    xe. Chương trình phù hợp với học viên thi đỗ ngay lần đầu.</P>
            </div>
    </section>



    <section class="teacher">
        <h1>------ĐỘI NGŨ GIÁO VIÊN TẠI TRUNG TÂM------</h1><br><br>
        <div class="teacher-image">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-chung-1.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-anh-tuan.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-chung.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-doan.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-duy.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-khai.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-manh-hung.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-nhan.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-tuong.jpg" alt="" width="500" height="500">
            <img loading="lazy" class="wpex-align-middle" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2021/02/gv-ad-hoang-anh.jpg" alt="" width="500" height="500">
        </div>
    </section>

    <section class="feedback" >
        
        <h1 style="background-color: #EDDFC9;">------SỰ HÀI LÒNG CỦA HỌC VIÊN LÀ THÀNH CÔNG LỚN NHẤT CỦA CHÚNG TÔI------</h1><br><br>
        <div class="carousel" style="background-color: #EDDFC9;">


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img width="300"  class="d-block w-10" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2019/12/hoc-lai-xe-o-to-1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img width="300"  class="d-block w-10" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2019/12/hoc-lai-xe-o-to-2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img width="300"  class="d-block w-10" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2019/12/hoc-lai-xe-o-to-3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img width="300"  class="d-block w-10" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2019/12/hoc-lai-xe-o-to-4.jpg" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img width="300"  class="d-block w-10" src="https://daotaolaixevietthanh.vn/wp-content/uploads/2019/12/hoc-lai-xe-o-to-5.jpg" alt="Fifth slide">
          </div>
         
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" color="black" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
    </section>

   

    <section class="news">

        <button class="open-button" onclick="openForm()">Đăng ký theo dõi</button>

        <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
                <h1>Đăng ký theo dõi</h1>

                <label for="email"><b>Họ Tên</b></label>
                <input type="text" placeholder="Nhập họ tên" name="name" required>

                <label for="psw"><b>Số Điện Thoại</b></label>
                <input type="text" placeholder="Nhập SĐT" name="phone" required>

                <button type="submit" class="btn">Đăng ký theo dõi</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

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
                    <li class="list-inline-item"><a href="{{Route('questiona1')}}">Ôn lý thuyết</a></li>
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
    

    </section>
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