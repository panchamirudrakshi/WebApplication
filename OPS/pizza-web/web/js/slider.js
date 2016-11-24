/*function setSlide(str){
		alert(str);

	}

*/

$(document).ready(function(){
	// Set options
	var speed = 300; // Fade speed
	var autoswitch = true; // Auto slider options
	var autoswitch_speed = 6000; // Auto slider speed

	// Add initial active class
	$('.slide').first().addClass('active');

	// Hide all slides
	$('.slide').hide();

	// Show first slide
	$('.active').show();

	// Next Handler
	$('#next').on('click', nextSlide);
	
	// Prev Handler
	$('#prev').on('click', prevSlide);

	$('button').on('click', setPage);


     

	// Auto Slider Handler
	if(autoswitch == true){
		setInterval (nextSlide,autoswitch_speed);

	}

	function setPage(){
    //alert('hii');
    var ID = $(this).attr('id');
    //alert($(this).attr('id'));
    $('.active').removeClass('active');
    $("div.slide:nth-of-type("+ID+")").addClass('active');
    $('.slide').fadeOut(speed);
	$('.active').fadeIn(speed);
	/*
	if(autoswitch == true){
		setInterval (nextSlide,autoswitch_speed);

	}
	*/
    

    }

   
 	// Switch to the next slide

	function nextSlide(){
		$('.active').removeClass('active').addClass('oldActive');
		if($('.oldActive').is(':last-child')){
			$('.slide').first().addClass('active');
		} else {
			$('.oldActive').next().addClass('active');
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed);
	    $('.active').fadeIn(speed);

	}
	// Switch to prev slide
	function prevSlide(){
		$('.active').removeClass('active').addClass('oldActive');
		if($('.oldActive').is(':first-child')){
			$('.slide').last().addClass('active');
		} else {
			$('.oldActive').prev().addClass('active');
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed);
		$('.active').fadeIn(speed);

	}

	

});