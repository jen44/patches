@extends('nonav')

@section('content')

    <section class="front" id="registerpage">
           
           
                <a href="{{url('/')}}" class="welcomelogo noselect">Note.</a>
           
            <div id='registerbox' class="inputbox">
                {!! Form::open(['url' => 'register']) !!}
                    {{form::text('username', null, ['placeholder' => 'Username'])}}
                    
                    {{form::text('name', null, ['placeholder' => 'Name'])}}
                    
                    {{form::text('email', null, ['placeholder' => 'example@email.com'])}}
                    
                    {{form::password('password', ['placeholder' => 'Password'])}}
                    
                    {{form::password('password_confirmation', ['placeholder' => 'Confirm password'])}}
                    
                    <br>
                    
                    {{form::submit('Register')}}
                    
                {!! Form::close() !!}<br>
                
                <p>Already done this before? Login <a href="login">here</a>!</p>
        </div>
            
    </section>
    
@stop