<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Laravel</title>
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">

    <!-- Main styles for this application-->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    @yield('css')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show" style="font-family: 'Mitr', sans-serif;
">
    <!-- header -->
    @include('backend.layout.header')
    <div class="app-body">
        @include('backend.layout.sidebar')
        <main class="main">
            @yield('breadcrumb')
            <!-- Breadcrumb-->

            <div class="container-fluid">
                <div class="animated fadeIn">
                    @yield('content')
                </div>
            </div>
        </main>

    </div>
    @include('backend.layout.footer')
    <!-- Bootstrap and necessary plugins-->
    <script src="/js/all.js"></script>
    @yield('script')
</body>

</html>
