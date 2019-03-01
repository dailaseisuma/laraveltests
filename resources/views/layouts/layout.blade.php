<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/') }}/libs/lightbox/css/lightbox.css">
    <link href="{{ url('/') }}/css/reset.css" rel="stylesheet">
    <link href = "{{ url('/') }}/libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
    <script src="{{ url('/') }}/libs/jQuery/jquery2.1.4.min.js"></script>
    <script src="{{ url('/') }}/libs/bootstrap/js/bootstrap.js"> </script>
    <link href="{{ url('/') }}/css/style.css" rel="stylesheet">
    <script src="{{ url('/') }}/libs/lightbox/js/lightbox.js"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">';
    <title>@yield('title')</title>
</head>
<body>
<section class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index"><img src="" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav  navbar-right">
                    <li><a href="{{ url('/news') }}">Jaunumi</a></li>
                    <li><a href="{{ url('/gallery') }}">Galerija</a></li>
                    <li><a href="{{ url('/contacts') }}">Kontakti</a></li>
                </ul>
            </div>
        </div>
    </nav>';
    }
    <section class="row main">
        <aside class="col-md-2 leftaside">
            @yield('asideLeft')
        </aside>
        <main class="col-md-8">
            @yield('content')
        </main>
        <aside class="col-md-2 rightaside">
            @yield('asideRight')
        </aside>
    </section>
    <footer class="row navbar-fixed-bottom">
        <div class="col-md-12">
        </div>
    </footer>
</section>
</body>
</html>