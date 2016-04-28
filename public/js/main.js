$(function(){

    //Side Nav slide out
    
    
	var isOpen = false;

	$('#settings-btn').on('click',function(){

		if(isOpen == false){
			//open slider
            
            $('#settings-btn').addClass('new');
			$('#settings').addClass('open');
//            console.log('blah');
//			$('#settings').one('transitionend', function(){
//                console.log('blah');
//				$('#settings-btn').addClass('new');
//			});						
			
    
            
			isOpen = true;

		}else{
			//close slider
            $('#settings-btn').removeClass('new');
			$('#settings').removeClass('open');
//			$('#settings').one('transitionsend',function(){
//                    
//				$('#settings-btn').removeClass('new');
//			});	
			isOpen = false;

		}
        
//	var isOpen = false;
//
//	$('.btn').on('click',function(){
//
//		if(isOpen == false){
//			//open slider
//			$(this).next().addClass('open');
////			$('#settings').one('transitionend',function(){
////
////				$('#settings-btn').removeClass('fa-arrow-circle-right')
////									.addClass('fa-arrow-circle-left');
////			});
//			isOpen = true;
//
//		}else{
//			//close slider
//			$(this).next().removeClass('open');
////			$('header').one('transitionend',function(){
////
////				$('#slide-button>i').removeClass('fa-arrow-circle-left')
////									.addClass('fa-arrow-circle-right');
////			});
//			isOpen = false;
//
//		}
		

	});

	///--------------accordion sliding

	$('#accordion h2').on('click',function(){
		if($(this).data('state') == 'close'){
			//open the P
			$(this).next().addClass('open');

			$(this).next().one('transitionend',function(){

				$(this).prev().find('i')
							.removeClass('fa-caret-down')
			 				.addClass('fa-caret-up');
			});

			$(this).data('state','open') // updating Dom state

		}else{

			//close the P
			$(this).next().removeClass('open');

			$(this).next().one('transitionend',function(){

				$(this).prev().find('i')
							.removeClass('fa-caret-up')
			 				.addClass('fa-caret-down');
			});

			$(this).data('state','close') // updating Dom state
		}
		
	});


});