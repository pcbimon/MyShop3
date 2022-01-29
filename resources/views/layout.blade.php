<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyShop - @yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/font-awesome/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">My Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}" href="{{route('home')}}">หน้าหลัก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ is_int((strpos(Route::currentRouteName(), 'product'))) ? 'active' : '' }}" href="{{route('product.index')}}">สินค้า</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ is_int((strpos(Route::currentRouteName(), 'user'))) ? 'active' : '' }}" href="{{route('user.index')}}">ผู้ใช้งาน</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{route('about')}}">เกี่ยวกับ</a>
              </li>
            </ul>
            <div class="d-flex">
                @auth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->email }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="{{route('user.logout')}}">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>

                @endauth
                @guest
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit" onclick="window.location.href='{{route('user.login')}}'">Login</button>
                @endguest

            </div>
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('libs/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
