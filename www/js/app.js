jQuery(document).ready(function($) {

	let headerBlock = $('header'),
	someValue = 10;

	$(document).scroll(function() {
		if ($(this).scrollTop() > someValue) {
			headerBlock.addClass('header_shadow')
		}
		else {
			headerBlock.removeClass('header_shadow')
		}
	})	

	// примитивная сортировка	
	$('.catalog__sorting').click(function(event) {
		$(this).toggleClass('open');
		if ($(this).hasClass('open')) {
			$('.catalog__sorting__item').addClass('active');
		}
	});
	$('.catalog__sorting__item').click(function(event) {
		//console.log(event.target);

		$('.catalog__sorting__item').removeClass('active');
		$(this).addClass('active');
	});


	// галочки фильтра
	$('.catalog__filter__block label').click(function(event) {

		if ($(this).find('input').is(':checked')) {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});

	$('.catalog__filter__btn_reset').click(function(event) {
		$('.catalog__filter__block label').removeClass('active');
	});

	$('.catalog__filter__btn_save').click(function(event) {
		event.preventDefault();
		alert('запущен фильтр!');
	});

	//мобильный фильтр
	$('.catalog__filter__mobile_icon').click(function(event) {
		$('.catalog__filter__mobile').toggleClass('show');
	});

	//мобильное меню
	$('.header__mobile_menu__icon').click(function(event) {
		$('.header__mobile_menu').toggleClass('show');
	});

});