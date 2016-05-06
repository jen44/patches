@extends('nonav')

@section('content')

<section class="front" id="loginpage">

   <div class="container">
        
        <div class="inputbox">
               {!! Form::open(['url' => 'login']) !!}
                {{form::text('username', null, ['required' => 'required', 'placeholder' => 'Username'])}}
                {{form::password('password', ['required' => 'required', 'placeholder' => 'Password'])}}
                
            <br>
               
                {{form::submit('Login')}}
             {!! Form::close() !!}
             
             <br>
             
             <p><em>Or</em> Join us <a href="register">here</a>!</p>
        </div>

   </div>

</section>


@stop