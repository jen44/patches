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

    <section class="front" id="loginpage">
            <div id='loginbox'>
               <h1>Hey, Beautiful!</h1>
                {!! Form::open(['url' => 'login', 'class' => 'form']) !!}
                    {{form::label('username', 'Username')}}
                    {{form::text('username')}}
                    
                    {{form::label('password', 'Password')}}
                    {{form::text('password')}}
                    
                    {{form::submit('Login')}}
                {!! Form::close() !!}<br>
                
                <p>Don't have an account yet? Join us <a href="register">here</a>!</p>
        </div>
            
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>