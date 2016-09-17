<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <link rel="stylesheet" type="text/css" href="css/custom.css"> 
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<<<<<<< HEAD
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,500,500i,700,900|Sail" rel="stylesheet"> 
        <link href="css/styleTransfer.css" rel="stylesheet" type="text/css" media="all" />
=======

        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,500,500i,700,900|Sail" rel="stylesheet">
>>>>>>> 1e5b1ad1480a79d95de16efc0ab270417cc90c27

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
                        <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span id="ham-btn" class="glyphicon glyphicon-menu-hamburger" onclick="toggleNav()"></span></a></li>
                        <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span id="notif-btn" class="glyphicon glyphicon-bell popup" onclick="notification()"></span></a></li>
                        <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span id="search-btn" class="glyphicon glyphicon-search" onclick="search()"></span></a></li>
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-0 col-sm-6 col-md-8 col-lg-6"></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
                    <div id="notif" class="notif">
                        COBA
                    </div>
                </div>
            </div>
        </nav>

        <div id="sideNav" class="sidebar" style="opacity:0.9;">
            <a href="#">My Profile</a>
            <a href="#">Dashboard</a>
            <a href="#">Setting</a>
            <a href="#">Logout</a>
        </div>

        <div class="main" style="padding-top:8%; padding-bottom:50px;" onclick="init()">
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
            function init(){
                var notif = document.getElementById('notif');
                var sidebar = document.getElementById('sideNav');
                if(sidebar.style.width=="200px" || notif.style.visibility=="visible"){
                    sidebar.style.width="0px";
                    notif.style.visibility="hidden";
                }
            }
        </script>

        <script>
            function search(){
                var ham = document.getElementById('ham-btn');
                var notif = document.getElementById('notif-btn');
                var src = document.getElementById('search-btn');
            }
        </script>
    </body>
</html>