<!DOCTYPE html>
<html lang="zh-TW">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <meta itemprop="image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
    @section('meta')
    @show
</head>

<body>
    @yield('content')
</body>

</html>
