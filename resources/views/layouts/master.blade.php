<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,500,500i,700,900|Sail" rel="stylesheet">
    @yield('head')

    <title>Qrim - @yield('title')</title>
</head>
<body style="background:#f9f9f9">

    <nav id="nav" class="navbar-fixed-top navbar-inverse" style="height:8%;">
        <div class="container-fluid row">
            <div class="navbar-header col-sm-2 col-xs-2 col-md-2 col-lg-2">
                <a class="navbar-brand" href="#">Qrim</a>
            </div>
            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"></div>
            <div class=" col-sm-4 col-xs-4 col-md-4 col-lg-4">
                <ul class="nav navbar-nav navbar-right row">
                    <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span class="glyphicon glyphicon-menu-hamburger" onclick="toggleNav()"></span></a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span class="glyphicon glyphicon-bell popup" onclick="notification()"></span></a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span class="glyphicon glyphicon-search" onclick="search()"></span></a></li>
                    <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-0 col-sm-6 col-md-8 col-lg-6"></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
                <div id="notif" class="notif">
                    
                </div>
            </div>
        </div>
    </nav>

    <div id="sideNav" class="sidebar" style="opacity:0.9;">
    @if(\Auth::user())
        <a href="/dashboard">Dashboard</a>
        <a href="#">Setting</a>
        <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
    @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endif
    </div>

    <div style="padding-top:8%; padding-bottom:50px;" onclick="init()">
        @yield('content')
    </div>

    <script>
        function toggleNav() {
        var element = document.getElementById('sideNav');
        if(element.style.width == "200px"){
        element.style.width = "0px";
    } else{
    element.style.width = "200px";
}
}
</script>

<script>
    function notification(){
    var notif = document.getElementById('notif');
    if(notif.style.visibility == "hidden"){
    notif.style.visibility = "visible";
} else{
notif.style.visibility = "hidden";
}
}
</script>

<script>
    function search(){
    var search = document.getElementById('search-inp');
    if(search.style.width=="0px"){
    search.style.width="100%"
} else{
search.style.width="0px"
}
}
</script>

<script>
    function init(){
    var notif = document.getElementById('notif');
    var sidebar = document.getElementById('sideNav');
    if(sidebar.style.width=="200px" || notif.style.visibility=="visible"){
    sidebar.style.width="0px";
    notif.style.visibility="hidden";
}
}
</script>

</body>
</html>