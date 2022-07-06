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

	// $('.modal-slick').slick();
	// setting-name: setting-value);

	// $(".modal").on("hide.bs.modal", function () {
	// 	$(".modal-slick").slick('destroy').html("");
	// });
	$('.modal').on('shown.bs.modal', function (e) {
		// $('.slick-slider').resize();
		$('.modal-slick').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			// dots: true,
		});
	
	});

	// $('#modalGoods').on('hidde.bs.modal', function () {
		// $('.slick-slider').resize();
	//   });

	// var modalsID =  jQuery('.modalProduct[имя_атрибутаs="значение_атрибута"]')

});
