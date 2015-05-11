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



		/* event handlers > -------------------------------------------------- */

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


		$(".nav-bnt").click(nav_in);

		$(document).on('click', function(event) {
		 	if (!$(event.target).closest('.nav-container').length) {
		   			nav_out();
		  	}
		});




		


		/* event handlers < -------------------------------------------------- */







		var nav_open = false;

		function nav_in() {
			var nav = $(".nav-container");

			if(!nav.hasClass("nav-open")) {
				TweenMax.set(".nav-element", {clearProps:"all"});
				TweenMax.set(".nav-element", {visibility: "visible"});
				TweenMax.staggerFrom('.nav-element', 0.1, {alpha:0, yPercent:-100, scale:0.4, force3D:true, ease:Expo.easeinOut},0.1);
				nav.toggleClass("nav-open");
			}
			

		}

		function nav_out() {
			var nav = $(".nav-container");
			if(nav.hasClass("nav-open")) {	
				nav.toggleClass("nav-open");
				TweenMax.staggerTo('.nav-element', 0.2, {alpha:0,height:0, padding:0, margin:'0 auto', display:'none'},0.05);
			}
		}



































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













		/*

		var doc = document.documentElement;
		var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
		var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
		$(window).on( "scroll", scrollHandler);

		function scrollHandler() {
			
			doc = document.documentElement;
			left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
			top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

			var element = document.getElementsByClassName("box2")[0];
			var rect = element.getBoundingClientRect();


			var pct = rect.top / window.innerHeight;
			var toggle = false;
			if(pct<0.5&&pct>0.4&&!toggle) {
				TweenMax.to(box2, 1, {left: "1000px"});
			}


			console.log(top);
			console.log(pct);
		}
		*/





		



		
	});
	
})(jQuery, this);
