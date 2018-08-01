/*! jQuery ellipsis - v1.0.9 - 2013-08-07
* https://github.com/STAR-ZERO/jquery-ellipsis
* Copyright (c) 2013 Kenji Abe; Licensed MIT */
(function($) {
    $.fn.ellipsis = function(options) {

        // default option
        var defaults = {
            'row' : 1, // show rows
            'char' : '...' // ellipsis
        };

        options = $.extend(defaults, options);

        this.each(function() {
            // get element text
            var $this = $(this);
            var text = $this.text();
            var origHeight = $this.height();

            // get height
            $this.text('a');
            var lineHeight =  parseFloat($this.css("lineHeight"), 10);
            var rowHeight = $this.height();
            var gapHeight = lineHeight > rowHeight ? (lineHeight - rowHeight) : 0;
            var targetHeight = gapHeight * (options.row - 1) + rowHeight * options.row;

            if (origHeight <= targetHeight) {
                $this.text(text);
                return;
            }

            // Binary search for max length
            var start = 1;
            var end = text.length;

            while (start < end) {
                var length = Math.ceil((start + end) / 2);

                $this.text(text.slice(0, length) + options['char']);

                if ($this.height () <= targetHeight) {
                    start = length;
                } else {
                    end = length - 1;
                }
            }

            $this
			.attr("title",text)
			.text(text.slice(0, start) + options['char']);
			
        });

        return this;
    };
}) (jQuery);

$(function(){
        $("#accordion").accordion({ header: "h3"});
        $(".accordion").accordion({ header: "h3",heightStyle: "contents",active:false,collapsible: true});
});

/*
 * $Id: ntg_marquesina.js 743 2016-05-09 21:40:48Z hrodrigu $
 * written by Hrodrigu
 * http://www.newtenberg.com
 * GPL (GPL-LICENSE.txt) licenses.
 * Built for jQuery library
 * Depends jqueryui when you use effects like fade
 * http://jquery.com
 * http://jqueryui.com
 */


