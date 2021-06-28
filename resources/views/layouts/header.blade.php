@section('header')
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #F8F3E2">
    <a class="navbar-brand" id= "navbar-logo" style="height: 50px; width: 100px;">{{ Html::image('IMAGE/logo.png', 'LOGO', array('class'=> 'logo')) }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if (Auth::check() && Auth::user()->role()->first()->name == "Admin")
                    <li class="nav-item">
                        <a style="color:black" class="nav-link" href="{{ route('dashboard') }}">Phê duyệt</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a style="color:black" class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="{{ route('course.index') }}">Khóa học</a> -->
                    <a style="color:black" class="nav-link" href="{{ route('home') }}">Khóa học</a>
                </li>
                @if (Auth::check() && Auth::user()->role()->first()->name == "Admin")
                    <li class="nav-item">
                        <a style="color:black" class="nav-link" href="{{ route('user.index') }}">Tài khoản</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:black" class="nav-link" href="{{ 'theodoi1'}}">Người Đăng ký</a>
                    </li>
                @endif
                @if (Auth::check())
                    <li class="nav-item">
                            <a style="color:black" class="nav-link" href="{{ route('user.account', [Auth::id()]) }}">Thông tin</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a style="color:black" class="nav-link" href=" {{ route('login') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:black" class="nav-link" href=" {{ route('register') }}">Đăng ký</a>
                    </li>
                @else
                    <li class="nav-item">
                        {{-- {!! Form::open(["method" => "post", "action" =>  route('logout') ]) !!} --}}
                        {{-- <a style="color:black" class="nav-link" href=" {{ route('logout') }}">Logout</a> --}}
                        {{-- {!! Form::submit('Logout', ['class' => 'nav-link', 'id' => 'logoutbutton']) !!} --}}
                        {{-- {!! Form::close() !!} --}}
                                <a  style="color:black" class="nav-link" id="logoutbutton" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logoutform').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>