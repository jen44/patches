$(function(){
    /* Refresh lands at scroll top */
    $(this).scrollTop(0);
    
    
    /* Scroll animations */

    $(document).scroll(function() {

        $('.headingtext').css('opacity', function() {
            return 1 - ($(window).scrollTop() / 350);
        });

      var dHeight = $(window).height();
        
      if (dHeight >= $(this).scrollTop()) {
          
        $('.navbar').css('background', 'rgba(216, 151, 58,' + $(this).scrollTop() / dHeight + ')');
          
      }
        
    });
    
    
    /* Main menu hamburger */

    $('.hamburger').on("click", function() {
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
        
        if($('.modal').hasClass('fadeIn')){
            
            $('.modal').removeClass('fadeIn');
            $('.btn').removeClass('active-btn');
        }
        
//        if($('.userdeetsPop').hasClass('fadeIn')){
//            
//            $('.userdeetsPop').removeClass('fadeIn');
//        }
        
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
            
            $('.userdeetsPop').removeClass('fadeIn');
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
| Admin Dashboard: User details pop up
|--------------------------------------------------------------------------
|
*/   $('.faces>img').on('click', function(e){
        
        if($('.userdeetsPop').hasClass('fadeIn') == false){
            
            
            $('.userdeetsPop').addClass('fadeIn');
            $('.modal').removeClass('fadeIn');
            $('.slideout').removeClass('open');
			$('#settings-btn').removeClass('active-btn');
			$('#profile-btn').removeClass('active-btn');
			$('#info-btn').removeClass('active-btn');
			$('#myboards-btn').removeClass('active-btn');
            
            
        } else {
            
            $('.userdeetsPop').removeClass('fadeIn');
        
        }
    
        var userid = $(this).attr('data-id');
        var username = $("ul").find("[data-name='user-username']");
        var name = $("ul").find("[data-name='user-name']");
        var email = $("ul").find("[data-name='user-email']");
    
        
    
    
        
        
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
        
        var board_id = $('#boardid').html();
        
        var url = $('#public').html() + '/board/' + board_id + '/update/background';
        
        var data =  { background: newbg,
                      _token: $('#token').html(),
                      _method: 'PUT'

                    };
     
        $.post(url, data,function(res){
                
        }); 

        
        
        
        
    });
           
    
    
    /* Background Dropzone */
    
//    
//    var board_id = $("#boardid").html();
//    
//    if($('#settings')){
//        
//        
//        $('div#dropzonebox').find('i').dropzone({ 
//            url: $("#public").html() + "/board/" + board_id + "/upload/background",
//            filename: 'file',
//            sending:function(file, xhr, formData){
//                console.log(file);
//                formData.append("_token", $('#token').html());
//            }
//            });
//
//    } else {
//        
//        
//    };
    
    
    /* Board name and description edit */
    
    var nameVal;
    $('#settings').on('click', 'i#boardnameEdit', function(e){
        
            var p = $('#boardnameTarget');
            e.stopPropagation();
            nameVal = $(p).text();
            $(p).text('');

            $('<textarea class="editInput" style="font-size: 1em;">').val(nameVal).appendTo(p).focus();
        
            if(!$(this).next().is('i')){
                
                 $('<i id="crossName"class="fa fa-times" aria-hidden="true" style="font-size: 0.8em; color: #dc483c;">').insertAfter(this);
                
            }
           
        
    }); 
    
    
    /* onclick X */
    
    
    $('#settings').on('click', 'i#crossName', function(e){
        
        var cross = $(this);
        var pencil = $(this).parent();
        var p = $('#boardnameTarget');
        var input = $('#boardnameTarget > textarea');
        var newVal = input.val();
        var boardid = $('#boardid').html();
        var url = $('#public').html() + '/board/' + boardid + '/update';

        if(newVal == false){


            p.text(nameVal);
            cross.remove();
            input.remove();


        } else {

            p.text(newVal);


             var data = {
                            name: newVal,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };


            $.post(url, data, function(res){

            });


            input.remove();
            cross.remove();

            } 

        });
    
    
    
   
    var desVal;
    $('#settings').one('click', 'i#boarddesEdit', function(e){
        
        var p = $('#boarddesTarget');
        e.stopPropagation();
        desVal = $(p).text();
        $(p).text('');
        
        $('<textarea class="editInput" style="font-size: 1em;">').val(desVal).appendTo(p).focus();
        $('<i id="crossDes"class="fa fa-times" aria-hidden="true" style="font-size: 0.8em; color: #dc483c;">').insertAfter(this);
        
    }); 
    
    
    /* onclick cross */
    
    
    $('#settings').on('click', 'i#crossDes', function(e){
        
        var cross = $(this);
        var pencil = $(this).parent();
        var p = $('#boarddesTarget');
        var input = $('#boarddesTarget > textarea');
        var newVal = input.val();
        var boardid = $('#boardid').html();
        var url = $('#public').html() + '/board/' + boardid + '/update';

        if(newVal == false){


            p.text(desVal);
            input.remove();
            cross.remove();


        } else {

            p.text(newVal);


             var data = {
                            description: newVal,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };


            $.post(url, data, function(res){

            });


            input.remove();
            cross.remove();

            } 

        });
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| Profile : 
|--------------------------------------------------------------------------
|
*/
        
    
    
    
    
    
    /* Avatar Upload */
    
    if($('.avatar-upload')){
        
        
    
    var user_id = $('.avatar-upload').attr('data-id'); 
        
        new AvatarUpload({
            el: document.querySelector('.avatar-upload'),
            uploadUrl: $("#public").html()+'/user/avatar/' + user_id,
            uploadData :{_token : $('#token').html()}
            
        });
    }
    
    
    
    /* profile edit altogether */
   
    var oriVal;
    $('.details').on('click', 'i.edit', function(e){
//        console.log();
        if($(this).next().is('p')){
                
            var p = $(this).next();
            e.stopPropagation();
            oriVal = $(p).text();
            $(p).text('');

            $('<textarea class="editInput" style="font-size: 1em;">').val(oriVal).appendTo(p).focus();
            $('<i class="fa fa-times cross" aria-hidden="true" style="font-size: 0.8em; color: #dc483c;">').insertAfter(this);
                
        }
        
    }); 
    
    
    /* onclick cross */
    
    
    $('.details').on('click', 'i.cross', function(e){
        var cross = $(this);
        var pencil = $(this).prev();
        var p = pencil.next().next();
        var input = p.find('textarea');
        var newVal = input.val();
        var userid = $('#userid').html();
        var url = $('#public').html() + '/user/' + userid + '/update';
        var h2 = pencil.prev();
        
        if(newVal == false){


            p.text(oriVal);
            input.remove();
            cross.remove();


        } else {

            p.text(newVal);
            var data;
            
            if(h2.text() == "Username"){
                data = {
                            username: newVal,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };

                
            }

            if(h2.text() == "Name"){
                data = {
                            name: newVal,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };

                
            }
            
            if(h2.text() == "Email"){
                data = {
                            email: newVal,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };

                
            }
            
            
////            
//            console.log(data);

            $.post(url, data, function(res){
            });


            input.remove();
            cross.remove();

        } 

    });
    
    
    
    
    
    
    
    
    
    
    
/*
|--------------------------------------------------------------------------
| All Notes
|--------------------------------------------------------------------------
|
*/
    

    /////////////* Create note on double click *////////////////
    
    
    $('#board').on('dblclick',function(e){
        
         if (e.target !== this){
            return; 
         }
        
        
        var page_x = e.pageX;
        var page_y = e.pageY;
        var user_id = $('#userid').html();
        var username = $('#username').html();
        var board_id = $('#boardid').html();
        var ele = '<div class="note noselect" style="position: absolute; top:' + page_y + 'px; left: ' + page_x + 'px;" data-id=""><h2 class="noteTitle">New note</h2><h3>Post by '+ username + '</h3><p class="noteContent">New note content</p></div>';

//        $('.draggables').append(ele);
        
        
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
        
        
        $.post(url, data, function(id){
            
             var ele = '<div class="note noselect" style="position: absolute; top:' + page_y + 'px; left: ' + page_x + 'px;" data-id="'+id+'"><h2 class="noteTitle">New note</h2><h3>Post by '+ username + '</h3><p class="noteContent">New note content</p></div>';

            $(ele).draggable({
            
                  containment: "#board",
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

                        var url = $('#public').html() + '/notes/' + $(this).data('id') + '/update/position';

                        var data =  { pos_x: pos_x, 
                                    pos_y: pos_y,
                                    _token: $('#token').html(),
                                    _method: 'PUT'

                                  };
                        $.post( url, data,function(res){

                        }); 

                    },
                
                }).appendTo('.draggables');
            
               

        });
        
        
        
    }); //End of board double click make note function
    
    
    
    
    
    
    
   /////* Note Draggable  save position and add class on drag start*///////
    
    
    
    
    

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

                var url = $('#public').html() + '/notes/' + $(this).data('id') + '/update/position';
                var data =  { pos_x: pos_x, 
                            pos_y: pos_y,
                            _token: $('#token').html(),
                            _method: 'PUT'

                          };
                $.post( url, data,function(res){

                }); 


        }


    });
    

    
    
    
    

    
    ///////////////* Note double click h2 to edit *///////////////
    
    
    
    
    
    

        var originalVal;
    $('.draggables').on('dblclick', 'h2', function(e){
        
        e.stopPropagation();
        originalVal = $(this).text();
        $(this).text('');
        
        $('<textarea class="noteEdit">').val(originalVal).appendTo(this).focus();
        
        
    });
    
    
    
    /* On Enter */
    
    
    $('.draggables').on('keypress', 'h2 > textarea', function(e){
        
        if(e.which == 13) {
            // enter pressed
            
            e.stopPropagation();
            var note = $(this).parent().parent();
            var ele = $(this);
            var h2 = ele.parent();

            var newTitle = ele.val();

            var url = $('#public').html() + '/notes/' + note.attr('data-id') + '/update';

            if(ele.val() == false){
            

                h2.text(originalVal);
                ele.remove();


            } else {

                h2.text(newTitle);


                 var data = {
                                title: newTitle,
                                _token: $('#token').html(),
                                _method: 'PUT'
                           };


                $.post(url, data, function(res){

                });


                ele.remove();

            } 
            
        }
       
        
    });
    
    
    
    /* On focusout */
    
    $('.draggables').on('focusout', 'h2 > textarea', function(){
        
        
        var note = $(this).parent().parent();
        var ele = $(this);
        var h2 = ele.parent();
        var newTitle = ele.val();
        var url = $('#public').html() + '/notes/' + note.attr('data-id') + '/update';
        
        if(ele.val() == false){
            
            
            h2.text(originalVal);
            ele.remove();
            
            
        } else {
            
            h2.text(newTitle);
        
        
             var data = {
                            title: newTitle,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };


            $.post(url, data, function(res){

            });


            ele.remove();
            
        }
        
    });
    
    
    
    
    
    
    
    

    
    ///////////////* Note double click p to edit *///////////////
    
    
    
    
    var pOriginalVal;
    $('.draggables').on('dblclick', 'p', function(e){
        
        e.stopPropagation();
        pOriginalVal = $(this).text();
        $(this).text('');
        
        $('<textarea class="noteEdit">').val(pOriginalVal).appendTo(this).focus();
        
        
    });
    
    
    
    /* On Enter */
    
    
    $('.draggables').on('keypress', 'p > textarea', function(e){
        
        if(e.which == 13) {
            // enter pressed
            
            e.stopPropagation();
            var note = $(this).parent().parent();
            var ele = $(this);
            var p = ele.parent();

            var newContent = ele.val();

            var url = $('#public').html() + '/notes/' + note.attr('data-id') + '/update';
            
            if(ele.val() == false){
            

                p.text(pOriginalVal);
                ele.remove();


            } else {

               p.text(newContent);

                var data = {
                                content: newContent,
                                _token: $('#token').html(),
                                _method: 'PUT'
                           };


                $.post(url, data, function(res){

                });


                ele.remove(); 

            }    
        }

    });
    
    
    
    /* On focusout */
    
    $('.draggables').on('focusout', 'p > textarea', function(){
        
        
        var note = $(this).parent().parent();
        var ele = $(this);
        var p = ele.parent();
        var newContent = ele.val();
        var url = $('#public').html() + '/notes/' + note.attr('data-id') + '/update';
        
        if(ele.val() == false){
            

            p.text(pOriginalVal);
            ele.remove();


        } else {

           p.text(newContent);

            var data = {
                            content: newContent,
                            _token: $('#token').html(),
                            _method: 'PUT'
                       };


            $.post(url, data, function(res){

            });


            ele.remove(); 

        }    
        
        
    });
    
    
    
    
    
     
    //////////////////////* Trash can : Delete note *//////////////////////
    
    
    
    
    $('#trash').find('.container').droppable({
        tolerance: "touch",
        hoverClass: "droppableActive",
        drop: function(e,ui){
            var url = $('#public').html() + '/notes/' + $(ui.draggable).data('id') + '/delete';
            
            
            var data =  { _token: $('#token').html(),
                         _method: 'DELETE',

                          };
            
            $.get(url, data,function(res){
                
            }); 
            
            
            ui.draggable.remove();
        }
        
    });
        
    
});