(function($){
	$.fn.ntg_marquesina = function(options){
		var params = [];
		for(var i=1; i < arguments.length;i++){
			params.push(arguments[i]);
		}
		// default configuration properties
		var defaults = {
			visibleOnly:false,            /* solo considera elementos visibles (util cuando hay divs ocultos) */
			clickEvent: true,             /* los botones al lista itemizada con las páginas reacciona al click */
			hoverEvent: false,            /* los botones al lista itemizada con las páginas reacciona al over */
			duration: 2000,               /* tiempo que dura la espera entre transiciones en milisegundos */
			animation: 1500,              /* tiempo que dura la transición animada en milisegundos */
			effect:'fade',                /* tipo de transición, disponibles 'fade','slide','none' */
			itemsPerPage: 1,              /* aplica solo para effect slide, número de páginas visibles si es 'responsive' calcula solo */
			auto: true,                   /* transiciones parten solas */
			currentClass: 'current',      /* class de la página visible */
			controlsClass: 'controls',    /* class de la lista itemizada de páginas */
			controlsFirstClass: 'first',  /* class del primero la lista itemizada de páginas */
			controlsLastClass: 'last',    /* class del ultimo de la lista itemizada de páginas */
			controlsForceNumeric: true,   /* la lista de páginas se fuerza con números de página */
			nextArrowText: '>>',          /* texto para el botón siguente */
			nextArrowClass: 'next',       /* estilo para el botón siguiente */
			prevArrowText: '<<',          /* texto para el botón anterior */
			prevArrowClass: 'prev',       /* estilo para el botón anterior */
			aniModo: 'loop',              /* modo en que se salta de página:'loop','random','once' */
			playText:'play',              /* texto para el botón play */
			playClass:'play',             /* estilo para el botón play */
			pauseText:'pause',            /* texto para el botón pause */
			pauseClass:'pause',        	  /* estilo para el botón pause */
			pageBeforeChange:function(){},/* función que se ejcuta antes de la transición de la página */
			pageChange:function(){},      /* función que se ejecuta cuando termina la transición de la página */
			mode:'marquesina',            /* distintas formas de dibujar, ej: 'marquesina', 'paginadorBootstrap'  */
			paginationSelector: "#pages", /* selector jquery para ubicar la lista itemizada de páginas*/
			paginationSize: 10,           /* cantidad de paginas visibles */
			debug:true
		};
		if (typeof(options) ==='object' || typeof(options) ==='undefined' ){
			return this.each(function(){
				var obj = {};
				obj.dom = this;

				obj.opts = $.extend(defaults, options);
				obj.init = function(force){
					if (typeof($(obj.dom).data("NTG_MARQUESINA_INSTANCE")) != "undefined"  && typeof(force) == "undefined"){
						return;
					}
					obj.current = 0;
					obj.paginas = $(obj.dom).children('div' + (obj.opts.visibleOnly ? ':visible': ''));
					obj.total = obj.paginas.length;
					obj.ancho = $(obj.paginas).width(); 
					var h = $(obj.paginas).height(); 
					if(obj.opts.effect == 'slide'){
						var func_save = document.write;
						document.write = function(s) { };
						$(obj.paginas).wrapAll('<' + 'div class="clip"><' + 'div class="slides" /><'+ '/div');
						document.write = func_save;
						obj.paginas = $('div.slides > div' + (obj.opts.visibleOnly ? ':visible': ''), obj.dom);
						$("div.slides", obj.dom).css('width',obj.total*obj.ancho);			
						$("div.slides > div", obj.dom).css('float','left');
						$("div.slides > div", obj.dom).css('clear','none');
						$('div.clip',obj.dom).css("overflow","hidden");
						if(typeof(obj.opts.itemsPerPage) =='string'){
							obj.opts.itemsPerPage = Math.floor($(obj.dom).width() / obj.ancho);
							/* resize */
							$(window).resize(function(){
								 debug("new "+Math.max(1,Math.floor($(obj.dom).width() / obj.ancho))+"  old "+obj.opts.itemsPerPage); 
								if( !obj.busy && Math.max(1,Math.floor($(obj.dom).width() / obj.ancho)) != obj.opts.itemsPerPage){
									obj.busy = true;
									obj.pause();
									obj.setCurrent(0);
									$('div.slides',obj.dom).css('marginLeft',0);
									obj.opts.itemsPerPage = Math.max(1,Math.floor($(obj.dom).width() / obj.ancho));
									$('div.clip',obj.dom).css('width',obj.ancho*obj.opts.itemsPerPage); 
									obj.total = Math.ceil(obj.paginas.length/obj.opts.itemsPerPage);
									obj.createNav(true);
									obj.salto_pagina(0, false);
									if(obj.opts.auto){
										obj.play();
									}
									obj.busy = false;
								}
							});
						}
						$('div.clip',obj.dom).css('width',obj.ancho*obj.opts.itemsPerPage); 
						obj.total = Math.ceil(obj.paginas.length/obj.opts.itemsPerPage);
						$('div.clip',obj.dom).css('height',h); 
						$('div',obj.paginas).css('width',obj.ancho);
					}
					if(obj.opts.mode == 'marquesina'){
						/* flechas anterior y siguiente */
						$(obj.dom).prepend('<' + 'span class="' + obj.opts.nextArrowClass + '"><' + 'a href="javascript:void(0)">'+ obj.opts.nextArrowText + '<' + '/a><' + '/span>');
						$(obj.dom).prepend('<' + 'span class="' + obj.opts.prevArrowClass + '"><' + 'a href="javascript:void(0)">'+ obj.opts.prevArrowText + '<' + '/a><' + '/span>');
						$("span."+obj.opts.prevArrowClass+" a",obj.dom)
							.click(function(){
								if(!obj.clicked && !obj.busy){
									obj.clicked = true;
									obj.anterior_pagina();
								}
								return false;
							});
						$("span."+obj.opts.nextArrowClass+" a",obj.dom)
							.click(function(){
								if(!obj.clicked && !obj.busy){
									obj.clicked = true;
									obj.siguiente_pagina();
								}
								return false;
							});
						/*  creacion lista de navegacion */
						obj.createNav();
						/* boton play pause */
						$(obj.dom).append('<' + 'span class="boton">'+
								'<' + 'a href="javascript:void(0)" class="' + (obj.opts.auto ? obj.opts.pauseClass : obj.opts.playClass) + '">'
							   	+ (obj.opts.auto ? obj.opts.pauseText : obj.opts.playText) 
								+'<' + '/a><' + '/span>');
						$('span.boton a' ,obj.dom)
							.click( function(){ 
								if($(this).hasClass(obj.opts.pauseClass)){
									obj.pause();
								}else{
									obj.play();
								}
								return false;
							});
					}else if(obj.opts.mode == 'paginadorBootstrap'){
						obj.listaControls = $(obj.opts.paginationSelector);
						$(obj.listaControls).children().remove();
						for(var i=1;i<= obj.total;i++){
							$('<' + 'li class="item' + i + (i==0 ? ' '+obj.opts.currentClass : '') 
							+ '"><' + 'a href="javascript:void(0)" title="' + i +'">' + i + '<' + '/a><' + '/li>')
							.addClass((i>1&& i < obj.total?"hidden-xs":""))
							.appendTo(obj.listaControls);
						}
						$('a',obj.listaControls).each(function(index){ 
							$(this).attr('title',$(this).text()); 
							if(obj.opts.controlsForceNumeric){
								$(this).text(index+1);
							}
							if(obj.opts.hoverEvent){
								$(this).hover(function(){
									if(!obj.clicked && !obj.busy){
										obj.pause();
										obj.salto_pagina(index );
									}
									return false;
								});
							}	
							if(obj.opts.clickEvent){
								$(this).click(function(){
									if(!obj.clicked && !obj.busy){
										obj.clicked = true;
										obj.pause();
										obj.salto_pagina(index );
									}
									return false;
								});
							}
						});
						$('<'+'li class="'+obj.opts.nextArrowClass+'" ><'+'a href="javascript:void(0)"><'+'span class="fa fa-angle-left"><'+'span class="sr-only">'
						+ obj.opts.prevArrowText 
						+ '<'+'/span><'+'/span><'+'/a><'+'/li>')
						.prependTo(obj.listaControls)
						.find("a")
						.click(function(){
							if(!obj.clicked && !obj.busy){
								obj.clicked = true;
								obj.anterior_pagina();
							}
							return false;
						});
						$('<'+'li class="'+obj.opts.prevArrowClass+'"><'+'a href="javascript:void(0)"><'+'span class="fa fa-angle-right"><'+'span class="sr-only">'
						+ obj.opts.nextArrowText 
						+ '<'+'/span><'+'/span><'+'/a><'+'/li>')
						.appendTo(obj.listaControls)
						.find("a")
						.click(function(){
							if(!obj.clicked && !obj.busy){
								obj.clicked = true;
								obj.siguiente_pagina();
							}
							return false;
						});
					}
				/* la partida */
					if(obj.opts.effect == 'fade'){
						obj.paginas.hide();
						if(typeof(obj.opts.pageBeforeChange)==='function'){
							obj.opts.pageBeforeChange.call(obj.paginas[0]);
						}
						$(obj.paginas[0])
							.show("fade",{}, obj.opts.animation, 
							function(){
								if(obj.opts.auto){
									obj.play();
								}
								obj.setCurrent(0);
								if(typeof(obj.opts.pageChange)==='function'){
									obj.opts.pageChange.call(obj.paginas[0]);
								}
							});
					}else if( obj.opts.effect == 'none'){
						obj.paginas.hide();
						obj.salto_pagina(0,(obj.opts.auto?true:false));
					}else{
						if(typeof(obj.opts.pageBeforeChange)==='function'){
							obj.opts.pageBeforeChange.call(obj.paginas[0]);
						}
						if(obj.opts.auto){
							obj.play();
						}
						obj.setCurrent(0);
						if(typeof(obj.opts.pageChange)==='function'){
							obj.opts.pageChange.call(obj.paginas[0]);
						}
					}
				};

				obj.salto_pagina = function(numero,play){
					 debug(">numero="+numero + " obj.current="+obj.current); 
					if(obj.opts.aniModo == 'loop'){
						numero = ((numero + obj.total) % obj.total) ;
					}else if (obj.opts.aniModo == 'random'){ 
						var a = new Array(),
							i=0;
						for(; i< obj.current; i++){ 
							a.push(i);
						}
						i=obj.current+1;
						for(; i< obj.total; i++){ 
							a.push(i);
						}
						numero = a[Math.round(Math.random()*100)%a.length];
					}
					 debug("-numero="+numero + " obj.current="+obj.current); 
					if(typeof(obj.opts.pageBeforeChange)==='function'){
						obj.opts.pageBeforeChange.call(obj.paginas[numero]);
					}
					if(numero >= 0 && numero < obj.total){
						obj.busy = true;
						clearTimeout(obj.timeout);
						var salto = numero - obj.current;
						if(obj.opts.effect == 'slide'){
							 debug("slide salto="+salto); 
							var anim= {};
							var marginLeft= Number($('div.slides',obj.dom).css('marginLeft').match(/-*\d+/));
							anim['marginLeft'] = (
								marginLeft + obj.ancho * (obj.total*obj.opts.itemsPerPage - obj.opts.itemsPerPage) >= 0 
								? (
									obj.current < numero 
									?  '-='+ obj.ancho*obj.opts.itemsPerPage*salto 
									: ( marginLeft < 0 ? '+='+ obj.ancho*obj.opts.itemsPerPage*Math.abs(salto) : 0)
								) 
								:'0px');
							 debug("marginLeft = "+anim['marginLeft']); 
							$('div.slides',obj.dom)
								.animate(anim,obj.opts.animation, 
								function(){
									obj.setCurrent(numero);
									if(play){
										obj.play();
									}
									obj.clicked = false;
									obj.busy = false;
									if(typeof(obj.opts.pageChange)==='function'){
										obj.opts.pageChange.call(obj.paginas[numero]);
									}
								});
						}else if (obj.opts.effect == 'fade'){
							debug("fade"); 
							var altura_responsive = Math.max($(obj.paginas[obj.current]).height(), $(obj.paginas[numero]).height());
							$(obj.dom).height(altura_responsive);
							$(obj.paginas[obj.current])
								.hide("fade",{},obj.opts.animation, 
								function(){
									obj.setCurrent(numero);
									$(obj.paginas[numero])
									.show("fade",{},obj.opts.animation, 
									function(){
										if(play){
											obj.play();
										}
										obj.clicked = false;
										obj.busy = false;
										if(typeof(obj.opts.pageChange)==='function'){
											obj.opts.pageChange.call(obj.paginas[numero]);
										}
									});
								});
						}else{
							 debug("effect none"); 
							var altura_responsive = Math.max($(obj.paginas[obj.current]).height(), $(obj.paginas[numero]).height());
							$(obj.dom).height(altura_responsive);
							$(obj.paginas[obj.current]).hide(); 
							obj.setCurrent(numero);
							$(obj.paginas[numero]).show();
							if(play){
								obj.play();
							}
							obj.clicked = false;
							obj.busy = false;
							if(typeof(obj.opts.pageChange)==='function'){
								obj.opts.pageChange.call(obj.paginas[numero]);
							}
						}
					}else{
						obj.clicked = false;
						obj.busy = false;
					}
				};
				obj.siguiente_pagina = function(play){
					if(typeof(play) == 'undefined'){obj.pause();}
					obj.salto_pagina(obj.current + 1,(typeof(play) != 'undefined'?true:false));
				};
				obj.anterior_pagina = function(){
					obj.pause();
					obj.salto_pagina(obj.current - 1,(typeof(play) != 'undefined'?true:false));
				};
				obj.play = function(){
					if(obj.total > 1){ 
						obj.timeout = setTimeout(function(){
							obj.siguiente_pagina(true);
							}, obj.opts.duration);
						$('span.boton a' ,obj.dom)
						.text(obj.opts.pauseText)
						.removeClass(obj.opts.playClass)
						.addClass(obj.opts.pauseClass);
					}else{
						$('span.boton a' ,obj.dom)
						.text(obj.opts.playText)
						.removeClass(obj.opts.pauseClass)
						.addClass(obj.opts.playClass);
					}
				};
				obj.pause = function(){
					clearTimeout(obj.timeout);
					$('span.boton a' ,obj.dom)
						.text(obj.opts.playText)
						.removeClass(obj.opts.pauseClass)
						.addClass(obj.opts.playClass);
				};
				obj.setCurrent = function(numero){
					obj.current = numero;
					if(obj.opts.mode == 'marquesina'){
						$("ul." + obj.opts.controlsClass +" > li ",obj.dom).removeClass(obj.opts.currentClass);
						$("ul." + obj.opts.controlsClass +" > li:eq(" + numero + ") ",obj.dom).addClass(obj.opts.currentClass);				
					}else if(obj.opts.mode == 'paginadorBootstrap'){
						$(obj.listaControls)
						.children("li")
						.removeClass(obj.opts.currentClass)
						.filter(function(i){
							return (i>1 && i< obj.total);	
						})
						.addClass("hidden-xs");
						$(obj.listaControls)
						.children("li:eq("+ (numero+1) + ")")
						.addClass(obj.opts.currentClass)
						.removeClass("hidden-xs")
						var mitad = Math.floor(obj.opts.paginationSize/2); 
						var primero = Math.max(0,Math.min(numero - mitad, obj.total - (obj.opts.paginationSize+1))) +1;
						var ultimo = primero + obj.opts.paginationSize;
						$(obj.listaControls)
						.children("li")
						.hide()
						.filter(function(n){
							if( n <= 1 || n >= obj.total || (n>primero && n < ultimo)){
								return true;
							}else{
								return false;
							}
						})
						.show();
						if(numero > mitad){
							$(">li:eq(1)",obj.listaControls).addClass("paginador-primero");
						}else{
							$(">li:eq(1)",obj.listaControls).removeClass("paginador-primero");
						}
						if(numero < obj.total - mitad){
							$(">li:eq(-2)",obj.listaControls).addClass("paginador-ultimo");
						}else{
							$(">li:eq(-2)",obj.listaControls).removeClass("paginador-ultimo");
						}
					}
				};
				obj.createNav = function(force){
					var lista;
					if(force){
						$("ul." + obj.opts.controlsClass ,obj.dom).remove();
					}
					if(obj.total > 1){
						if($("ul." + obj.opts.controlsClass ,obj.dom).length == 0){
							 var l = '<' + 'ul class="'+ obj.opts.controlsClass + '">';
							for(var i=1;i<= obj.total;i++){
								l += '<' + 'li class="item' + i + (i==0 ? ' '+obj.opts.currentClass : '') + '"><' + 'a href="javascript:void(0)" title="' + i +'">' + i + '<' + '/a><' + '/li>';
							}
							l+='<' + '/ul>';
							lista=$(l);
						}else{
							var l = $("ul." + obj.opts.controlsClass ,obj.dom);
							obj.total = Math.min(obj.total, $('a',l).length);
							$('a',l).each(function(i){ 
									$(this).attr('title',$(this).text()); 
									if(obj.opts.controlsForceNumeric){
										$(this).text(i+1);
									}
								});
							l.detach();
							lista=l;
						}

						/*  se agreaga  lista de navegacion */
						$(obj.dom).append(lista);
						$("ul." + obj.opts.controlsClass + " > li > a", obj.dom)
							.each(function(index){
								if(obj.opts.hoverEvent){
									$(this).hover(function(){
										if(!obj.clicked && !obj.busy){
											obj.pause();
											obj.salto_pagina(index );
										}
										return false;
									});
								}	
								if(obj.opts.clickEvent){
									$(this).click(function(){
										if(!obj.clicked && !obj.busy){
											obj.clicked = true;
											obj.pause();
											obj.salto_pagina(index );
										}
										return false;
									});
								}
						});
						$("ul." + obj.opts.controlsClass + " > li:first",obj.dom).addClass(obj.opts.controlsFirstClass);
						$("ul." + obj.opts.controlsClass + " > li:last",obj.dom).addClass(obj.opts.controlsLastClass);
					}
				}
				obj.getPagina = function(){
					return obj.current;
				};
				function debug(msg){
					if(obj.opts.debug && window.console){
						window.console.log("marquesina:"+msg);
					}
				};
				obj.init();
				//se guarda la instancia el propio nodo DOM
				$(obj.dom).data("NTG_MARQUESINA_INSTANCE",obj);
			});
		} else if(typeof(options)==='string'){
			var ret= this;
			this.each(function(){
				var instancia = $(this).data("NTG_MARQUESINA_INSTANCE");
				if('undefined' != typeof(instancia) && 'function' === typeof(instancia[options])){
					ret = instancia[options].apply(instancia,params);
					return false;
				}
			});
			return ret;
		} else {
			return this;
		}
	};
})(jQuery);

/**
 * funciÃƒÂ³n para agregar y sacar class extra a un elemento de bloque y a un botÃƒÂ³n para mostrar menÃƒÂº en dispositivos mÃƒÂ³viles.
 * block_id: identificador del elemento de bloque a mostrar
 * button_id: identificador del elemento botÃƒÂ³n que gatilla el cambio de estado
 * open_class: nombre de la clase que se agrega al presionar el botÃƒÂ³n, y que se saca al apagarlo (volver a clickear).
 */
