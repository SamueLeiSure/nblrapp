<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="/css/amazeui.min.css" rel="stylesheet">
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
  <!-- Scripts -->
</head>
<body>
  <div class="header">
    <div class="am-g">
      <h1>NBLR</h1>
    </div>
  </div>
  <hr>
  <div class="am-g">
    <div class="am-u-lg-4 am-u-md-6 am-u-sm-centered">
      @yield('content')
      <hr>
    </div>
  </div>

</body>
</html>
