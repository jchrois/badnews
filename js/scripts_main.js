(function ($, root, undefined) {
	
	$(function () {
		
		
		init();

		function init() {
			
			/*
			if ($('.projects-inner').length) {
				Draggable.create(".projects-inner",  {
				type:"scrollLeft", 
				throwProps:true, 
				edgeResistance:0.5,
				dragClickables:true,
				});

				$('.projects-inner').css('overflowX', 'visible');
			}
			*/
			

		}



		/* events > -------------------------------------------------- */

		$(window).on('load resize', function() {
			console.log(window.innerHeight);
			$(".fullheight-content").css("height", window.innerHeight);			
		});

		$(window).load(function(){
			$('#preloader').fadeOut('slow',function(){$(this).remove();});
		});



		$(window).on( "scroll", scrollHandler);

		function scrollHandler() {
			
		}


		function onScrollProjectsIn() {
			console.log("Projects seen");
			TweenMax.staggerFrom($(".project-element"), 2, {opacity: 0, backgroundColor: "#ffffff", delay: 0, ease:Power4.easeInOut, force3D:true}, 0.1);

		}

		function onScrollProjectsOut() {
			console.log("Projects unseen");
		}





		$('.overlay-textbox-bnt').click(overlay_textbox_bnt_click);
		
		function overlay_textbox_bnt_click() {
			var box = $(this).parent();
			
			if($(box).hasClass('open')){ 
				//close
				TweenMax.to($(box).find(".overlay-textbox-inner"), 0.5, {className: '-=open', ease: Power3.easeInOut});
				TweenMax.to($(box).find(".overlay-textbox-bnt"), 0.5, {className: '-=open', ease: Power3.easeInOut});
				TweenMax.to($(".overlay-textbox-mobile"), 0.5, {className: '-=open', ease: Power3.easeInOut});
				$(box).removeClass('open');
				console.log("close");

			} else {
				//open
				TweenMax.to($(box).find(".overlay-textbox-inner"), 0.5, {className: '+=open', ease: Power3.easeInOut});
				TweenMax.to($(box).find(".overlay-textbox-bnt"), 0.5, {className: '+=open', ease: Power3.easeInOut});
				TweenMax.to($(".overlay-textbox-mobile"), 0.5, {className: '+=open', ease: Power3.easeInOut});
				$(box).addClass('open');
				console.log("open");
			}

		}



		$('.nav-bnt').click(nav_open);

		function nav_open() {
			var nav = $(this).parent();
			
			if($(nav).hasClass('open')) {
				//open
				TweenMax.to($(nav).find(".nav-inner"), 0.5, {className: '-=open', ease: Power3.easeInOut});
				$(nav).removeClass('open');

			} else {
				//close
				TweenMax.to($(nav).find(".nav-inner"), 0.5, {className: '+=open', ease: Power3.easeInOut});
				$(nav).addClass('open');

			}

		}




		/* SINGLE PROJECT */

		$('.headerbox-bnt').click(headerbox_bnt_click);
		
		function headerbox_bnt_click() {

			var box = $(".single-project-headerbox");
			
			if($(box).hasClass('open')){ 
				//close
				TweenMax.to($(box), 0.5, {className: '-=open', ease: Power3.easeInOut});
				//$(box).removeClass('open');
				console.log("close");

			} else {
				//open
				TweenMax.to($(box), 0.5, {className: '+=open', ease: Power3.easeInOut});
				//$(box).addClass('open');
				console.log("open");
			}

		}







		/* events < -------------------------------------------------- */









		/* Introduction block  ---------------------------------------------------------- */


		startTime();

		function startTime() {
		    var today=new Date();
		    var h=today.getHours();
		    var m=today.getMinutes();
		    var s=today.getSeconds();
		    h = checkTime(h);
		    m = checkTime(m);
		    s = checkTime(s);
		    $('.detail-txt-04').html(h+" : "+m+" : "+s);

		    var t = setTimeout(function(){startTime()},500);
		}

		function checkTime(i) {
		    if (i<10) {i = "0" + i};
		    return i;
		}


		TweenMax.staggerFrom($(".logo-part"), 3, {opacity: 0, delay: 0.3, ease:Cubic.easeInOut, force3D:true}, 0.3);
		TweenMax.staggerFrom($(".detail-txt"), 2, {opacity: 0, backgroundColor: "#ffffff", width: 0, delay: 0, ease:Power4.easeInOut, force3D:true}, 0.1);
		
		TweenMax.from($(".intro-jakob"), 3, {opacity: 0, delay: 0, ease:Power4.easeInOut, force3D:true});
		TweenMax.from($(".intro-portfolio"), 3, {opacity: 0, delay: 0, ease:Power4.easeInOut, force3D:true});

		TweenMax.from($('.overlay-textbox-mobile'), 2, {opacity: 0, delay: 1.5, ease:Power4.easeInOut, force3D:true});
		TweenMax.from($('.overlay-textbox'), 2, {opacity: 0, backgroundColor: "#ffffff", delay: 1.5, ease:Power4.easeInOut, force3D:true});

		TweenMax.from($(".logo-p02"), 3600, {rotation: "+=360", delay: 0.3, repeat: -1, ease: Linear.easeNone, force3D:true });
		TweenMax.from($(".logo-p03"), 360, {rotation: "-=360",  delay: 0.3, repeat: -1, ease: Linear.easeNone, force3D:true });
		TweenMax.from($(".logo-p04"), 60, {rotation: "+=360",  delay: 0.3, repeat: -1, ease: Linear.easeNone, force3D:true });


		wiggle($(".overlay-smoke-inner"));
		wiggle($(".overlay-noise-inner"));

		function wiggle(selector){
		  $(selector).each(function() {
		    wiggleProp(this, 'opacity', 0.3, 1);
		    wiggleProp(this, 'top', 0, 100);
		    wiggleProp(this, 'left', 0, 100);
		  })
		}

		function wiggleProp(element, prop, min, max) {
		  var duration = Math.random() * (.6 - .3) + 10;
		  
		  var tweenProps = {
		    ease: Power1.easeInOut,
		    onComplete: wiggleProp,
		    onCompleteParams: [element, prop, min, max]
		  };
		  tweenProps[prop] = Math.random() * (max - min) + min;

		  TweenMax.to(element, duration, tweenProps);
		}


		/* Introduction block  ---------------------------------------------------------- */
		




		function scrollSpy(element, inHandler, outHandler) {
			
			var inHandler = (inHandler===undefined) ? function(){} : inHandler;
			var outHandler = (outHandler===undefined) ? function(){} : outHandler;

			var $elems = $(element);

			for(var i=0; i<$elems.length; ++i) {
				var elm = $($elems[i]);

				if(isScrolledIntoView(elm)) {
					if(!elm.hasClass("spy-visible")) {
						elm.addClass("spy-visible");
						inHandler(elm);
					}
				} else {
					if(elm.hasClass("spy-visible")) {
						elm.removeClass("spy-visible");
						outHandler(elm);
					}
				}

			}

		}


		function isScrolledIntoView(elem) {

		    var $elem = $(elem);
		    var $window = $(window);

		    var docViewTop = $window.scrollTop();
		    var docViewBottom = docViewTop + $window.height();

		    var elemTop = $elem.offset().top;
		    var elemBottom = elemTop + $elem.height();

		    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		
		}





		/* animation > -------------------------------------------------- */

		function animateTxtBoxIn(elem) {
			var box = elem;


			var $children = $(box).children();

			for(var j=0; j<$children.length; ++j) {
				TweenMax.set($children[j], {clearProps:"all"})
				TweenMax.from($children[j], 1.0, {autoAlpha:0, color: "#ffffff", backgroundColor: "#ffffff", ease:Expo.easeInOut});
			}

			TweenMax.set(elem, {clearProps:"all"})
			TweenMax.from(box, 1, {width: "0px", height: "0px", opacity: 0, ease:Expo.easeInOut});

		}
			 

		function animateTxtBoxOut(elem) {
			TweenMax.to(elem, 0.8, {opacity: 0, ease:Linear.easeInOut});
		}





		function spinStart(elem) {
			TweenMax.to(elem, 75, {rotation: 360, ease:Linear.easeNone, repeat: -1});
		}


		function spinStop() {

		}





		/* animation < -------------------------------------------------- */








		
	});
	
})(jQuery, this);
