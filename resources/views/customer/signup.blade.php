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
                        <form action="{{ route('handleSignup') }}" method="POST">
                            @csrf
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-light d-flex align-items-center" role="alert">
                                    <div class="fs-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        {{ $error }}
                                    </div>
                                </div>
                            @endforeach
                            <h1 class="h3 mb-3 text-center">注册</h1>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">帐号</label>
                                <input type="text" class="form-control" name="account" id="exampleInputEmail1"
                                    placeholder="帐号" required="required" value="{{ old('account') }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">邮箱</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    placeholder="邮箱" required="required" value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">密码</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                    placeholder="输入密码" required="required">
                            </div>
                            {{-- <div class="d-flex  justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label fs-6" for="exampleCheck1">记住我</label>
                                </div>
                                <a href="/forgot" class="btn btn-link fs-6">忘记密码</a>
                            </div> --}}

                            <button type="submit" class="w-100 btn btn-lg btn-primary">登录</button>
                            <div class="text-center fs-6">已有帳號？<a href="/customer/login" class="btn btn-link  fs-6">去登录</a>
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
