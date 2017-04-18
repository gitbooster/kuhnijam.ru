$(document).ready(function () {
	// Всплывающие формы
	$('.pop-up').click(function(e){
		var btn = $(this),
			title = $(this).data('title'),
			desc = $(this).data('desc'),
			ordername = $(this).data('ordername');
				
		$('#pop-up').bPopup({
			positionStyle: 'fixed',
			onOpen:  function(){ 
				$('#pop-up h3').html(title);
				$('#pop-up p').html(desc);
				$('#pop-up .ordername').val(ordername);
				if(btn.data('id') == 'gift') {
					$('#pop-up .btn').val('Получить подарок');
				}
				if(btn.data('id') == 'upload') {
					$('#pop-up .upload').show();
				}
			},
			onClose: function() {
			   $(this).find('.required').each( function(){
				   $(this).removeClass('error'); 
			   });
			   $('#pop-up .btn').val('Отправить');
			   $('#pop-up form').show();
			   $('#pop-up .upload').hide();
			}			
		});	
		e.preventDefault();
	});
	
	$('.pop-up-promo').click(function(e){			
		$('#pop-up-promo').bPopup({
			positionStyle: 'fixed',
			onClose: function() {
			   $(this).find('.required').each( function(){
				   $(this).removeClass('error'); 
			   });
			}			
		});	
		e.preventDefault();
	});
	
	$('#catalog .catalog li').click(function(){
		var id = $(this).data('id'),
			parent_id = $(this).closest('ul').data('id');	
				
		$('#pop-up-catalog').bPopup({
			onOpen:  function(){
				$(this).find('ul').each( function(){
					if($(this).data('id') == parent_id) {
						$(this).show();
						$(this).find('li').each( function(){
							if($(this).data('id') == id) {
								$(this).show();
							}
						});
					}
				});
			},
			onClose: function() {
			   $('#pop-up-catalog ul').hide();
			   $('#pop-up-catalog li').hide();
			}							
		});	
	}); //end forms
	
	// Отправка письма с помощью AJAX
    $('form').submit(function(e){
        e.preventDefault();
		var errors = false,
			ordername = $(this).find('.ordername').val();
		
		$(this).find('.required').each(function(){
			if($(this).val() == '' && $(this).is(":visible")) { 
				errors = true; 
				$(this).addClass('error'); 
			} else {
				$(this).removeClass('error'); 
			}	
		});	
		
		if(errors == false) {
			$.ajax({
				url: 'php/send.php',
                type: 'post',
				data: new FormData(this), 
				processData: false, 
				contentType: false,
				success: function(data){
					$('#pop-up').bPopup().close();
					$('#pop-up-success').bPopup({
						positionStyle: 'fixed',
						speed: 450,
						transition: 'slideDown',
						onOpen: function (){
							if(ordername == 'Получить номера') {
								$(this).find('p').html('Спасибо, мы отправим номера в ближайшее время...');
							} else {
								$(this).find('p').html('Спасибо, мы Вам перезвоним..');
							}
						}
					});
					//yaCounter.reachGoal('ORDER'); return true;
				}
            });
		}
	}); // end submit()	
	
	// Навигация для девайсов
	$('header .device-nav-btn, header .device-nav li').click(function(){
		$('header .device-nav').slideToggle();
	}); // end
	
	
	// Меню категорий для каталога
	$('#catalog .nav a').click(function(e){
		e.preventDefault();
		var category = $(this).data('id');
		
		$('#catalog .nav a').each(function(){
			if($(this).data('id') != category) { 
				$(this).removeClass('active'); 
			} else {
				$(this).addClass('active');
			}
		});
	
		$('#catalog .catalog ul').each(function(){
			if($(this).data('id') != category) { 
				$(this).removeClass('active'); 
			} else {
				$(this).addClass('active');
			}
		});
	}); // end
	
	// Пагинация для каталога
	$('#catalog .pagination a').click(function(e){
		e.preventDefault();
		var number = $(this).data('id');
		
		$(this).closest('.pagination').find('a').each(function(){
			if($(this).data('id') != number) { 
				$(this).removeClass('active'); 
			} else {
				$(this).addClass('active');
			}
		});
		
		$(this).closest('ul').find('.content').each(function(){
			if($(this).data('id') != number) { 
				$(this).removeClass('active'); 
			} else {
				$(this).addClass('active');
			}
		});
	}); 	
	
	$('#catalog .pagination .prev').click(function(){
		var pag = $(this).closest('.pagination').find('a.active');
		
		if(pag.prev('a').length) {
			pag.removeClass('active');
			pag.prev('a').addClass('active');
			var id = pag.prev('a').data('id');
		} else {
			pag.removeClass('active');
			pag.closest('.pagination').find('a').last().addClass('active');
			var id = pag.closest('.pagination').find('a').last().data('id');
		}
		
		$(this).closest('ul').find('.content').each(function(){
			if($(this).data('id') != id) { 
				$(this).removeClass('active'); 
			} else {
				$(this).addClass('active');
			}
		});
	});

	$('#catalog .pagination .next').click(function(){
		var pag = $(this).closest('.pagination').find('a.active');
		
		if(pag.next('a').length) {
			pag.removeClass('active');
			pag.next('a').addClass('active');
			var id = pag.next('a').data('id');
		} else {
			pag.removeClass('active');
			pag.closest('.pagination').find('a').first().addClass('active');
			var id = pag.closest('.pagination').find('a').first().data('id');
		}
		
		$(this).closest('ul').find('.content').each(function(){
			if($(this).data('id') != id) { 
				$(this).removeClass('active'); 
			} else {
				$(this).addClass('active');
			}
		});
	}); // end
	
	//Навигация для каталога в поп-ап
	$('#pop-up-catalog .prev').click(function(){
		var catalog_item = $('#pop-up-catalog li:visible');
		
		catalog_item.hide();
		if(catalog_item.prev().length) {
			catalog_item.prev().show();
		} else {
			catalog_item.closest('ul').find('li').last().show();
		}
	});
	
	$('#pop-up-catalog .next').click(function(){
		var catalog_item = $('#pop-up-catalog li:visible');
		
		catalog_item.hide();
		if(catalog_item.next().length) {
			catalog_item.next().show();
		} else {
			catalog_item.closest('ul').find('li').first().show();
		}
	}); // end
	
	// Catalog nav width
	function catalog_category() {
		var category_item = 0;
		
		$("#catalog .nav a").each(function () {
			var w_block = parseInt($(this).width());
			if(w_block > category_item) {
				category_item = w_block;
			};
		});
		
		$("#catalog .nav a").width(category_item);
	} // end
	
	catalog_category();
	
	// Калькулятор
	$('#calculator input[type="radio"]').on('change', function(){
		if($(this).attr('id') == 'design1') { 
			$('#calculator .sizes').css('background-position', '0 0'); 
			$('#calculator .range-vertical-l').hide();
			$('#calculator .range-vertical-r').hide();
			$('#s-amount-2').val('');
			$('#s-amount-3').val('');
		}
		if($(this).attr('id') == 'design2') { 
			$('#calculator .sizes').css('background-position', '0 -235px');
			$('#calculator .range-vertical-l').show();
			$('#calculator .range-vertical-r').show();
		}
		if($(this).attr('id') == 'design3') { 
			$('#calculator .sizes').css('background-position', '0 -470px');
			$('#calculator .range-vertical-l').show();
			$('#calculator .range-vertical-r').hide();
			$('#s-amount-2').val('1 м 00 см');
			$('#s-range-2').slider({ value: 100 });
			$('#s-amount-3').val('0');
		}
		if($(this).attr('id') == 'design4') { 
			$('#calculator .sizes').css('background-position', '0 -705px');		
			$('#calculator .range-vertical-l').hide();
			$('#calculator .range-vertical-r').show();
			$('#s-amount-3').val('1 м 00 см');
			$('#s-range-3').slider({ value: 100 });
			$('#s-amount-2').val('0');
		}
	});
	
	$('#s-range-1').slider({
		range: "min",
		min: 1,
		max: 500,
		value: 100,
		slide: function( event, ui ) {
			$("#s-amount-1").val(toMeter(ui.value));
		}
    });
	
	$('#s-range-2').slider({
		orientation: "vertical",
		range: "min",
		min: 1,
		max: 500,
		value: 100,
		slide: function( event, ui ) {
			$("#s-amount-2").val(toMeter(ui.value));
		}
    });
	
	$('#s-range-3').slider({
		orientation: "vertical",
		range: "min",
		min: 1,
		max: 500,
		value: 100,
		slide: function( event, ui ) {
			$("#s-amount-3").val(toMeter(ui.value));
		}
    }); // end
		
	// Формат ед.измерения калькулятор
	function toMeter(n) {
		var digits, delim = ' м ';

		n = n.toFixed(0);
		digits = n.length > 2 ? n.length % 2 : 0;

		return (digits ? n.substr(0, digits) + delim : '') + n.substr(digits).replace(/(\d{3})(?=\d)/g, "$1" + delim) + ' см ';
	} // end
	
	// Слайдер для производства
	$('#manufacture .items').owlCarousel({
		loop: true,
		nav: true,
		items: 1,
		dots: false,
		navText: false
	}); // end
	
	// Динамический заголовок
	$("#firstpage .dynamic-title").owlCarousel({
		loop: true,
		nav: false,
		dots: false,
		items: 1,
		autoHeight: true,
		autoplay: true,
		autoplayTimeout: 3000
	});
	
	// Статус загрузки файла
	var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;
	var inp = $('#pop-up form input[type="file"]');
	
	inp.change(function(){
        var file_name;
        if( file_api && inp[ 0 ].files[ 0 ] ) 
            file_name = inp[ 0 ].files[ 0 ].name;
        else
            file_name = inp.val().replace( "C:\\fakepath\\", '' );
 
        if( ! file_name.length )
            return;
 
        $('#pop-up .result').text( file_name );
    }).change(); // end
		
	// Фикс. шапки
	$(window).scroll(function() {
		var top = $(document).scrollTop();
		if (top < 10) $("header").css({top: '0', position: 'relative'});
		else $("header").css({top: '0px', width: '100%',  position: 'fixed'});
	}); // end
  
	// Прокрутка при клике и обработка скроллинга
	var headerHeight = $('header').height();
	
	$("a.header-nav-link").click(function(e) {
		e.preventDefault();
		var offsetTop = $("#"+$(this).data("target")).offset().top - headerHeight;
		$('html, body').animate({scrollTop: offsetTop}, 1000);
	});
	
	$(document).scroll(function(){
		var offsets = [];
		$('nav a.header-nav-link').each(function(index, element){
			offsets.push($("#" + $(element).data('target')));
		});
		
		offsets.push($(document).height());
		var docScroll = $(document).scrollTop() + headerHeight + $(window).height()/2 ;
		for (var i = 0; i < offsets.length - 1; i++) {
			if (docScroll >= offsets[i].offset().top && docScroll < (offsets[i].offset().top + offsets[i].height())) {
				$('nav a.active').removeClass('active');
				$('nav a.header-nav-link').eq(i).addClass('active');
				break;
			}  else {
				$('nav a.active').removeClass('active');
			};
		};
	}); // end
	
	// Поп-ап подарок
	$(window).bind('scroll.once',function(){
		var leadTop = $('#lead-form').offset().top,
			leadBottom = $('#lead-form').offset().top + $('#lead-form').height(),
			docScroll = $(document).scrollTop() + headerHeight + $(window).height()/2;
		if (docScroll >= leadTop && docScroll < leadBottom) {	
			$('#pop-up-promo').bPopup({positionStyle: 'fixed'});
			open_promo();
		}
	});	
	function open_promo(){$(window).unbind('scroll.once')}; // end
});