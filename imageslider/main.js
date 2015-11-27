
$(function(){
	var width = 1400;
	var animationspeed = 500;
	var pause = 2000;
	var currentSlide = 1;

	var $slider = $('#slider');
	var $slideContainer = $slider.find('.slides');
	var $slides = $slideContainer.find('.slide');

	setInterval(function(){
		$slideContainer.animate({'margin-left': '-=' +width}, animationspeed, function(){
			currentSlide++;
			if(currentSlide === $slides.length){
				currentSlide = 1;
				$slideContainer.css('margin-left', 0);
			}
		});
	}, pause);
});