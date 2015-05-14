(function ($, root, undefined) {
	
	$(function () {
		

		init();

		function init() {
			scrollHandler();
			
			if ($('#scroller2').length) {
				Draggable.create("#scroller2",  {
				type:"scrollLeft", 
				throwProps:true, 
				edgeResistance:0.5,
				dragClickables:true, 
				/*snap: { 
					x: function(endValue) { 
						return Math.round(endValue / 500) * 500;
					}
				}*/
				});
			}
			
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
		
			scrollSpy(".txtbox-animate", animateTxtBoxIn, animateTxtBoxOut);
			//scrollSpy(".spin", spinStart, spinStop);

		}




		$('.overlay-textbox-bnt').click(overlay_textbox_bnt_click);
		
		function overlay_textbox_bnt_click() {
			var box = $(this).parent();
			
			if($(box).hasClass('open')){ 
				//close
				TweenMax.to($(box).find(".overlay-textbox-inner"), 0.5, {className: '-=open', ease: Power3.easeInOut});
				$(box).removeClass('open');
				console.log("close");

			} else {
				//open
				TweenMax.to($(box).find(".overlay-textbox-inner"), 0.5, {className: '+=open', ease: Power3.easeInOut});
				$(box).addClass('open');
				console.log("open");
			}

		}



		$('.nav-bnt').click(nav_open);

		function nav_open() {
			var nav = $(this).parent();
			
			if($(nav).hasClass('closed')) {
				//open
				TweenMax.to($(nav).find(".nav-inner"), 0.5, {className: '-=closed', ease: Power3.easeInOut});
				$(nav).removeClass('closed');
				console.log("open");

			} else {
				//close
				TweenMax.to($(nav).find(".nav-inner"), 0.5, {className: '+=closed', ease: Power3.easeInOut});
				$(nav).addClass('closed');
				console.log("close");

			}

		}




		/* events < -------------------------------------------------- */
































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
