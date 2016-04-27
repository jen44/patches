<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
    
<header class="sidenav">
    <nav class="navicons">
        <div class="icons" id="top">
            <i class="fa fa-paper-plane-o" aria-hidden="true" name="home"></i>
            <i class="fa fa-clone" aria-hidden="true" name="My Boards"></i>
            <i class="fa fa-plus-square-o" aria-hidden="true" name="New Board"></i>
            <i class="fa fa-cog" aria-hidden="true" name="Settings"></i>
        </div>
        
        
        <div class="icons" id="bottom">
            <i class="fa fa-user" aria-hidden="true" name="Profile"></i>
            <i class="fa fa-sign-out" aria-hidden="true" name="logout"></i>
        </div>
    </nav>
</header>
    
<section class="slideouts">

    <div id="myboards" class="slideout hidden">
        <h3>My boards</h3>
        <ul>
            <li><a href="">Board 1</a></li>
            <li><a href="">Board 2</a></li>
            <li><a href="">Board 3</a></li>
        </ul>
    </div>

    <div id="settings" class="slideout">
        <h3>Board settings</h3>
        <h4>Description</h4>
        <h4>Background</h4>
        <h4>Leave Board</h4>
    </div>

    <div id="alertout" class="slideout hidden">
        <p>This will take you to a different page. Are you sure?</p>
        <button>Yep!</button>
        <button>Actually, no.</button>
    </div>

</section>
    
    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>