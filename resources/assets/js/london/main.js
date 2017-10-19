
$(document).ready(function(){

	var parallaxElements = $('.prllx'),
    parallaxQuantity = parallaxElements.length;

$(window).on('scroll', function () {

  window.requestAnimationFrame(function () {

    for (var i = 0; i < parallaxQuantity; i++) {
      var currentElement = parallaxElements.eq(i);
      var scrolled = $(window).scrollTop();

      currentElement.css({
        'transform': 'translate3d(0,' + scrolled * -0.15 + 'px, 0)'
      });
    }
  });

});


	(function () {
		var scroll = $(window).scrollTop();

    	if (scroll >= 100) {
        	$(".hamb-wrp").addClass("black");
        	$("#header-menu").addClass("black");
    	} else {
        	$(".hamb-wrp").removeClass("black");
        	$("#header-menu").removeClass("black");
    	}
	})();

	(function () {
		$('#hamburger').on('click', function() { // ICON CLICK

			if(!$(this).hasClass("active")){
			
				window.scrollTo(0,0);
				$(this).addClass("active");
				$('.hamb-wrp').addClass("vanish");
				$('#header-menu').addClass("show");
				$('section#header-menu').removeClass("fixed");
			
			}else{

				$(this).removeClass("active");
				$('.hamb-wrp').removeClass("vanish");

    			$('#header-menu').removeClass("show");

    			$('section#header-menu').addClass("fixed");
			}

			$('.bar').toggleClass('animate');
		
		}) // ICON CLICK END
	})(); // FUNC END


	//COUNTER

	var clock = $('.your-clock').FlipClock(3600 * 24 * 3, {
		clockFace: 'DailyCounter',
		countdown: true
	});


	//SPONSORS

	(function () {
		$.fn.visible = function(partial) {
    
		    var $t            = $(this),
		        $w            = $(window),
		        viewTop       = $w.scrollTop(),
		        viewBottom    = viewTop + $w.height(),
		        _top          = $t.offset().top,
		        _bottom       = _top + $t.height(),
		        compareTop    = partial === true ? _bottom : _top,
		        compareBottom = partial === true ? _top : _bottom;
	    
	    	return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  		};
	})();

	var win = $(window);

	var allMods = $(".sponsor");
	var allanimRight = $(".content-wrap");
	var allanimTop = $(".wrp");

	allMods.each(function(i, el) {
	  var el = $(el);
	  if (el.visible(true)) {
	    el.addClass("visible"); 
	  } 
	});

	win.scroll(function(event) {
	  
	  allanimRight.each(function(i, animRight) {
	    var animRight = $(animRight);
	    if (animRight.visible(true)) {
	      animRight.addClass("animated fadeInRight"); 
	    }else{
	    	animRight.removeClass("animated fadeInRight");
	    } 
	  });
  
	});

	win.scroll(function(event) {
	  
	  allanimTop.each(function(i, allanimTop) {
	    var allanimTop = $(allanimTop);
	    if (allanimTop.visible(true)) {
	      allanimTop.addClass("animated fadeInTop"); 
	    }else{
	    	allanimTop.removeClass("animated fadeInTop");
	    } 
	  });
  
	});

	win.scroll(function(event) {
	  
	  allMods.each(function(i, el) {
	    var el = $(el);
	    if (el.visible(true)) {
	      el.addClass("come-in"); 
	    } 
	  });
  
	}); //SPONSORS END



	//MAINSPONSORS EFFECT

	var mainsponsors = $(".mainsponsors-wrap > div");

	mainsponsors.each(function(i) {
	  var el = $(this);
	  setTimeout(
		function() {
			el.addClass("visible");
		}, i*500); 
	});


	//MENU

	var viewportWidth = $(window).width();
    	if (viewportWidth < 1100) {
            $(".more > a").click(function(event){
				if(!$(this).parent().hasClass("showmob")){
				$(this).parent().addClass("showmob");
				$(this).parent().siblings().removeClass("showmob");
			}else{
				$(this).parent().removeClass("showmob");
			}
			event.preventDefault();
			});
    	}

	$(window).resize(function () {
    	var viewportWidth = $(window).width();
    	if (viewportWidth < 1100) {
            $(".more > a").click(function(event){
				if(!$(this).parent().hasClass("showmob")){
				$(this).parent().addClass("showmob");
				$(this).parent().siblings().removeClass("showmob");
			}else{
				$(this).parent().removeClass("showmob");
			}
			event.preventDefault();
			});
    	}
    });



	$(".more").mouseover(function(){
		$("#header-menu").addClass("black");
	});
	$(".dropdownbox").mouseleave(function(){
		if ($(window).scrollTop() == 0) {
			$("#header-menu").removeClass("black");
		}
	});

	$(".more > a").mouseover(function(){
		$(".first-ul li").each(function(){
			$(this).show();
			$(this).find(".second-ul").removeClass("visib");
		});
	});

	$(".second-ul").mouseleave(function(){
		$(".first-ul li").each(function(){
			$(this).show();
			$(this).find(".second-ul").removeClass("visib");
		});
	});

	


	//SCROLLING BAR

	$(window).scroll(function() {    
    	var scroll = $(window).scrollTop();

    	if (scroll >= 100) {
        	$(".hamb-wrp").addClass("black");
        	$("#header-menu").addClass("black");
    	} else {
        	$(".hamb-wrp").removeClass("black");
        	$("#header-menu").removeClass("black");
    	}
	});

	$(window).resize(function () {
		$(window).trigger('resize.px.parallax');
    	var viewportWidth = $(window).width();
    	if (viewportWidth > 1100) {
            $('#header-menu').removeClass("show");
            $('#hamburger').removeClass("active");
            $('.bar').removeClass('animate');
            $('.more').removeClass("showmob");
    	}
	});


	//PARALLAX

	$('#keynote').parallax({
		imageSrc: '../../gfx/london/arianna-bg.jpg',
		speed: '0.8'
	});
	$('#keynote-2').parallax({
		imageSrc: '../../gfx/london/speakers-bg2.jpg',
		speed: '0.8'
	});
	$('#expo').parallax({
		imageSrc: '../../gfx/london/expo-bg.jpg',
		speed: '0.8'
	});
	$('#clients').parallax({
		imageSrc: '../../gfx/london/clients-bg.jpg',
		speed: '0.8',
	});
	$('#testimonial').parallax({
		imageSrc: '../../gfx/london/testimonial-bg.jpg',
		speed: '0.8',
	});
	$('#show-bg').parallax({
		imageSrc: '../../gfx/london/show-bg.jpg',
		speed: '0.8'
	});
	$('#team-bg').parallax({
		imageSrc: '../../gfx/london/team-bg.jpg',
		speed: '0.8'
	});
	$('#team2-bg').parallax({
		imageSrc: '../../gfx/london/team2-bg.jpg',
		speed: '0.8'
	});
	

}); // READY END