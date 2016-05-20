@extends('nonav')

@section('content')

<section>
    
    <div class="error-container">
      
      
       <div class="error-content">
            <i class="fa fa-meh-o" aria-hidden="true"></i>
            <p><span>404 Error!</span><br>The page you are looking for does not exist.</p>
            <a href="{{URL::previous()}}">Go back</a>

       </div>
       
       
       
    </div>

    
    
</section>



@stop