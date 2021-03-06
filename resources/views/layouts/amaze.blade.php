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
  <link href="/css/admin.css" rel="stylesheet">
  <link href="/css/amazeui.datatables.css" rel="stylesheet">
  <!-- Scripts -->
</head>
<body>
  <header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
      <strong>NBLR APP</strong> <small>管理</small>
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}">
      <span class="am-sr-only"></span> <span class="am-icon-bars"></span>
    </button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            <span class="am-icon-users"></span> {{ Auth::user()->name }} <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="am-icon-power-off"></span> 退出
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </header>

  <div class="am-cf admin-main">
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
      <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
          @if (Auth::user()->role == '3')
            @include('layouts.serverinfo')
            @include('layouts.myfiles')
            @include('layouts.tgsign')
            @include('layouts.telrecord')
            @include('layouts.userinfo')
          @elseif (Auth::user()->role == '2')
            @include('layouts.telrecord')
            @include('layouts.userinfo')
          @elseif (Auth::user()->role == '1')
            @include('layouts.telrecord')
          @elseif (Auth::user()->role == '0')
            @include('layouts.telrecord')
          @endif
        </ul>
      </div>
    </div>
    @yield('content')
  </div>

  <!-- Scripts -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/amazeui.min.js"></script>
  <script src="/js/admin.js"></script>

  @yield('jsgroup')

  <script>
    $(function() {
      $('#doc-form-file').on('change', function() {
        var fileNames = '';
        $.each(this.files, function() {
          fileNames += '<span class="am-badge">' + this.name + '</span> ';
        });
        $('#file-list').html(fileNames);
      });
    });
  </script>
</body>
</html>
