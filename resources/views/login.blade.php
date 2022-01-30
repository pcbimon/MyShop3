<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="{{ asset('css/sbadmin.css') }}" rel="stylesheet" />
        <link href="{{ asset('libs/font-awesome/css/all.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('libs/font-awesome/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="{{route('user.authen')}}" method="POST">
                                            @if (Session::get('fail'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('fail')}}
                                                </div>
                                            @endif
                                            {{ csrf_field() }}
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                            </div>
                                            <div class="row mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
