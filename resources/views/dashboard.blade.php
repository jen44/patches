@extends('nonav')

@section('content')


<section class="main" id="dashboard">
    <div class="container">
       
        @foreach(Auth::User()->boards as $board)

           <div class="boardslink">
                <a href="../board/{{$board->id}}">{{$board->name}}</a>
                <p>{{$board->description}}</p>
            </div>

        @endforeach    
        
    </div>
</section>


@stop