$(document).ready(function()	{
	
	$(".rslides").responsiveSlides({
		  nav: true,
		  prevText: "<",   // String: Text for the "previous" button
      	  nextText: ">",
      	  pause: true,
      	  timeout: 500000,
      	  auto: false,
      	  pager: true, 
	});


	(function () {
		$('#hamburger .bar-wrp').on('click', function() { // ICON CLICK

			if(!$(this).parent().hasClass("active")){
			
				window.scrollTo(0,0);
				$(this).parent().addClass("active");
				$('body').addClass("hide");
				$('header').addClass("opnd");
				$('.sub-menu').addClass("pnd");
				$('.hamb-wrp').addClass("vanish");
				$('#header-menu').addClass("show");
				$('section#header-menu').removeClass("fixed");
			
			}else{

				$(this).parent().removeClass("active");
				$('body').removeClass("hide");
				$('.hamb-wrp').removeClass("vanish");
				$('header').removeClass("opnd");
				$('.sub-menu').removeClass("pnd");
    			$('#header-menu').removeClass("show");

    			$('section#header-menu').addClass("fixed");
			}

			$('.bar').toggleClass('animate');
		
		}) // ICON CLICK END
	})(); // FUNC END

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

	$(".first-ul > li").click(function(){
		if($(this).find(".subs-ul").hasClass("hvr")){
			$(this).find(".subs-ul").removeClass("hvr");
		}else{
			$(this).find(".subs-ul").addClass("hvr");
		}
    });

    $(".more-a").click(function(e){
    	var viewportWidth = $(window).width();
    	if (viewportWidth < 1200) {
    		if($(this).siblings(".dropdownbox").hasClass("clk")){
				$(this).siblings(".dropdownbox").removeClass("clk");
			}else{
				$(this).siblings(".dropdownbox").addClass("clk");
			}	
    	}
    });


		$(".more").mouseover(function(){
        	$("#desktop-menu").addClass("blck");
        	$("#unleash-logo").addClass("show");
        	$(".dropdownbox").addClass("hvr");
        	$(".sub-menu").addClass("mrg");
    	});

    	$(".more").mouseleave(function(){
    		if($('.dropdownbox').is(':hover') === false) {
    				$(".dropdownbox").removeClass("hvr");
    				$(".sub-menu").removeClass("mrg");
    			}
   
    		if($('.dropdownbox').is(':hover') === false && ($(window).scrollTop() == 0)) {
        			$(".dropdownbox").removeClass("hvr");
    				$("#desktop-menu").removeClass("blck");
            		$("#unleash-logo").removeClass("show");
            }
    		
		});


    $(".dropdownbox").mouseleave(function(){
    	if($('.sub-menu').is(':hover') === false) {
    		$(".dropdownbox").removeClass("hvr");
    		$(".sub-menu").removeClass("mrg");
    	}else{
    		$(".sub-menu").mouseleave(function(){
    			if($('.dropdownbox').is(':hover') === false) {
    				$(".dropdownbox").removeClass("hvr");
    				$(".sub-menu").removeClass("mrg");
    			}
    		});
    	}
    	
        if ($(window).scrollTop() == 0) {
        	$(".dropdownbox").removeClass("hvr");
         	$("#desktop-menu").removeClass("blck");
            $("#unleash-logo").removeClass("show");
        }
    });

	//SCROLLING BAR

	if ($(window).scrollTop()) {
        	$("#unleash-logo").addClass("show");
        	$("#desktop-menu").addClass("blck");
        	$("#hamburger").addClass("blck");
    	} else {
    		$("#unleash-logo").removeClass("show");
        	$("#desktop-menu").removeClass("blck");
        	$("#hamburger").removeClass("blck");
    	}

    if ($(window).scrollTop() >= 850) {
			$(".sub-menu").addClass("fxd");
    	}else{
    		$(".sub-menu").removeClass("fxd");
    	}

	$(window).scroll(function() {    
    	var scroll = $(window).scrollTop();

    	if (scroll >= 100) {
        	$("#unleash-logo").addClass("show");
        	$("#desktop-menu").addClass("blck");
        	$("#hamburger").addClass("blck");
    	} else {
    		$("#hamburger").removeClass("blck");
    		if($('.more').is(':hover') === false) {
        		$("#unleash-logo").removeClass("show");
        		$("#desktop-menu").removeClass("blck");
        	}
    	}

    	if($('#desktop-menu .menu-ul li.more').is(':hover') === false) {

    		if (scroll > $(window).height() - 66) {

				$(".sub-menu").addClass("fxd");
    		}else{
    			$(".sub-menu").removeClass("fxd");
    		}
    	}else{
    		if (scroll > $(window).height() - 400) {

				$(".sub-menu").addClass("fxd");
    		}else{
    			$(".sub-menu").removeClass("fxd");
    		}
    	}

	});

    	
    		$(".prevent").click(function(e){
    			var viewportWidth = $(window).width();
    			if (viewportWidth < 1200) {
    				e.preventDefault();
    			}
    		});

	$(window).resize(function () {
    	var viewportWidth = $(window).width();
    	if (viewportWidth > 1100) {
    		$('body').removeClass("hide");
    		$(".dropdownbox").removeClass("hvr");
    		$(".dropdownbox").removeClass("clk");
            $('#header-menu').removeClass("show");
            $('#hamburger').removeClass("active");
            $('.bar').removeClass('animate');
            $('.more').removeClass("showmob");
            $('header').removeClass("opnd");
				$('.sub-menu').removeClass("pnd");
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
        	$("#unleash-logo").addClass("show");
    	} else {
        	$("#unleash-logo").removeClass("show");
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
	

	// Get the modal
	var modal = document.getElementsByClassName('myModal');

	// Get the button that opens the modal
	var btn = document.getElementsByClassName('book');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	$('.popup').click(function() { 
		let popupName = $(this).data('popupdata');
		$('#'+popupName).css("display", "flex")
	})

	$('.close').click(function() { 
		$('.modal').css("display", "none")
	})

    // Form handle 
    $(document).on("change", "#FullName", function () {
        var c = $(this).val().split(" "), a = "", b = "";
        $.each(c, function (e, d) {
            e == c.length - 1 ? b += d : a += d + " "
        });
        a.slice(0, -1);
        $('[data-field="fname"]').val(a);
        $('[data-field="fname"]').html(a);
        $('[data-field="lname"]').val(b);
        $('[data-field="lname"]').html(b)
    });

    if (window.location.href.indexOf('#ThankYouForEnquiry') != -1) {
			$('#thankyou').css("display", "flex")
    }    

    if (window.location.href.indexOf('#ThankYouForSigningUp') != -1) {
			$('#thankyousign').css("display", "flex")
    }  
	
}); // READY END