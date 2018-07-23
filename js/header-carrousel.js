/* Agrega c�digo JS aqu� */

$(document).ready(function(){
  var imgs = $("#fuentes_imagenes a");
  var imgurl = $(imgs[Math.floor(Math.random() * imgs.length)]).attr("href");
  $("#images_header").css("background-image","url("+imgurl+")");
});


// JavaScript Document
	$(function() {

				// rholo carousel
	    // Using custom configuration
	    
        //footer MUMA
	    $("#banners-footerMUMA").carouFredSel({
	        items: 3,
	        direction: "right",
	        prev: {
	            button: "#prev6",
	            key: "left"
	        },
	        next: {
	            button: "#next6",
	            key: "right"
	        },
	        scroll: {
	            items: 1,
	            // easing   : "easeOutBounce",
	            duration: 500,
	            pauseOnHover: true
	        },
	        width: 895
	    }); 

        //footer otras instituciones.
	    $("#banners-footer").carouFredSel({
	        items:3,
	        direction	: "up",
			prev		: {	
			    button		: "#prev6",
			    key			: "left"
		    },
			next		: { 
			    button		: "#next6",
			    key			: "right"
		    },
			scroll 		: {
			    items       : 3,
			    // easing   : "easeOutBounce",
			    duration    : 500,                        
			    pauseOnHover: true
	        }  
	    }); 
	});