function toggleBlock(block_id, button_id, open_class) {
  var block = document.getElementById(block_id);
  var button = document.getElementById(button_id);
  if(button.className.match(open_class)) { // para apagar
    var block_class = block.className;
    var re = new RegExp(' ?'+open_class);
    block.className = block_class.replace(re,'');
    var button_class = button.className;
    button.className = button_class.replace(re,'');
  }
  else { // para prender
    block.className = block.className + ' ' + open_class;
    button.className = button.className + ' ' + open_class;
  }
  return;
}

	WebFontConfig = {
    google: { families: [ 'Oswald::latin', 'Open+Sans::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();

/*!
	Colorbox v1.4.33 - 2013-10-31
	jQuery lightbox and modal window plugin
	(c) 2013 Jack Moore - http://www.jacklmoore.com/colorbox
	license: http://www.opensource.org/licenses/mit-license.php
*/
(function ($, document, window) {
	var
	// Default settings object.
	// See http://jacklmoore.com/colorbox for details.
	defaults = {
		// data sources
		html: false,
		photo: false,
		iframe: false,
		inline: false,

		// behavior and appearance
		transition: "elastic",
		speed: 300,
		fadeOut: 300,
		width: false,
		initialWidth: "600",
		innerWidth: false,
		maxWidth: false,
		height: false,
		initialHeight: "450",
		innerHeight: false,
		maxHeight: false,
		scalePhotos: true,
		scrolling: true,
		href: false,
		title: false,
		rel: false,
		opacity: 0.9,
		preloading: true,
		className: false,
		overlayClose: true,
		escKey: true,
		arrowKey: true,
		top: false,
		bottom: false,
		left: false,
		right: false,
		fixed: false,
		data: undefined,
		closeButton: true,
		fastIframe: true,
		open: false,
		reposition: true,
		loop: true,
		slideshow: false,
		slideshowAuto: true,
		slideshowSpeed: 2500,
		slideshowStart: "start slideshow",
		slideshowStop: "stop slideshow",
		photoRegex: /\.(gif|png|jp(e|g|eg)|bmp|ico|webp)((#|\?).*)?$/i,

		// alternate image paths for high-res displays
		retinaImage: false,
		retinaUrl: false,
		retinaSuffix: '@2x.$1',

		// internationalization
		current: "imagen {current} de {total}",
		previous: "anterior",
		next: "siguiente",
		close: "cerrar",
		xhrError: "Este contenido ha fallado al cargar.",
		imgError: "No se ha cargado la imagen.",

		// accessbility
		returnFocus: true,
		trapFocus: true,

		// callbacks
		onOpen: false,
		onLoad: false,
		onComplete: false,
		onCleanup: false,
		onClosed: false
	},
	
	// Abstracting the HTML and event identifiers for easy rebranding
	colorbox = 'colorbox',
	prefix = 'cbox',
	boxElement = prefix + 'Element',
	
	// Events
	event_open = prefix + '_open',
	event_load = prefix + '_load',
	event_complete = prefix + '_complete',
	event_cleanup = prefix + '_cleanup',
	event_closed = prefix + '_closed',
	event_purge = prefix + '_purge',

	// Cached jQuery Object Variables
	$overlay,
	$box,
	$wrap,
	$content,
	$topBorder,
	$leftBorder,
	$rightBorder,
	$bottomBorder,
	$related,
	$window,
	$loaded,
	$loadingBay,
	$loadingOverlay,
	$title,
	$current,
	$slideshow,
	$next,
	$prev,
	$close,
	$groupControls,
	$events = $('<a/>'), // $([]) would be prefered, but there is an issue with jQuery 1.4.2
	
	// Variables for cached values or use across multiple functions
	settings,
	interfaceHeight,
	interfaceWidth,
	loadedHeight,
	loadedWidth,
	element,
	index,
	photo,
	open,
	active,
	closing,
	loadingTimer,
	publicMethod,
	div = "div",
	className,
	requests = 0,
	previousCSS = {},
	init;

	// ****************
	// HELPER FUNCTIONS
	// ****************
	
	// Convenience function for creating new jQuery objects
	function $tag(tag, id, css) {
		var element = document.createElement(tag);

		if (id) {
			element.id = prefix + id;
		}

		if (css) {
			element.style.cssText = css;
		}

		return $(element);
	}
	
	// Get the window height using innerHeight when available to avoid an issue with iOS
	// http://bugs.jquery.com/ticket/6724
	function winheight() {
		return window.innerHeight ? window.innerHeight : $(window).height();
	}

	// Determine the next and previous members in a group.
	function getIndex(increment) {
		var
		max = $related.length,
		newIndex = (index + increment) % max;
		
		return (newIndex < 0) ? max + newIndex : newIndex;
	}

	// Convert '%' and 'px' values to integers
	function setSize(size, dimension) {
		return Math.round((/%/.test(size) ? ((dimension === 'x' ? $window.width() : winheight()) / 100) : 1) * parseInt(size, 10));
	}
	
	// Checks an href to see if it is a photo.
	// There is a force photo option (photo: true) for hrefs that cannot be matched by the regex.
	function isImage(settings, url) {
		return settings.photo || settings.photoRegex.test(url);
	}

	function retinaUrl(settings, url) {
		return settings.retinaUrl && window.devicePixelRatio > 1 ? url.replace(settings.photoRegex, settings.retinaSuffix) : url;
	}

	function trapFocus(e) {
		if ('contains' in $box[0] && !$box[0].contains(e.target)) {
			e.stopPropagation();
			$box.focus();
		}
	}

	// Assigns function results to their respective properties
	function makeSettings() {
		var i,
			data = $.data(element, colorbox);
		
		if (data == null) {
			settings = $.extend({}, defaults);
			if (console && console.log) {
				console.log('Error: cboxElement missing settings object');
			}
		} else {
			settings = $.extend({}, data);
		}
		
		for (i in settings) {
			if ($.isFunction(settings[i]) && i.slice(0, 2) !== 'on') { // checks to make sure the function isn't one of the callbacks, they will be handled at the appropriate time.
				settings[i] = settings[i].call(element);
			}
		}
		
		settings.rel = settings.rel || element.rel || $(element).data('rel') || 'nofollow';
		settings.href = settings.href || $(element).attr('href');
		settings.title = settings.title || element.title;
		
		if (typeof settings.href === "string") {
			settings.href = $.trim(settings.href);
		}
	}

	function trigger(event, callback) {
		// for external use
		$(document).trigger(event);

		// for internal use
		$events.triggerHandler(event);

		if ($.isFunction(callback)) {
			callback.call(element);
		}
	}


	var slideshow = (function(){
		var active,
			className = prefix + "Slideshow_",
			click = "click." + prefix,
			timeOut;

		function clear () {
			clearTimeout(timeOut);
		}

		function set() {
			if (settings.loop || $related[index + 1]) {
				clear();
				timeOut = setTimeout(publicMethod.next, settings.slideshowSpeed);
			}
		}

		function start() {
			$slideshow
				.html(settings.slideshowStop)
				.unbind(click)
				.one(click, stop);

			$events
				.bind(event_complete, set)
				.bind(event_load, clear);

			$box.removeClass(className + "off").addClass(className + "on");
		}

		function stop() {
			clear();
			
			$events
				.unbind(event_complete, set)
				.unbind(event_load, clear);

			$slideshow
				.html(settings.slideshowStart)
				.unbind(click)
				.one(click, function () {
					publicMethod.next();
					start();
				});

			$box.removeClass(className + "on").addClass(className + "off");
		}

		function reset() {
			active = false;
			$slideshow.hide();
			clear();
			$events
				.unbind(event_complete, set)
				.unbind(event_load, clear);
			$box.removeClass(className + "off " + className + "on");
		}

		return function(){
			if (active) {
				if (!settings.slideshow) {
					$events.unbind(event_cleanup, reset);
					reset();
				}
			} else {
				if (settings.slideshow && $related[1]) {
					active = true;
					$events.one(event_cleanup, reset);
					if (settings.slideshowAuto) {
						start();
					} else {
						stop();
					}
					$slideshow.show();
				}
			}
		};

	}());


	function launch(target) {
		if (!closing) {
			
			element = target;
			
			makeSettings();
			
			$related = $(element);
			
			index = 0;
			
			if (settings.rel !== 'nofollow') {
				$related = $('.' + boxElement).filter(function () {
					var data = $.data(this, colorbox),
						relRelated;

					if (data) {
						relRelated =  $(this).data('rel') || data.rel || this.rel;
					}
					
					return (relRelated === settings.rel);
				});
				index = $related.index(element);
				
				// Check direct calls to Colorbox.
				if (index === -1) {
					$related = $related.add(element);
					index = $related.length - 1;
				}
			}
			
			$overlay.css({
				opacity: parseFloat(settings.opacity),
				cursor: settings.overlayClose ? "pointer" : "auto",
				visibility: 'visible'
			}).show();
			

			if (className) {
				$box.add($overlay).removeClass(className);
			}
			if (settings.className) {
				$box.add($overlay).addClass(settings.className);
			}
			className = settings.className;

			if (settings.closeButton) {
				$close.html(settings.close).appendTo($content);
			} else {
				$close.appendTo('<div/>');
			}

			if (!open) {
				open = active = true; // Prevents the page-change action from queuing up if the visitor holds down the left or right keys.
				
				// Show colorbox so the sizes can be calculated in older versions of jQuery
				$box.css({visibility:'hidden', display:'block'});
				
				$loaded = $tag(div, 'LoadedContent', 'width:0; height:0; overflow:hidden');
				$content.css({width:'', height:''}).append($loaded);

				// Cache values needed for size calculations
				interfaceHeight = $topBorder.height() + $bottomBorder.height() + $content.outerHeight(true) - $content.height();
				interfaceWidth = $leftBorder.width() + $rightBorder.width() + $content.outerWidth(true) - $content.width();
				loadedHeight = $loaded.outerHeight(true);
				loadedWidth = $loaded.outerWidth(true);

				// Opens inital empty Colorbox prior to content being loaded.
				settings.w = setSize(settings.initialWidth, 'x');
				settings.h = setSize(settings.initialHeight, 'y');
				$loaded.css({width:'', height:settings.h});
				publicMethod.position();

				trigger(event_open, settings.onOpen);
				
				$groupControls.add($title).hide();

				$box.focus();
				
				if (settings.trapFocus) {
					// Confine focus to the modal
					// Uses event capturing that is not supported in IE8-
					if (document.addEventListener) {

						document.addEventListener('focus', trapFocus, true);
						
						$events.one(event_closed, function () {
							document.removeEventListener('focus', trapFocus, true);
						});
					}
				}

				// Return focus on closing
				if (settings.returnFocus) {
					$events.one(event_closed, function () {
						$(element).focus();
					});
				}
			}
			load();
		}
	}

	// Colorbox's markup needs to be added to the DOM prior to being called
	// so that the browser will go ahead and load the CSS background images.
	function appendHTML() {
		if (!$box && document.body) {
			init = false;
			$window = $(window);
			$box = $tag(div).attr({
				id: colorbox,
				'class': $.support.opacity === false ? prefix + 'IE' : '', // class for optional IE8 & lower targeted CSS.
				role: 'dialog',
				tabindex: '-1'
			}).hide();
			$overlay = $tag(div, "Overlay").hide();
			$loadingOverlay = $([$tag(div, "LoadingOverlay")[0],$tag(div, "LoadingGraphic")[0]]);
			$wrap = $tag(div, "Wrapper");
			$content = $tag(div, "Content").append(
				$title = $tag(div, "Title"),
				$current = $tag(div, "Current"),
				$prev = $('<button type="button"/>').attr({id:prefix+'Previous'}),
				$next = $('<button type="button"/>').attr({id:prefix+'Next'}),
				$slideshow = $tag('button', "Slideshow"),
				$loadingOverlay
			);

			$close = $('<button type="button"/>').attr({id:prefix+'Close'});
			
			$wrap.append( // The 3x3 Grid that makes up Colorbox
				$tag(div).append(
					$tag(div, "TopLeft"),
					$topBorder = $tag(div, "TopCenter"),
					$tag(div, "TopRight")
				),
				$tag(div, false, 'clear:left').append(
					$leftBorder = $tag(div, "MiddleLeft"),
					$content,
					$rightBorder = $tag(div, "MiddleRight")
				),
				$tag(div, false, 'clear:left').append(
					$tag(div, "BottomLeft"),
					$bottomBorder = $tag(div, "BottomCenter"),
					$tag(div, "BottomRight")
				)
			).find('div div').css({'float': 'left'});
			
			$loadingBay = $tag(div, false, 'position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;');
			
			$groupControls = $next.add($prev).add($current).add($slideshow);

			$(document.body).append($overlay, $box.append($wrap, $loadingBay));
		}
	}

	// Add Colorbox's event bindings
	function addBindings() {
		function clickHandler(e) {
			// ignore non-left-mouse-clicks and clicks modified with ctrl / command, shift, or alt.
			// See: http://jacklmoore.com/notes/click-events/
			if (!(e.which > 1 || e.shiftKey || e.altKey || e.metaKey || e.ctrlKey)) {
				e.preventDefault();
				launch(this);
			}
		}

		if ($box) {
			if (!init) {
				init = true;

				// Anonymous functions here keep the public method from being cached, thereby allowing them to be redefined on the fly.
				$next.click(function () {
					publicMethod.next();
				});
				$prev.click(function () {
					publicMethod.prev();
				});
				$close.click(function () {
					publicMethod.close();
				});
				$overlay.click(function () {
					if (settings.overlayClose) {
						publicMethod.close();
					}
				});
				
				// Key Bindings
				$(document).bind('keydown.' + prefix, function (e) {
					var key = e.keyCode;
					if (open && settings.escKey && key === 27) {
						e.preventDefault();
						publicMethod.close();
					}
					if (open && settings.arrowKey && $related[1] && !e.altKey) {
						if (key === 37) {
							e.preventDefault();
							$prev.click();
						} else if (key === 39) {
							e.preventDefault();
							$next.click();
						}
					}
				});

				if ($.isFunction($.fn.on)) {
					// For jQuery 1.7+
					$(document).on('click.'+prefix, '.'+boxElement, clickHandler);
				} else {
					// For jQuery 1.3.x -> 1.6.x
					// This code is never reached in jQuery 1.9, so do not contact me about 'live' being removed.
					// This is not here for jQuery 1.9, it's here for legacy users.
					$('.'+boxElement).live('click.'+prefix, clickHandler);
				}
			}
			return true;
		}
		return false;
	}

	// Don't do anything if Colorbox already exists.
	if ($.colorbox) {
		return;
	}

	// Append the HTML when the DOM loads
	$(appendHTML);


	// ****************
	// PUBLIC FUNCTIONS
	// Usage format: $.colorbox.close();
	// Usage from within an iframe: parent.jQuery.colorbox.close();
	// ****************
	
	publicMethod = $.fn[colorbox] = $[colorbox] = function (options, callback) {
		var $this = this;
		
		options = options || {};
		
		appendHTML();

		if (addBindings()) {
			if ($.isFunction($this)) { // assume a call to $.colorbox
				$this = $('<spam/>');
				options.open = true;
			} else if (!$this[0]) { // colorbox being applied to empty collection
				return $this;
			}
			
			if (callback) {
				options.onComplete = callback;
			}
			
			$this.each(function () {
				$.data(this, colorbox, $.extend({}, $.data(this, colorbox) || defaults, options));
			}).addClass(boxElement);
			
			if (($.isFunction(options.open) && options.open.call($this)) || options.open) {
				launch($this[0]);
			}
		}
		
		return $this;
	};

	publicMethod.position = function (speed, loadedCallback) {
		var
		css,
		top = 0,
		left = 0,
		offset = $box.offset(),
		scrollTop,
		scrollLeft;
		
		$window.unbind('resize.' + prefix);

		// remove the modal so that it doesn't influence the document width/height
		$box.css({top: -9e4, left: -9e4});

		scrollTop = $window.scrollTop();
		scrollLeft = $window.scrollLeft();

		if (settings.fixed) {
			offset.top -= scrollTop;
			offset.left -= scrollLeft;
			$box.css({position: 'fixed'});
		} else {
			top = scrollTop;
			left = scrollLeft;
			$box.css({position: 'absolute'});
		}

		// keeps the top and left positions within the browser's viewport.
		if (settings.right !== false) {
			left += Math.max($window.width() - settings.w - loadedWidth - interfaceWidth - setSize(settings.right, 'x'), 0);
		} else if (settings.left !== false) {
			left += setSize(settings.left, 'x');
		} else {
			left += Math.round(Math.max($window.width() - settings.w - loadedWidth - interfaceWidth, 0) / 2);
		}
		
		if (settings.bottom !== false) {
			top += Math.max(winheight() - settings.h - loadedHeight - interfaceHeight - setSize(settings.bottom, 'y'), 0);
		} else if (settings.top !== false) {
			top += setSize(settings.top, 'y');
		} else {
			top += Math.round(Math.max(winheight() - settings.h - loadedHeight - interfaceHeight, 0) / 2);
		}

		$box.css({top: offset.top, left: offset.left, visibility:'visible'});
		
		// this gives the wrapper plenty of breathing room so it's floated contents can move around smoothly,
		// but it has to be shrank down around the size of div#colorbox when it's done.  If not,
		// it can invoke an obscure IE bug when using iframes.
		$wrap[0].style.width = $wrap[0].style.height = "9999px";
		
		function modalDimensions() {
			$topBorder[0].style.width = $bottomBorder[0].style.width = $content[0].style.width = (parseInt($box[0].style.width,10) - interfaceWidth)+'px';
			$content[0].style.height = $leftBorder[0].style.height = $rightBorder[0].style.height = (parseInt($box[0].style.height,10) - interfaceHeight)+'px';
		}

		css = {width: settings.w + loadedWidth + interfaceWidth, height: settings.h + loadedHeight + interfaceHeight, top: top, left: left};

		// setting the speed to 0 if the content hasn't changed size or position
		if (speed) {
			var tempSpeed = 0;
			$.each(css, function(i){
				if (css[i] !== previousCSS[i]) {
					tempSpeed = speed;
					return;
				}
			});
			speed = tempSpeed;
		}

		previousCSS = css;

		if (!speed) {
			$box.css(css);
		}

		$box.dequeue().animate(css, {
			duration: speed || 0,
			complete: function () {
				modalDimensions();
				
				active = false;
				
				// shrink the wrapper down to exactly the size of colorbox to avoid a bug in IE's iframe implementation.
				$wrap[0].style.width = (settings.w + loadedWidth + interfaceWidth) + "px";
				$wrap[0].style.height = (settings.h + loadedHeight + interfaceHeight) + "px";
				
				if (settings.reposition) {
					setTimeout(function () {  // small delay before binding onresize due to an IE8 bug.
						$window.bind('resize.' + prefix, publicMethod.position);
					}, 1);
				}

				if (loadedCallback) {
					loadedCallback();
				}
			},
			step: modalDimensions
		});
	};

	publicMethod.resize = function (options) {
		var scrolltop;
		
		if (open) {
			options = options || {};
			
			if (options.width) {
				settings.w = setSize(options.width, 'x') - loadedWidth - interfaceWidth;
			}

			if (options.innerWidth) {
				settings.w = setSize(options.innerWidth, 'x');
			}

			$loaded.css({width: settings.w});
			
			if (options.height) {
				settings.h = setSize(options.height, 'y') - loadedHeight - interfaceHeight;
			}

			if (options.innerHeight) {
				settings.h = setSize(options.innerHeight, 'y');
			}

			if (!options.innerHeight && !options.height) {
				scrolltop = $loaded.scrollTop();
				$loaded.css({height: "auto"});
				settings.h = $loaded.height();
			}

			$loaded.css({height: settings.h});

			if(scrolltop) {
				$loaded.scrollTop(scrolltop);
			}
			
			publicMethod.position(settings.transition === "none" ? 0 : settings.speed);
		}
	};

	publicMethod.prep = function (object) {
		if (!open) {
			return;
		}
		
		var callback, speed = settings.transition === "none" ? 0 : settings.speed;

		$loaded.empty().remove(); // Using empty first may prevent some IE7 issues.

		$loaded = $tag(div, 'LoadedContent').append(object);
		
		function getWidth() {
			settings.w = settings.w || $loaded.width();
			settings.w = settings.mw && settings.mw < settings.w ? settings.mw : settings.w;
			return settings.w;
		}
		function getHeight() {
			settings.h = settings.h || $loaded.height();
			settings.h = settings.mh && settings.mh < settings.h ? settings.mh : settings.h;
			return settings.h;
		}
		
		$loaded.hide()
		.appendTo($loadingBay.show())// content has to be appended to the DOM for accurate size calculations.
		.css({width: getWidth(), overflow: settings.scrolling ? 'auto' : 'hidden'})
		.css({height: getHeight()})// sets the height independently from the width in case the new width influences the value of height.
		.prependTo($content);
		
		$loadingBay.hide();
		
		// floating the IMG removes the bottom line-height and fixed a problem where IE miscalculates the width of the parent element as 100% of the document width.
		
		$(photo).css({'float': 'none'});

		callback = function () {
			var total = $related.length,
				iframe,
				frameBorder = 'frameBorder',
				allowTransparency = 'allowTransparency',
				complete;
			
			if (!open) {
				return;
			}
			
			function removeFilter() { // Needed for IE7 & IE8 in versions of jQuery prior to 1.7.2
				if ($.support.opacity === false) {
					$box[0].style.removeAttribute('filter');
				}
			}
			
			complete = function () {
				clearTimeout(loadingTimer);
				$loadingOverlay.hide();
				trigger(event_complete, settings.onComplete);
			};

			
			$title.html(settings.title).add($loaded).show();
			
			if (total > 1) { // handle grouping
				if (typeof settings.current === "string") {
					$current.html(settings.current.replace('{current}', index + 1).replace('{total}', total)).show();
				}
				
				$next[(settings.loop || index < total - 1) ? "show" : "hide"]().html(settings.next);
				$prev[(settings.loop || index) ? "show" : "hide"]().html(settings.previous);
				
				slideshow();
				
				// Preloads images within a rel group
				if (settings.preloading) {
					$.each([getIndex(-1), getIndex(1)], function(){
						var src,
							img,
							i = $related[this],
							data = $.data(i, colorbox);

						if (data && data.href) {
							src = data.href;
							if ($.isFunction(src)) {
								src = src.call(i);
							}
						} else {
							src = $(i).attr('href');
						}

						if (src && isImage(data, src)) {
							src = retinaUrl(data, src);
							img = document.createElement('img');
							img.src = src;
						}
					});
				}
			} else {
				$groupControls.hide();
			}
			
			if (settings.iframe) {
				iframe = $tag('iframe')[0];
				
				if (frameBorder in iframe) {
					iframe[frameBorder] = 0;
				}
				
				if (allowTransparency in iframe) {
					iframe[allowTransparency] = "true";
				}

				if (!settings.scrolling) {
					iframe.scrolling = "no";
				}
				
				$(iframe)
					.attr({
						src: settings.href,
						name: (new Date()).getTime(), // give the iframe a unique name to prevent caching
						'class': prefix + 'Iframe',
						allowFullScreen : true, // allow HTML5 video to go fullscreen
						webkitAllowFullScreen : true,
						mozallowfullscreen : true
					})
					.one('load', complete)
					.appendTo($loaded);
				
				$events.one(event_purge, function () {
					iframe.src = "//about:blank";
				});

				if (settings.fastIframe) {
					$(iframe).trigger('load');
				}
			} else {
				complete();
			}
			
			if (settings.transition === 'fade') {
				$box.fadeTo(speed, 1, removeFilter);
			} else {
				removeFilter();
			}
		};
		
		if (settings.transition === 'fade') {
			$box.fadeTo(speed, 0, function () {
				publicMethod.position(0, callback);
			});
		} else {
			publicMethod.position(speed, callback);
		}
	};

	function load () {
		var href, setResize, prep = publicMethod.prep, $inline, request = ++requests;
		
		active = true;
		
		photo = false;
		
		element = $related[index];
		
		makeSettings();
		
		trigger(event_purge);
		
		trigger(event_load, settings.onLoad);
		
		settings.h = settings.height ?
				setSize(settings.height, 'y') - loadedHeight - interfaceHeight :
				settings.innerHeight && setSize(settings.innerHeight, 'y');
		
		settings.w = settings.width ?
				setSize(settings.width, 'x') - loadedWidth - interfaceWidth :
				settings.innerWidth && setSize(settings.innerWidth, 'x');
		
		// Sets the minimum dimensions for use in image scaling
		settings.mw = settings.w;
		settings.mh = settings.h;
		
		// Re-evaluate the minimum width and height based on maxWidth and maxHeight values.
		// If the width or height exceed the maxWidth or maxHeight, use the maximum values instead.
		if (settings.maxWidth) {
			settings.mw = setSize(settings.maxWidth, 'x') - loadedWidth - interfaceWidth;
			settings.mw = settings.w && settings.w < settings.mw ? settings.w : settings.mw;
		}
		if (settings.maxHeight) {
			settings.mh = setSize(settings.maxHeight, 'y') - loadedHeight - interfaceHeight;
			settings.mh = settings.h && settings.h < settings.mh ? settings.h : settings.mh;
		}
		
		href = settings.href;
		
		loadingTimer = setTimeout(function () {
			$loadingOverlay.show();
		}, 100);
		
		if (settings.inline) {
			// Inserts an empty placeholder where inline content is being pulled from.
			// An event is bound to put inline content back when Colorbox closes or loads new content.
			$inline = $tag(div).hide().insertBefore($(href)[0]);

			$events.one(event_purge, function () {
				$inline.replaceWith($loaded.children());
			});

			prep($(href));
		} else if (settings.iframe) {
			// IFrame element won't be added to the DOM until it is ready to be displayed,
			// to avoid problems with DOM-ready JS that might be trying to run in that iframe.
			prep(" ");
		} else if (settings.html) {
			prep(settings.html);
		} else if (isImage(settings, href)) {

			href = retinaUrl(settings, href);

			photo = document.createElement('img');

			$(photo)
			.addClass(prefix + 'Photo')
			.bind('error',function () {
				settings.title = false;
				prep($tag(div, 'Error').html(settings.imgError));
			})
			.one('load', function () {
				var percent;

				if (request !== requests) {
					return;
				}

				$.each(['alt', 'longdesc', 'aria-describedby'], function(i,val){
					var attr = $(element).attr(val) || $(element).attr('data-'+val);
					if (attr) {
						photo.setAttribute(val, attr);
					}
				});

				if (settings.retinaImage && window.devicePixelRatio > 1) {
					photo.height = photo.height / window.devicePixelRatio;
					photo.width = photo.width / window.devicePixelRatio;
				}

				if (settings.scalePhotos) {
					setResize = function () {
						photo.height -= photo.height * percent;
						photo.width -= photo.width * percent;
					};
					if (settings.mw && photo.width > settings.mw) {
						percent = (photo.width - settings.mw) / photo.width;
						setResize();
					}
					if (settings.mh && photo.height > settings.mh) {
						percent = (photo.height - settings.mh) / photo.height;
						setResize();
					}
				}
				
				if (settings.h) {
					photo.style.marginTop = Math.max(settings.mh - photo.height, 0) / 2 + 'px';
				}
				
				if ($related[1] && (settings.loop || $related[index + 1])) {
					photo.style.cursor = 'pointer';
					photo.onclick = function () {
						publicMethod.next();
					};
				}

				photo.style.width = photo.width + 'px';
				photo.style.height = photo.height + 'px';

				setTimeout(function () { // A pause because Chrome will sometimes report a 0 by 0 size otherwise.
					prep(photo);
				}, 1);
			});
			
			setTimeout(function () { // A pause because Opera 10.6+ will sometimes not run the onload function otherwise.
				photo.src = href;
			}, 1);
		} else if (href) {
			$loadingBay.load(href, settings.data, function (data, status) {
				if (request === requests) {
					prep(status === 'error' ? $tag(div, 'Error').html(settings.xhrError) : $(this).contents());
				}
			});
		}
	}
		
	// Navigates to the next page/image in a set.
	publicMethod.next = function () {
		if (!active && $related[1] && (settings.loop || $related[index + 1])) {
			index = getIndex(1);
			launch($related[index]);
		}
	};
	
	publicMethod.prev = function () {
		if (!active && $related[1] && (settings.loop || index)) {
			index = getIndex(-1);
			launch($related[index]);
		}
	};

	// Note: to use this within an iframe use the following format: parent.jQuery.colorbox.close();
	publicMethod.close = function () {
		if (open && !closing) {
			
			closing = true;
			
			open = false;
			
			trigger(event_cleanup, settings.onCleanup);
			
			$window.unbind('.' + prefix);
			
			$overlay.fadeTo(settings.fadeOut || 0, 0);
			
			$box.stop().fadeTo(settings.fadeOut || 0, 0, function () {
			
				$box.add($overlay).css({'opacity': 1, cursor: 'auto'}).hide();
				
				trigger(event_purge);
				
				$loaded.empty().remove(); // Using empty first may prevent some IE7 issues.
				
				setTimeout(function () {
					closing = false;
					trigger(event_closed, settings.onClosed);
				}, 1);
			});
		}
	};

	// Removes changes Colorbox made to the document, but does not remove the plugin.
	publicMethod.remove = function () {
		if (!$box) { return; }

		$box.stop();
		$.colorbox.close();
		$box.stop().remove();
		$overlay.remove();
		closing = false;
		$box = null;
		$('.' + boxElement)
			.removeData(colorbox)
			.removeClass(boxElement);

		$(document).unbind('click.'+prefix);
	};

	// A method for fetching the current element Colorbox is referencing.
	// returns a jQuery object.
	publicMethod.element = function () {
		return $(element);
	};

	publicMethod.settings = defaults;

}(jQuery, document, window));


/*
 * $Id: ntg_framesFilter.js 736 2016-03-15 21:44:55Z hrodrigu $
 * written by Hrodrigu
 * http://www.newtenberg.com
 * GPL (GPL-LICENSE.txt) licenses.
 * Built for jQuery library
 * http://jquery.com
 */
(function($){
	$.fn.ntg_FramesFilter = function(options){
		var params = [];
		for(var i=1; i < arguments.length;i++){
			params.push(arguments[i]);
		}
		var defaults = {
				filterTitle:'Filtrar',
				filterTitleTag:'h2',
				filterPnameTag:'h3',
				filterFormId:'filtros',
				filterId:'filtrar',
				filterFormClass:'form_filtros',
				filterPvalueSelector: '.filtro > a',
				filterPvaluePrefixId:'filtropnid',
				filterPrintHidden:'hidden-print',
				framesTitleSelector: 'div > h2',
				framesTitleFilterAppendTextClass: 'extendido',
				framesTitleFilterAppendText: 'filtrado#',
				numClass: 'cardinalidad',
				thresholdSelect: 11,
				usePvidOnSelect: false,
				filterMode:'or',
				filterFormBtnSubmitId:'',
				filterFormMessages: {},
				filterMaxItemSelector: {},
				filterChange: function(){},
				filterInit: function(){},
				debug:false
		};
		if (typeof(options) ==='object' || typeof(options) ==='undefined' ){
			return this.each(function(){
				var obj = new Object();
				obj.dom = this;
				obj.opts = $.extend(defaults, options);
				obj.num_selected = 0;
				obj.init = function(force){
					if (typeof($(obj.dom).data("NTG_FRAMES_FILTER_INSTANCE")) != "undefined"  && typeof(force) == "undefined"){
						return;
					}
					obj.filtros = new Object();
					obj.filtrosOrAplicados = [];
					obj.labelsFiltros = new Object();
					if(obj.opts.filterMode == 'or'){
						obj.selected = $('div.recuadro ' + obj.opts.filterPvalueSelector, obj.dom)
						.each(function(){
							var f = $(this).parent().parent();
							var pnid = ($(this).attr('class').match(/pnid-(\d*)/)!=null?$(this).attr('class').match(/pnid-(\d*)/)[1]:0) ;
							var pid = ($(this).attr('class').match(/pv-pid-(\d*)/)!=null?$(this).attr('class').match(/pv-pid-(\d*)/)[1]:0) ;
							var pvid = ($(this).attr('class').match(/pvid-(\d*)/)!=null?$(this).attr('class').match(/pvid-(\d*)/)[1]:0) ;
							var pnid_label = ($(f).text().match(/^(.*):/)!=null?$(f).text().match(/^(.*):/)[1]:'') ;
							var name = $(this).text();
							if( 'undefined' == typeof(obj.filtros[pnid])){
								obj.filtros[pnid] = new Object();
								obj.labelsFiltros[pnid] = pnid_label;
							}
							if( 'undefined' == typeof(obj.filtros[pnid][pvid])){
								obj.filtros[pnid][pvid] = new Object();
								obj.filtros[pnid][pvid].count = 0;
							}
							if('undefined' == typeof(obj.filtros[pnid][pvid].count)){
								obj.filtros[pnid][pvid].count = 0;
							}
							obj.filtros[pnid][pvid].label = name;
							obj.filtros[pnid][pvid].pnid = pnid;
							obj.filtros[pnid][pvid].pid = pid;
							obj.filtros[pnid][pvid].count++;
							if (pid != "0") {
								if ('undefined' == typeof(obj.filtros[pnid][pid])) {
									obj.filtros[pnid][pid] = new Object();
								}
								if ('undefined' == typeof(obj.filtros[pnid][pid].subvalores)) {
									obj.filtros[pnid][pid].subvalores = new Object();
								}
								obj.filtros[pnid][pid].subvalores[pvid]=pvid;
							}
						});
						obj.num_selected = obj.selected.length;
						obj.recuadrosFiltrables = $(obj.selected).parents(".recuadro").data('ntg_filtered',true);
						var ulComun = $("<"+"ul><"+"/ul>");
						obj.form = $("<"+"form action=''><"+"/form>")
						.attr("id", obj.opts.filterFormId)
						.attr("name",obj.opts.filterFormId)
						.addClass(obj.opts.form_filtrosClass)
						.append("<"+obj.opts.filterTitleTag+">"+obj.opts.filterTitle+"<"+"/"+obj.opts.filterTitleTag+">")
						.append(ulComun)
						.appendTo('#' +obj.opts.filterId);
						var todos = $("<"+"li><"+"input value='1' type='checkbox' id='checkbox_todos' name='todos' checked='checked'><"+"label for='checkbox_todos'>Seleccionar todos<"+"/label><"+"/li>");
						$('input',todos).click(function(){
							obj.filtrosOrAplicados = [];
							$('#' + obj.opts.filterFormId + ' input')
							.prop('checked',true)
							.filter("input:gt(1)")
							.each(function(){
								obj.filtrosOrAplicados.push($(this).val());
							});
							$('#checkbox_ninguno ').prop('checked',false);
							$('#checkbox_todos ').prop('checked',true);
							$("."+ obj.opts.framesTitleFilterAppendTextClass,obj.dom).remove();
							$(obj.recuadrosFiltrables).data('ntg_filtered',true).show();
							$( ' ul > li ul ', obj.form).hide();
							$(obj.dom).ntg_framesPaginator("init","force");
							$(".ntg_paginador",obj.dom).css("min-height",$('#' +obj.opts.filterId).height());
							if(typeof(obj.opts.filterChange)==='function'){
								obj.opts.filterChange.call(obj.dom);
							}
						});
						$(ulComun).append(todos);
						var ninguno = $("<"+"li><"+"input value='1' type='checkbox' id='checkbox_ninguno' name='ninguno' '><"+"label for='checkbox_ninguno'>Seleccionar ninguno<"+"/label><"+"/li>");
						$('input',ninguno).click(function(){
							obj.filtrosOrAplicados = [];
							$('input', obj.form).prop('checked',false);
							$('#checkbox_todos').prop('checked',false);
							$('#checkbox_ninguno').prop('checked',true);
							$("."+ obj.opts.framesTitleFilterAppendTextClass,obj.dom).remove();
							$(obj.recuadrosFiltrables).data('ntg_filtered',false).hide();
							$( 'ul', obj.form).show();
							$( 'li', obj.form).show();
							$(obj.dom).ntg_framesPaginator("init","force");
							$(".ntg_paginador",obj.dom).css("min-height",$('#' +obj.opts.filterId).height());
							if(typeof(obj.opts.filterChange)==='function'){
								obj.opts.filterChange.call(obj.dom);
							}
						});
						$(ulComun).append(ninguno);
						for(var pnid in obj.filtros){
							var ulPname = $("<"+"ul class='filter pnid-"+pnid+"'><"+"/ul>");
							for(var pvid in obj.filtros[pnid]){
									if(obj.filtros[pnid][pvid].pid == "0") {
										obj.makeCheckbox(ulPname, pvid, pnid);
									}
							}
							$(obj.form)
							.append("<"+obj.opts.filterPnameTag+">"+obj.labelsFiltros[pnid]+"<"+"/"+obj.opts.filterPnameTag+">")
							.append(ulPname);
						}
					}else if( obj.opts.filterMode == "auto"){
						obj.frames = $("div.recuadro", obj.dom)
						.data('ntg_filtered',true)
						.each(function(){
							var filtros_textos = "";
							filtros_separados = {};
							$(obj.opts.filterPvalueSelector, this).each(function(){
								var test_pvid = $(".pv-branch",this);
								if(test_pvid.length>0){// clasificando
									var branch_cl="." + $(test_pvid).attr("class").trim().replace(/ /g,".");
									var pnid = (branch_cl.search(/pnid-(\d*)/)!= -1 ? branch_cl.match(/pnid-(\d*)/)[1] : undefined);
									var id = obj.opts.filterPvaluePrefixId+pnid;
									if(typeof(pnid) != "undefined"){
										if(typeof(obj.filtros[id]) == "undefined"){
											obj.filtros[id] = {};
											obj.filtros[id].vals = {};
											obj.filtros[id].pnid = pnid;
											obj.filtros[id].type = "select";
										}
										if(typeof(filtros_separados[id]) == "undefined"){
											filtros_separados[id] = [];
										}
										$(test_pvid).children().each(function(){
											var cl = "." + $(this).attr("class").trim().replace(/ /g,".");
											var pvid = (cl.search(/pvid-(\d*)/)!= -1 ? cl.match(/pvid-(\d*)/)[1] : undefined);
											var t = $(this).text().toLowerCase();
											if(typeof(obj.filtros[id].vals[pvid])== "undefined"){
												obj.filtros[id].vals[pvid]=t;
												filtros_textos +=t+"\n";
											}
											if(obj.opts.usePvidOnSelect){
												filtros_separados[id].push(pvid);
											}else{
												filtros_separados[id].push(t);
											}
										});
									}
								}else{ // nodo de texto
									var cl = "." + $(this).attr("class").trim().replace(/ /g,".");
									var id_match =  cl.match(/(\.titulo|\.filtro-[^.]*)/);
									if(id_match != null){
										var id = "filtro"+id_match[1].replace(".","");
										var t = $(this).text().toLowerCase();
										if(t.length>0){
											if(typeof(obj.filtros[id]) == "undefined"){
												obj.filtros[id] = {};
												obj.filtros[id].type = "text";
											}
											filtros_separados[id] = t;
											filtros_textos +=t+"\n";
										}
									}
								}	
							});	
							$(this).data("NTG_FILTER_TXTS", filtros_textos.toLowerCase());
							$(this).data("NTG_FILTER_VALS", filtros_separados);
						});
						for(var id in obj.filtros){
							if (obj.filtros.hasOwnProperty(id)) {
								var msg = (typeof(obj.opts.filterFormMessages[id]) != "undefined" ? obj.opts.filterFormMessages[id]:"");
								if(obj.filtros[id].type == "select"){
									var size = 0;
									var select = $("<select id='"+id+"' class='form-control' title='"+msg+"'><option value=''></option></select>");
									var palabras = [];
									var pvids= {};
									for(var pvid in obj.filtros[id].vals){
										if (obj.filtros[id].vals.hasOwnProperty(pvid)) {
											palabras.push(obj.filtros[id].vals[pvid]);
											pvids[obj.filtros[id].vals[pvid]]=pvid;
										// TODO ordenar palabras - valores
										//	$("<option value='"+pvid+"'>"+obj.filtros[id].vals[pvid]+"</"+"option>").appendTo(select);
											size++;
										}
									}
									if(size < obj.opts.thresholdSelect){
										palabras.sort();
										for(var i=0; i< palabras.length; i++){
											$("<option value='"+pvids[palabras[i]]+"'>"+palabras[i]+"</"+"option>").appendTo(select);
										}

										$("#"+id).replaceWith(select);
									}else{
										var input = $('<input id="'+id+'" type="text" class="form-control" aria-describedby="addon1" placeholder="'+msg+'">');
										$("#"+id).replaceWith(input);
										obj.filtros[id].type = 'text';
									}
								}else{
									var input = $('<input id="'+id+'" type="text" class="form-control" aria-describedby="addon1" placeholder="'+msg+'">');
									$("#"+id).replaceWith(input);
								}
							}
						}
						$("#"+obj.opts.filterFormBtnSubmitId).click(function(){
							var a;
							obj.Filter();
							$(obj.dom).ntg_framesPaginator("init","force");
							return false;
						});
					}
					if(typeof(obj.opts.filterInit)==='function'){
						obj.opts.filterInit.call(obj.dom);
					}
				};
				obj.extFilter = function(query){
					$(obj.frames).each(function() {
						var vals = $(this).data("NTG_FILTER_VALS");
						var test_and = true;
						for(var id in query["and"]) {
							if (query["and"].hasOwnProperty(id)) {
								if(typeof(obj.filtros[id].type) != "undefined" && obj.filtros[id].type == "select"){
									if(obj.opts.usePvidOnSelect){
										var matches =$.grep(query["and"][id], function(el,i){
											return ($.inArray(el, vals[id]) != -1);
										}); 
										if(query["and"][id].length > 0 && matches.length == 0){
											test_and = false;
											break;
										}
									}else{
										//multiples palabras TODO
										if($.inArray(query["and"][id], vals[id]) == -1){
											test_and = false;
											break;
										}
									}
								}else{
									if (typeof(vals[id]) == "undefined" || vals[id].indexOf(query["and"][id]) == -1){
										test_and = false;
										break;
									}
								}
							}
						}
						var test_or = false || typeof(query["or"]) == "undefined";
						var or_tested = false;
						for(var id in query["or"]) {
							if (query["or"].hasOwnProperty(id)) {
								or_tested = true;
								if(typeof(obj.filtros[id].type) != "undefined" && obj.filtros[id].type == "select"){
									if(obj.opts.usePvidOnSelect){
										var matches =$.grep(query["or"][id], function(el,i){
											return ($.inArray(el, vals[id]) != -1);
										}); 
										if(query["or"][id].length > 0 && matches.length > 0){
											test_or = true;
											break;
										}
									}else{
										//multiples palabras TODO
										if($.inArray(query["or"][id], vals[id]) == -1){
											test_or = false;
											break;
										}
									}
								}else{
									if (typeof(vals[id]) == "undefined" || vals[id].indexOf(query["and"][id]) == -1){
										test_or = false;
										break;
									}
								}
							}
						}
						//test_or = test_or || ! or_tested;
						if(test_and && test_or ){
							$(this)
							.data('ntg_filtered',true)
							.removeClass(obj.opts.filterPrintHidden)
							.show();
						}else{
							$(this)
							.data('ntg_filtered',false)
							.addClass(obj.opts.filterPrintHidden)
							.hide();
						}
					});
					$(obj.dom).ntg_framesPaginator("init","force");
					if(typeof(obj.opts.filterChange)==='function'){
						obj.opts.filterChange.call(obj.dom);
					}
					return obj.dom;
				};
				obj.Filter = function(forced_query) {
					var query_and=[];
					var query_separada={};
					window.console.log("submit");
					if(typeof(forced_query) == "undefined"){
						obj.filtrosOrAplicados = [];
						for(var id in obj.filtros){
							if (obj.filtros.hasOwnProperty(id)) {
								if(obj.filtros[id].type == "select"){
									var option = $("#"+id+" option:selected")
									.each(function(){
										if(typeof(query_separada[id]) == "undefined") {
												query_separada[id] = [];
										}
										if(obj.opts.usePvidOnSelect){
											var pvid = $(this).attr("value");
											if(pvid.length>0){
												query_separada[id].push(pvid);
												query_and.push(pvid);
												obj.filtrosOrAplicados.push(pvid);
											}
										}else{
											var t = $(this).text().trim().toLowerCase();
											if(t.length>0){	
												query_and.push(t);
												obj.filtrosOrAplicados.push($("#"+id).val());
												query_separada[id] = t;
											}
										}
									});
								}else{
									var t = $("#"+id).val().trim().toLowerCase();
									if(t.length>0){
										query_and.push(t);
										obj.filtrosOrAplicados.push(t);
										query_separada[id] = t;
									}
								}
							}
						}
					}else{
						//forced query
						query_separada = forced_query;	
					}
					$(obj.frames).each(function() {
						var txts = $(this).data("NTG_FILTER_TXTS");
						var vals = $(this).data("NTG_FILTER_VALS");
						var test = true;
						for(var id in query_separada) {
							if (query_separada.hasOwnProperty(id)) {
								if(obj.filtros[id].type == "select"){
									if(obj.opts.usePvidOnSelect){
										var matches =$.grep(query_separada[id], function(el,i){
											return ($.inArray(el, vals[id]) != -1);
										}); 
										if(query_separada[id].length > 0 && matches.length == 0){
											test = false;
											break;
										}
									}else{
										//multiples palabras TODO
										if($.inArray(query_separada[id], vals[id]) == -1){
											test = false;
											break;
										}
									}
								}else{
									if (typeof(vals[id]) == "undefined" || vals[id].indexOf(query_separada[id]) == -1){
										test = false;
										break;
									}
								}
							}
						}
						if(test){
							$(this)
							.data('ntg_filtered',true)
							.removeClass(obj.opts.filterPrintHidden)
							.show();
						}else{
							$(this)
							.data('ntg_filtered',false)
							.addClass(obj.opts.filterPrintHidden)
							.hide();
						}
					});
					$(obj.dom).ntg_framesPaginator("init","force");
					if(typeof(obj.opts.filterChange)==='function'){
						obj.opts.filterChange.call(obj.dom);
					}
					return obj.dom;
				};
				obj.makeCheckbox = function(padre, pvid, pnid){
						
						var li = $("<"+"li><"+"label for'checkbox"+pvid+"'>"+obj.filtros[pnid][pvid].label+"<"+"span class='"+ obj.opts.numClass + "'>("+obj.filtros[pnid][pvid].count+")<"+"/span><"+"/label><"+"/li>");
						var check = $("<"+"input value='"+pvid+"' type='checkbox' id='checkbox"+pvid+"' name='checkbox"+pvid+"' checked='checked'>").prependTo(li);
						$(check).click(function(){
							if($(this).is(':checked')){
								$(this).parent().find('ul input').prop('checked',$(this).prop('checked'));
								if( 'undefined' != typeof(obj.filtros[pnid][pvid].subvalores)){
									$(this).parent().children('ul').hide();
									$(this).parent().children('ul').children('li').hide();
								}
								$('#checkbox_ninguno').prop('checked',false);
							}else{
								if( 'undefined' != typeof(obj.filtros[pnid][pvid].subvalores)){
									$(this).parent().children('ul').show();
									$(this).parent().children('ul').children('li').show();
								}
								$('#checkbox_todos').prop('checked',false);
							}
							obj.doFilter();
							$(".ntg_paginador",obj.dom).css("min-height",$('#' +obj.opts.filterId).height());
						});
						if( 'undefined' != typeof(obj.filtros[pnid][pvid].subvalores)){
							$(li).append("<"+"ul><"+"/ul>");
							for(var p in obj.filtros[pnid][pvid].subvalores){
								obj.makeCheckbox($(li).children('ul'),obj.filtros[pnid][pvid].subvalores[p],pnid).hide();
							}
						}
						$(padre).append(li);
						obj.filtrosOrAplicados.push(pvid);

						return $(li);
				};
				obj.doFilter = function(force_query){
					var query = [];
					if('undefined' != typeof(force_query)){
						query = $.map(force_query, function(val,i){
							return obj.opts.filterPvalueSelector + '.pvid-'+ val;
						});
						obj.filtrosOrAplicados = force_query.concat();
						$('input', obj.form).prop('checked',false);
						$(obj.filtrosOrAplicados).each(function(i,val){
							$('input#checkbox'+val, obj.form).prop('checked',true);
						});
					}else{
						obj.filtrosOrAplicados = [];
						$('#' + obj.opts.filterFormId + ' input:checked')
						.each(function(){
							query.push(obj.opts.filterPvalueSelector + '.pvid-'+$(this).val());
							obj.filtrosOrAplicados.push($(this).val());
						});
					}
					obj.num_selected = $('div.recuadro', obj.dom)
					.hide()
					.removeClass(obj.opts.filterPrintHidden)
					.data('ntg_filtered',false)
					.filter(function(){ 
						return $(query.join(","),this).length > 0;
					})
					.each(function(){ 
						$(this)
						.data('ntg_filtered',true)
						.addClass(obj.opts.filterPrintHidden)
						.show(); 
					})
					.length;
					$('.' +  obj.opts.framesTitleFilterAppendTextClass,obj.dom)
					.remove();
					$(obj.opts.framesTitleSelector,obj.dom)
					.append("<"+"span class='" + obj.opts.framesTitleFilterAppendTextClass +"'>/ "+ obj.num_selected + " " +  obj.opts.framesTitleFilterAppendText.replace("#", (obj.num_selected>1?"s":"")) + "<"+"/span>");
					$(obj.dom).ntg_framesPaginator("init","force");

					if(typeof(obj.opts.filterChange)==='function'){
						obj.opts.filterChange.call(obj.dom);
					}
					return obj.dom;
				}
				obj.getFilter = function(){
					return obj.filtrosOrAplicados.join(",");
				};
				obj.setFilter = function(filter){
					obj.doFilter(filter.split(","));
					return obj.dom;
				}
				function debug(msg){
					if(obj.opts.debug && window.console){
						window.console.log(msg);
					}
				};
				obj.init();
				$(obj.dom).data("NTG_FRAMES_FILTER_INSTANCE",obj);
			});
		} else if(typeof(options)==='string'){
			var ret= this;
			this.each(function(){
				var instancia = $(this).data("NTG_FRAMES_FILTER_INSTANCE");
				if('undefined' != typeof(instancia) && 'function' === typeof(instancia[options])){
					ret = instancia[options].apply(instancia,params);
					return false;
				}
			});
			return ret;
		} else {
			return this;
		}
	};
})(jQuery);

/**
 * Lightbox v2.7.1
 * by Lokesh Dhakar - http://lokeshdhakar.com/projects/lightbox2/
 *
 * @license http://creativecommons.org/licenses/by/2.5/
 * - Free for use in both personal and commercial projects
 * - Attribution requires leaving author name, author link, and the license info intact
 */

(function() {
  // Use local alias
  var $ = jQuery;

  var LightboxOptions = (function() {
    function LightboxOptions() {
      this.fadeDuration                = 500;
      this.fitImagesInViewport         = true;
      this.resizeDuration              = 700;
      this.positionFromTop             = 50;
      this.showImageNumberLabel        = true;
      this.alwaysShowNavOnTouchDevices = false;
      this.wrapAround                  = false;
    }
    
    // Change to localize to non-english language
    LightboxOptions.prototype.albumLabel = function(curImageNum, albumSize) {
      return "Imagen " + curImageNum + " de " + albumSize;
    };

    return LightboxOptions;
  })();


  var Lightbox = (function() {
    function Lightbox(options) {
      this.options           = options;
      this.album             = [];
      this.currentImageIndex = void 0;
      this.init();
    }

    Lightbox.prototype.init = function() {
      this.enable();
      this.build();
    };

    // Loop through anchors and areamaps looking for either data-lightbox attributes or rel attributes
    // that contain 'lightbox'. When these are clicked, start lightbox.
    Lightbox.prototype.enable = function() {
      var self = this;
      $('body').on('click', 'a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]', function(event) {
        self.start($(event.currentTarget));
        return false;
      });
    };

    // Build html for the lightbox and the overlay.
    // Attach event handlers to the new DOM elements. click click click
    Lightbox.prototype.build = function() {
      var self = this;
      $("<div id='lightboxOverlay' class='lightboxOverlay'></div><div id='lightbox' class='lightbox'><div class='lb-outerContainer'><div class='lb-container'><img class='lb-image' src='' /><div class='lb-nav'><a class='lb-prev' href='' ></a><a class='lb-next' href='' ></a></div><div class='lb-loader'><a class='lb-cancel'></a></div></div></div><div class='lb-dataContainer'><div class='lb-data'><div class='lb-details'><span class='lb-caption'></span><span class='lb-number'></span></div><div class='lb-closeContainer'><a class='lb-close'></a></div></div></div></div>").appendTo($('body'));
      
      // Cache jQuery objects
      this.$lightbox       = $('#lightbox');
      this.$overlay        = $('#lightboxOverlay');
      this.$outerContainer = this.$lightbox.find('.lb-outerContainer');
      this.$container      = this.$lightbox.find('.lb-container');

      // Store css values for future lookup
      this.containerTopPadding = parseInt(this.$container.css('padding-top'), 10);
      this.containerRightPadding = parseInt(this.$container.css('padding-right'), 10);
      this.containerBottomPadding = parseInt(this.$container.css('padding-bottom'), 10);
      this.containerLeftPadding = parseInt(this.$container.css('padding-left'), 10);
      
      // Attach event handlers to the newly minted DOM elements
      this.$overlay.hide().on('click', function() {
        self.end();
        return false;
      });

      this.$lightbox.hide().on('click', function(event) {
        if ($(event.target).attr('id') === 'lightbox') {
          self.end();
        }
        return false;
      });

      this.$outerContainer.on('click', function(event) {
        if ($(event.target).attr('id') === 'lightbox') {
          self.end();
        }
        return false;
      });

      this.$lightbox.find('.lb-prev').on('click', function() {
        if (self.currentImageIndex === 0) {
          self.changeImage(self.album.length - 1);
        } else {
          self.changeImage(self.currentImageIndex - 1);
        }
        return false;
      });

      this.$lightbox.find('.lb-next').on('click', function() {
        if (self.currentImageIndex === self.album.length - 1) {
          self.changeImage(0);
        } else {
          self.changeImage(self.currentImageIndex + 1);
        }
        return false;
      });

      this.$lightbox.find('.lb-loader, .lb-close').on('click', function() {
        self.end();
        return false;
      });
    };

    // Show overlay and lightbox. If the image is part of a set, add siblings to album array.
    Lightbox.prototype.start = function($link) {
      var self    = this;
      var $window = $(window);

      $window.on('resize', $.proxy(this.sizeOverlay, this));

      $('select, object, embed').css({
        visibility: "hidden"
      });

      this.sizeOverlay();

      this.album = [];
      var imageNumber = 0;

      function addToAlbum($link) {
        self.album.push({
          link: $link.attr('href'),
          title: $link.attr('data-title') || $link.attr('title')
        });
      }

      // Support both data-lightbox attribute and rel attribute implementations
      var dataLightboxValue = $link.attr('data-lightbox');
      var $links;

      if (dataLightboxValue) {
        $links = $($link.prop("tagName") + '[data-lightbox="' + dataLightboxValue + '"]');
        for (var i = 0; i < $links.length; i = ++i) {
          addToAlbum($($links[i]));
          if ($links[i] === $link[0]) {
            imageNumber = i;
          }
        }
      } else {
        if ($link.attr('rel') === 'lightbox') {
          // If image is not part of a set
          addToAlbum($link);
        } else {
          // If image is part of a set
          $links = $($link.prop("tagName") + '[rel="' + $link.attr('rel') + '"]');
          for (var j = 0; j < $links.length; j = ++j) {
            addToAlbum($($links[j]));
            if ($links[j] === $link[0]) {
              imageNumber = j;
            }
          }
        }
      }
      
      // Position Lightbox
      var top  = $window.scrollTop() + this.options.positionFromTop;
      var left = $window.scrollLeft();
      this.$lightbox.css({
        top: top + 'px',
        left: left + 'px'
      }).fadeIn(this.options.fadeDuration);

      this.changeImage(imageNumber);
    };

    // Hide most UI elements in preparation for the animated resizing of the lightbox.
    Lightbox.prototype.changeImage = function(imageNumber) {
      var self = this;

      this.disableKeyboardNav();
      var $image = this.$lightbox.find('.lb-image');

      this.$overlay.fadeIn(this.options.fadeDuration);

      $('.lb-loader').fadeIn('slow');
      this.$lightbox.find('.lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption').hide();

      this.$outerContainer.addClass('animating');

      // When image to show is preloaded, we send the width and height to sizeContainer()
      var preloader = new Image();
      preloader.onload = function() {
        var $preloader, imageHeight, imageWidth, maxImageHeight, maxImageWidth, windowHeight, windowWidth;
        $image.attr('src', self.album[imageNumber].link);

        $preloader = $(preloader);

        $image.width(preloader.width);
        $image.height(preloader.height);
        
        if (self.options.fitImagesInViewport) {
          // Fit image inside the viewport.
          // Take into account the border around the image and an additional 10px gutter on each side.

          windowWidth    = $(window).width();
          windowHeight   = $(window).height();
          maxImageWidth  = windowWidth - self.containerLeftPadding - self.containerRightPadding - 20;
          maxImageHeight = windowHeight - self.containerTopPadding - self.containerBottomPadding - 120;

          // Is there a fitting issue?
          if ((preloader.width > maxImageWidth) || (preloader.height > maxImageHeight)) {
            if ((preloader.width / maxImageWidth) > (preloader.height / maxImageHeight)) {
              imageWidth  = maxImageWidth;
              imageHeight = parseInt(preloader.height / (preloader.width / imageWidth), 10);
              $image.width(imageWidth);
              $image.height(imageHeight);
            } else {
              imageHeight = maxImageHeight;
              imageWidth = parseInt(preloader.width / (preloader.height / imageHeight), 10);
              $image.width(imageWidth);
              $image.height(imageHeight);
            }
          }
        }
        self.sizeContainer($image.width(), $image.height());
      };

      preloader.src          = this.album[imageNumber].link;
      this.currentImageIndex = imageNumber;
    };

    // Stretch overlay to fit the viewport
    Lightbox.prototype.sizeOverlay = function() {
      this.$overlay
        .width($(window).width())
        .height($(document).height());
    };

    // Animate the size of the lightbox to fit the image we are showing
    Lightbox.prototype.sizeContainer = function(imageWidth, imageHeight) {
      var self = this;
      
      var oldWidth  = this.$outerContainer.outerWidth();
      var oldHeight = this.$outerContainer.outerHeight();
      var newWidth  = imageWidth + this.containerLeftPadding + this.containerRightPadding;
      var newHeight = imageHeight + this.containerTopPadding + this.containerBottomPadding;
      
      function postResize() {
        self.$lightbox.find('.lb-dataContainer').width(newWidth);
        self.$lightbox.find('.lb-prevLink').height(newHeight);
        self.$lightbox.find('.lb-nextLink').height(newHeight);
        self.showImage();
      }

      if (oldWidth !== newWidth || oldHeight !== newHeight) {
        this.$outerContainer.animate({
          width: newWidth,
          height: newHeight
        }, this.options.resizeDuration, 'swing', function() {
          postResize();
        });
      } else {
        postResize();
      }
    };

    // Display the image and it's details and begin preload neighboring images.
    Lightbox.prototype.showImage = function() {
      this.$lightbox.find('.lb-loader').hide();
      this.$lightbox.find('.lb-image').fadeIn('slow');
    
      this.updateNav();
      this.updateDetails();
      this.preloadNeighboringImages();
      this.enableKeyboardNav();
    };

    // Display previous and next navigation if appropriate.
    Lightbox.prototype.updateNav = function() {
      // Check to see if the browser supports touch events. If so, we take the conservative approach
      // and assume that mouse hover events are not supported and always show prev/next navigation
      // arrows in image sets.
      var alwaysShowNav = false;
      try {
        document.createEvent("TouchEvent");
        alwaysShowNav = (this.options.alwaysShowNavOnTouchDevices)? true: false;
      } catch (e) {}

      this.$lightbox.find('.lb-nav').show();

      if (this.album.length > 1) {
        if (this.options.wrapAround) {
          if (alwaysShowNav) {
            this.$lightbox.find('.lb-prev, .lb-next').css('opacity', '1');
          }
          this.$lightbox.find('.lb-prev, .lb-next').show();
        } else {
          if (this.currentImageIndex > 0) {
            this.$lightbox.find('.lb-prev').show();
            if (alwaysShowNav) {
              this.$lightbox.find('.lb-prev').css('opacity', '1');
            }
          }
          if (this.currentImageIndex < this.album.length - 1) {
            this.$lightbox.find('.lb-next').show();
            if (alwaysShowNav) {
              this.$lightbox.find('.lb-next').css('opacity', '1');
            }
          }
        }
      }
    };

    // Display caption, image number, and closing button.
    Lightbox.prototype.updateDetails = function() {
      var self = this;

      // Enable anchor clicks in the injected caption html.
      // Thanks Nate Wright for the fix. @https://github.com/NateWr
      if (typeof this.album[this.currentImageIndex].title !== 'undefined' && this.album[this.currentImageIndex].title !== "") {
        this.$lightbox.find('.lb-caption')
          .html(this.album[this.currentImageIndex].title)
          .fadeIn('fast')
          .find('a').on('click', function(event){
            location.href = $(this).attr('href');
          });
      }
    
      if (this.album.length > 1 && this.options.showImageNumberLabel) {
        this.$lightbox.find('.lb-number').text(this.options.albumLabel(this.currentImageIndex + 1, this.album.length)).fadeIn('fast');
      } else {
        this.$lightbox.find('.lb-number').hide();
      }
    
      this.$outerContainer.removeClass('animating');
    
      this.$lightbox.find('.lb-dataContainer').fadeIn(this.options.resizeDuration, function() {
        return self.sizeOverlay();
      });
    };

    // Preload previous and next images in set.
    Lightbox.prototype.preloadNeighboringImages = function() {
      if (this.album.length > this.currentImageIndex + 1) {
        var preloadNext = new Image();
        preloadNext.src = this.album[this.currentImageIndex + 1].link;
      }
      if (this.currentImageIndex > 0) {
        var preloadPrev = new Image();
        preloadPrev.src = this.album[this.currentImageIndex - 1].link;
      }
    };

    Lightbox.prototype.enableKeyboardNav = function() {
      $(document).on('keyup.keyboard', $.proxy(this.keyboardAction, this));
    };

    Lightbox.prototype.disableKeyboardNav = function() {
      $(document).off('.keyboard');
    };

    Lightbox.prototype.keyboardAction = function(event) {
      var KEYCODE_ESC        = 27;
      var KEYCODE_LEFTARROW  = 37;
      var KEYCODE_RIGHTARROW = 39;

      var keycode = event.keyCode;
      var key     = String.fromCharCode(keycode).toLowerCase();
      if (keycode === KEYCODE_ESC || key.match(/x|o|c/)) {
        this.end();
      } else if (key === 'p' || keycode === KEYCODE_LEFTARROW) {
        if (this.currentImageIndex !== 0) {
          this.changeImage(this.currentImageIndex - 1);
        } else if (this.options.wrapAround && this.album.length > 1) {
          this.changeImage(this.album.length - 1);
        }
      } else if (key === 'n' || keycode === KEYCODE_RIGHTARROW) {
        if (this.currentImageIndex !== this.album.length - 1) {
          this.changeImage(this.currentImageIndex + 1);
        } else if (this.options.wrapAround && this.album.length > 1) {
          this.changeImage(0);
        }
      }
    };

    // Closing time. :-(
    Lightbox.prototype.end = function() {
      this.disableKeyboardNav();
      $(window).off("resize", this.sizeOverlay);
      this.$lightbox.fadeOut(this.options.fadeDuration);
      this.$overlay.fadeOut(this.options.fadeDuration);
      $('select, object, embed').css({
        visibility: "visible"
      });
    };

    return Lightbox;

  })();

  $(function() {
    var options  = new LightboxOptions();
    var lightbox = new Lightbox(options);
  });

}).call(this);

$(document).ready(function(){$('.blank a:not([class])').click(function(){window.open(this.href,'_blank','resizable=1,menubar=1,location=1,status=1,scrollbars=1,toolbar=1,width=,height=');return false});});

$(document).ready(function(){
	$("#rec_adi").each(function(){
		var recs = $(this).find("a");
		if (!recs.length) {
			$(this).hide();
		}
	});
});

function ntg_Google_map_init(){
	var version= "2.6"; // modificado el 28.02.2018 por FPerez
	var ubicacion =  $("#ubicacion_canal");
	var lugar = $(".latlong >span>span", ubicacion).text().split(",");
	var contacto = $(".texto-contacto", ubicacion).html();
	var contactoT = $(".texto-contacto", ubicacion).text();
	var h_ref = $(".titulo a", ubicacion).get(0).href;
	var prevista_m = h_ref.match(/action=.*aid=(\d+).*/);
	var urldest = h_ref;
	if(prevista_m  != null){ //en prevista
		urldest =  urldest.replace("pressroom/preview","page");
		urldest += "&version="+version;
	}else{
		urldest += "?version="+version;

	}
	var latlng = new google.maps.LatLng(lugar[0].trim(), lugar[1].trim()); 
	var settings = {
		zoom: 16,
		// maxZoom: 16,
		center: latlng,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	$("#mapa").each(function() {
		map = new google.maps.Map(this, settings);
		var companyPos = new google.maps.LatLng(lugar[0].trim(), lugar[1].trim());

		var ctaLayer = new google.maps.KmlLayer({
			url: urldest,
			screenOverlays:false,
			preserveViewport:true
		});
		ctaLayer.setMap(map);

	});
}

