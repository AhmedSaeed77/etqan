<!DOCTYPE html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!------------>
  <title>اتقان</title>
  <!-- BOXICONS -->
  <link rel="icon" type="image/x" href="{{ asset('images/icon1.png') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-------------->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon-32x32.png') }}" />
  <!---------------->
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
  <link rel="icon" href="{{ asset('imges/اتقان.png') }}" type="image/x-icon"/>
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
  <!-------------->
  <title>@yield('title') - {{config('app.APP_NAME')}}</title>

  <style>

    .nav-item {
    /* Add your styles for the list item */
}

.nav-link {
    /* Styles for the anchor/link */
    display: flex;
    align-items: center;
    text-decoration: none;
    padding: 10px;
}

.avatar-img {
    /* Styles for the avatar image */
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}

.user-name {
    /* Styles for the user's name */
    font-weight: bold;
    color: #333;
}

.sub-menu {
    /* Styles for the submenu */
    display: none; /* Hide by default */
    position: absolute;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu-item-has-children:hover .sub-menu {
    /* Show submenu on hover */
    display: block;
}

.logout-link {
    /* Styles for the logout link */
    padding: 10px;
    display: block;
    text-decoration: none;
    color: #333;
}
  </style>
  @yield('page-style')
</head>

<body dir="rtl">
  <!---------->
  <div class="content">

    <!-- Start Navbar -->
    <nav class="navbar py-2  navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid gap-3 ">
        <a class="  -brand" href="{{ route('index') }}"><img src="{{ asset('images/اتقان.png') }}" class="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link  text_gray fs_18 {{ Route::currentRouteName() == 'index' ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text_gray fs_18 {{ Route::currentRouteName() == 'doctors' ? 'active' : '' }}" href="{{ route('doctors') }}">المؤسسين</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text_gray fs_18 {{ Route::currentRouteName() == 'membershome' ? 'active' : '' }}" href="{{ route('membershome') }}">أعضاء مجلس الأدارة</a>
              </li>

            <li class="nav-item">
              <a class="nav-link text_gray fs_18 {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">اتصل بنا</a>
            </li>
            @if(auth('website')->check())
            <li class="menu-item-has-children nav-item">
                <a href="javascript:void(0)" class="nav-link">
                    <img src="{{ asset('img/user2-160x160.jpg') }}" class="avatar-img">
                    <span class="user-name">{{ auth('website')->user()->name }}</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">
                            تسجيل الخروج
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text_gray fs_18 {{ Route::currentRouteName() == 'register' ? 'active' : '' }}" href="{{ route('getregister') }}">التسجيل فى البرنامج</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text_gray fs_18 {{ Route::currentRouteName() == 'login' ? 'active' : '' }}" href="{{ route('getlogin') }}"> تسجيل الدخول</a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link text_gray fs_18 {{ Route::currentRouteName() == 'graduateshome' ? 'active' : '' }}" href="{{ route('graduateshome') }}"> الخريجين</a>
              </li>

          </ul>

        </div>
      </div>
    </nav>
    <!-- end Navbar -->

    @yield('content')

      <!-- Start footer -->
      <footer class="main_shadow py-3">
        <div class="px-2 px-md-5 d-flex align-items-center justify-content-between">
            <p class="mb-0 text_base text_gray">جميع الحقوق محفوظه لدى <span class="text_main">اتقان</span> </p>
            <ul class=" px-0 d-flex gap-3 footer_list mb-0">
                <li>
                    <a target="_blank" href="{{ $data['facebook'] }}">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="{{ $data['linkedin'] }}">
                        <i class="linkedin fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="mailto:{{ $data['email'] }}">
                        <i class="google far fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- end footer -->
    <!------------>
    @include('dashboard.core.tags.scripts')
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

    @if(Session::has('error'))
        @include('dashboard.core.alerts.error', ['message' => Session::get('error')])
    @elseif(Session::has('success'))
        @include('dashboard.core.alerts.success', ['message' => Session::get('success')])
    @endif
    @foreach($errors->all() as $message)
        @include('dashboard.core.alerts.error', compact('message'))
    @endforeach

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js')}}"></script>
@yield('page-script')


</body>

</html>
