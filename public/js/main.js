$(function(){
    
    
    /* Main menu hamburger */

    $('.hamburger-icon').on("click", function() {
        var el = $(".hamburger-layer");
        var menu = $('.dropdown');

        
        if(el.hasClass("hamburger-to-cross") ) {
            el.removeClass("hamburger-to-cross");
            el.addClass("hamburger-from-cross");
            menu.removeClass('showNav');

        } else {

            el.removeClass("hamburger-from-cross");
            el.addClass("hamburger-to-cross");
            menu.addClass('showNav');
        }
        
        
    /* Toggle with hitting of ESC */
        
        $(document).keyup(function(e) {
            if(e.keyCode == 27) {
                menu.removeClass('showNav');
                el.addClass("hamburger-from-cross");
                el.removeClass("hamburger-to-cross");
            }
        });
    
        
    });

    
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| All Slide outs
|--------------------------------------------------------------------------
|
*/
    
    
    /* My Boards slide out*/
   
    $('#myboards-btn').on('click',function(){

		if($('#myboards').hasClass('open') == false){
			//open slider
            
            if($('#settings').hasClass('open')){
                
                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');
            
            }
            
            if($('#profile').hasClass('open')){
                
                $('#profile-btn').removeClass('active-btn');
                $('#profile').removeClass('open');
            
            }
            
            if($('#info').hasClass('open')){
                
                $('#info-btn').removeClass('active-btn');
                $('#info').removeClass('open');
            
            }

            if($('.modal').hasClass('fadeIn')){


                $('.modal').removeClass('fadeIn');
                $('#newboard-btn').removeClass('active-btn');

            }
            
            $('#myboards-btn').addClass('active-btn');
			$('#myboards').addClass('open');
			
    
		}else{
            
			//close slider
            $('#myboards-btn').removeClass('active-btn');
			$('#myboards').removeClass('open');

		}
        
	});
    
    /* Board info slide out*/
   
    $('#info-btn').on('click',function(){

		if($('#info').hasClass('open') == false){
			//open slider
            
            if($('#settings').hasClass('open')){
                
                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');
            
            }
            
            if($('#myboards').hasClass('open')){
                
                $('#myboards-btn').removeClass('active-btn');
                $('#myboards').removeClass('open');
            
            }
            
            if($('#profile').hasClass('open')){
                
                $('#profile-btn').removeClass('active-btn');
                $('#profile').removeClass('open');
            
            }
            
            if($('.modal').hasClass('fadeIn')){


                $('.modal').removeClass('fadeIn');
                $('#newboard-btn').removeClass('active-btn');

            }
            
            $('#info-btn').addClass('active-btn');
			$('#info').addClass('open');
			
    
		}else{
            
			//close slider
            $('#info-btn').removeClass('active-btn');
			$('#info').removeClass('open');

		}
        
	});
    
    
    
    /* Settings slide out*/
    
     $('#settings-btn').on('click',function(){
    
    
        if($('#settings').hasClass('open') == false){
                //open slider

                if($('#profile').hasClass('open')){

                    $('#profile-btn').removeClass('active-btn');
                    $('#profile').removeClass('open');

                }

                if($('#myboards').hasClass('open')){

                    $('#myboards-btn').removeClass('active-btn');
                    $('#myboards').removeClass('open');

                }

                if($('#info').hasClass('open')){

                    $('#info-btn').removeClass('active-btn');
                    $('#info').removeClass('open');

                }
            
                if($('.modal').hasClass('fadeIn')){


                    $('.modal').removeClass('fadeIn');
                    $('#newboard-btn').removeClass('active-btn');

                }

                $('#settings-btn').addClass('active-btn');
                $('#settings').addClass('open');
            
            

            }else{

                //close slider
                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');

            }
     });
    
    /* Profile Slide out */
    
    $('#profile-btn').on('click',function(){

		
        if($('#profile').hasClass('open') == false){
                //open slider

            if($('#settings').hasClass('open')){

                $('#settings-btn').removeClass('active-btn');
                $('#settings').removeClass('open');

            }

            if($('#info').hasClass('open')){

                $('#info-btn').removeClass('active-btn');
                $('#info').removeClass('open');

            }
            
            if($('#myboards').hasClass('open')){
                
                $('#myboards-btn').removeClass('active-btn');
                $('#myboards').removeClass('open');
            
            }

            $('#profile-btn').addClass('active-btn');
            $('#profile').addClass('open');
            
            if($('.modal').hasClass('fadeIn')){
                
            
                $('.modal').removeClass('fadeIn');
                $('#newboard-btn').removeClass('active-btn');
        
            }


        }else{

            //close slider
            $('#profile-btn').removeClass('active-btn');
            $('#profile').removeClass('open');

        }

	});
    
    
    /* Close all slides on board click */
    
    $('#board').on('click', function(){
        
        if($('.slideout').hasClass('open')){
            $('.slideout').removeClass('open');
            $('.btn').removeClass('active-btn');
        }
        
        if($('.modal').hasClass('fadeIn')){
            
            $('.modal').removeClass('fadeIn');
            $('.btn').removeClass('active-btn');
        }
        
    });
    
    $('#dashboard').on('click', function(){
        
        if($('.slideout').hasClass('open')){
            $('.slideout').removeClass('open');
            $('.btn').removeClass('active-btn');
        }
        
        if($('.modal').hasClass('fadeIn')){
            
            $('.modal').removeClass('fadeIn');
            $('.btn').removeClass('active-btn');
        }
        
    });
    
/*
|--------------------------------------------------------------------------
| New board: New board form slide down
|--------------------------------------------------------------------------
|
*/
    
    
    $('#newboard-btn').on('click', function(){
        
        if($('.modal').hasClass('fadeIn') == false){
            
			$('#newboard-btn').addClass('active-btn');
            $('.modal').addClass('fadeIn');
            $('.slideout').removeClass('open');
			$('#settings-btn').removeClass('active-btn');
			$('#profile-btn').removeClass('active-btn');
			$('#info-btn').removeClass('active-btn');
			$('#myboards-btn').removeClass('active-btn');
            
            
        } else {
            
            $('.modal').removeClass('fadeIn');
			$('#newboard-btn').removeClass('active-btn');
        
        }
        
        
    });
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| Settings: Background toggle
|--------------------------------------------------------------------------
|
*/
    
    /* Background option toggle current */
    
    $('.bgoptions img').on('click', function(){
        
        
        if($(this).hasClass('bgcurrent') == false){
            
            $(this).addClass('bgcurrent').siblings('img').removeClass('bgcurrent');
            
            
        } else {
            
             $(this).removeClass('bgcurrent');
            
        }
        
        
        
    
        
    
    /* Background image toggle */
        
        
        $('#board').css('background-image','url('+$(this).attr('src')+')');
        
        var newbg = $(this).attr('data-file');
        
        var board_id = $('#board').attr('data-id');
        
        var url = $('#public').html() + '/board/' + board_id;
        
        var data =  { background: newbg,
                      _token: $('#token').html(),
                      _method: 'PUT'

                    };
     
        $.post(url, data,function(res){

        }); 

        
        
        
        
    });
           
    
    
    /* Background Dropzone */
    
    
    var board_id = $("#dropzonebox").attr('data-id');
    
    $("#dropzonebox").dropzone({url: $("#public").html() + "/board/" + board_id + "/bg", _token: $('#token').html()} );
    
    

    /* Avatar Upload */
    
   var user_id = $('.avatar-upload').attr('data-id'); 
        
        new AvatarUpload({
            el: document.querySelector('.avatar-upload'),
            uploadUrl: $("#public").html()+'/user/avatar/' + user_id,
            uploadData :{_token : $('#token').html()}
            
        });
    
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| All Notes
|--------------------------------------------------------------------------
|
*/
    
    

    /* Create note on double click */
    
    
    $('#board').on('dblclick',function(e){
        
         if (e.target !== this){
            return; 
         }
        
        
        var page_x = e.pageX;
        var page_y = e.pageY;
        var user_id = $('#userid').html();
        var username = $('#username').html();
        var board_id = $('#boardid').html();
        var ele = '<div class="note" style="position: absolute; top:' + page_y + 'px; left: ' + page_x + 'px;"><h2 class="noteTitle">New note</h2><h3>Post by '+ username + '</h3><p class="noteContent">New note content</p></div>';

        $('.draggables').append(ele);
        
        
        var noteTitle = $(ele).find('.noteTitle').html();
        var noteContent = $(ele).find('.noteContent').html();
        
        
        var url = $('#public').html() + '/notes/create';
        var data = {
                        user_id: user_id,
                        title: noteTitle,
                        content: noteContent,
                        pos_x: page_x,
                        pos_y: page_y,
                        board_id: board_id,
                        _token: $('#token').html(),
                        _method: 'POST'
                   };
        
//        console.log(data);
        
        $.post(url, data, function(res){
            
        });
        
        
        
        $('.note').draggable({
            
          containment: "#board",
          helper: "original",
            start: function(event, ui){
                $(this).addClass("draggable-helper");
                $('#trash').addClass('hover');

            },

            stop: function(event, ui){

                $(this).removeClass("draggable-helper");
                
                $('#trash').removeClass('hover');

            }
            
            
        }); //End of note draggable
        
        
    }); //End of board double click make note function
    
    
    
    /* Note Draggable and add class on drag start*/

    $(".note").draggable(
        { containment: "#board",
          helper: "original",
            start: function(event, ui){
                $(this).addClass("draggable-helper");
                $('#trash').addClass('hover');

            },

            stop: function(event, ui){

                $(this).removeClass("draggable-helper");
                
                $('#trash').removeClass('hover');

                var pos_x = ui.offset.left;
                var pos_y = ui.offset.top;

                var url = $('#public').html() + '/notes/' + $(this).data('id');

                var data =  { pos_x: pos_x, 
                            pos_y: pos_y,
                            _token: $('#token').html(),
                            _method: 'PUT'

                          };
                $.post( url, data,function(res){

                }); 


        }


    });
    


    
    /* Note click to edit */
    
//    $('.note').find('h2').on('dblclick', function(e){});
    
    
    
    
    
    
    
     
    /* Trash can : Delete note */
    
    $('#trash').find('.container').droppable({
        tolerance: "touch",
        hoverClass: "droppableActive",
        drop: function(e,ui){
            var url = $('#public').html() + '/notes/' + $(ui.draggable).data('id') + '/delete';
            
            
            var data =  {   _token: $('#token').html(),
                         _method: 'DELETE',

                          };
            
            $.get(url, data,function(res){
                console.log(res);
            }); 

            
            ui.draggable.remove();
        }
        
    });
        
    
});


