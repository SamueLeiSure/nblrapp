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
    @yield('content')

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/amazeui.datatables.min.js"></script>
    <script>
  $(function() {
    $('#example').DataTable();
  });
</script>
</body>
</html>
