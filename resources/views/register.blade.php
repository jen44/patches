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
    <section class="front" id="registerpage">
            <div id='registerbox'>
               <h1>One of us!</h1>
               <p>Just a few more things...</p>
                {!! Form::open(['url' => 'register', 'class' => 'form']) !!}
                    {{form::label('username', 'Username')}}
                    {{form::text('username')}}
                    
                    {{form::label('name', 'Name')}}
                    {{form::text('name')}}
                    
                    {{form::label('email', 'Email')}}
                    {{form::text('email')}}
                    
                    {{form::label('password', 'Password')}}
                    {{form::password('password')}}
                    
                    
                    {{form::label('password_confirmation', 'Confirm Password')}}
                    {{form::password('password_confirmation')}}
                    
                    {{form::submit('Register')}}
                {!! Form::close() !!}<br>
                
                <p>Already done this before? Login <a href="login">here</a>!</p>
        </div>
            
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>