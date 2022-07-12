$(document).ready(function () {
	let navLink = $('.modal_menu_text').find('a');
	navLink.on("click", function (e) {
		console.log(e.target)
		//отменяем стандартную обработку нажатия по ссылке
		e.preventDefault();

		$('#modalMenu').modal('hide');

		//забираем идентификатор бока с атрибута href
		var id = $(this).attr('href'),

			//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;

		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({
			scrollTop: top
		}, 1500);
	});

	$('.modal').on('shown.bs.modal', function (e) {
		// $('.slick-slider').resize();
		$('.modal-slick').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			// dots: true,
		});
	
	});

	$( ".feedback_dropdown" ).click(function() {
			$(".map__input-file").click();
	  });
});
