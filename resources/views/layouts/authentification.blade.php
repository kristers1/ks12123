<!DOCTYPE html>
<html lang=en>
<head>
    <title> @yield('title') </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}"/>
   
</head>

<body>
    <div class="contents">
    <div class="header">
    <div class="top-menu-bar" id="top-nav-bar">
    <nav class="main-menu">
        <ul class="nav-bar">
            <li class="left"><a href="/" > Home </a></li>
            <li class="left"><a href="/films">Films</a></li>
            <li class="left"><a href="/reviews">Reviews</a></li>
            <li class="left"><a href="/actors">Actors</a></li>
            <li class="right"><a href="/register" > Register </a></li>
        </ul>
        </nav>
    </div> 
    </div> 
@yield('content')
</div>
</body>
</html>