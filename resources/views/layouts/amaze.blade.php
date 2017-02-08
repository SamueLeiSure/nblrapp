<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>nblrapp</title>

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
        <ul>
          
        </ul>
      </div>
    </header>

    <div class="am-cf admin-main">
      <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
          <ul class="am-list admin-sidebar-list">
            <li>
              <a href="{{ url('/serverinfo') }}">
                <span class="am-icon-file"> 服务器信息</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/file') }}">
                <span class="am-icon-file"> 我的公文</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/tgsign') }}">
                <span class="am-icon-file"> 天谷签章</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/pdfobject.min.js"></script>  

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
