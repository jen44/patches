@extends('withnav')

@section('content')


<section class="main" id="board">
      <div class="container">

         
         <div class="draggables">
            
            @foreach($board->notes as $note)
             
              <div class="note">
                 <h2>{{$note->title}}</h2>
                 <h3>Post by {{$note->user->username}}</h3>
                 <p>{{$note->content}}</p>

              </div>
              
            @endforeach
             
         </div><!-- End of draggables -->
          
          
      </div><!-- End of container -->
         
</section><!-- End of main board-->



@stop