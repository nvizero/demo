@extends('layouts.frontend')

@section('css')
    <link rel="stylesheet" href="/frontend/css/home.css">
    <link rel="stylesheet" href="/frontend/css/login.css">
@endsection

@section('content')

    <body class="bg-white">
        <div class="banner">
            <div class="container">
                <div class="row bannerBox">
                    <div class="col-lg-3 col-6">
                        <img src="/frontend/images/logo.svg" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <main class="py-5 form-login">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('handleLogin') }}" method="POST">
                            @csrf


                            @include('frontend.common.error')
                            {{-- @if ($message = Session::get('error'))
                                <div class="alert alert-error">
                                    <p style="color:red;">{{ $message }}</p>
                                </div>
                            @endif --}}
                            <h1 class="h3 mb-3 text-center">登录</h1>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">用户名/Email</label>
                                {{-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" --}}
                                <input name="email" class="form-control" id="exampleInputEmail1" placeholder="用户名"
                                    value="{{ old('email', null) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">密码</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                    placeholder="输入密码" required>
                            </div>
                            <div class="d-flex  justify-content-between align-items-center">
                                {{-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label fs-6" for="exampleCheck1">记住我</label>
                                </div> --}}
                                <a href="/forgot" class="btn btn-link fs-6">忘记密码</a>
                            </div>

                            <button type="submit" class="w-100 btn btn-lg btn-primary">登录</button>
                            <div class="text-center fs-6">没有帐号？<a href="/signup" class="btn btn-link  fs-6">去注册</a>
                            </div>
                        </form>
                        <div class="d-grid backHome text-center">
                            <a href="./" class="btn btn-link mt-5 fs-6"><span>返回首页</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </body>
@endsection
