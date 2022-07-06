<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<!-- первый экран -->
<section class="prime position-relative">
	<div class="row m-0">
		<div class="col-12 col-xl-5 offset-xl-1 px-3 order-2 order-md-1">
			<div class="prime_left_side">
				<div class="prime_logo d-none d-md-block">
					<img class="prime_logo-img" src="<?= SITE_TEMPLATE_PATH; ?>/img/welco_logo 1.png" alt="логотип компании вэлкопэт">
				</div>
				<div class="prime_title">
					<h1>Натуральный <span class="orange">пребиотик в виде лакомства</span> для
						вашего питомца</h1>
				</div>
				<div class="prime_text"><span>Пребиотик Welco улучшает работу желудочно-кишечного
						тракта
						и способствуют усилению естественной защиты организма животных от
						инфекций</span>
				</div>
				<div class="prime_button_block d-flex align-items-center justify-content-between">
					<div class="prime_button">
						<a href="#where_bay" class="btn prime_btn_violet">
							Купить Welco
						</a>
					</div>
					<img src="<?= SITE_TEMPLATE_PATH; ?>/img/packs.png" alt="три пауча вэлкопэт" class="pb-3">
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 px-0 order-1 order-md-2">
			<div class="prime_right_side h-100">
				<div class="prime_img h-100 w-100">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/prime-planshet.png" media="(max-width: 768px)">
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/prime-mobile" media="(max-width: 360px)">
						<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/Prime.png">
						<img src="<?= SITE_TEMPLATE_PATH; ?>/img/Prime.png" alt="изображение двух пачек товара велкопэт для кошек и собак на оранжевом фоне" class="prime_bg_img">
					</picture>
					<div class="prime_logo d-block d-md-none position-absolute">
						<img class="prime_logo-img mobile_logo" src="<?= SITE_TEMPLATE_PATH; ?>/img/welco_logo 1.png" alt="логотип компании вэлкопэт">
					</div>
					<span class="prime_img_text">Неполнорационный корм (лакомство-пребиотик). не является лекарственным средством.</span>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-button d-none d-md-block">
		<a href="#about" id="about-scroll-btn"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/chevron down.png" alt="кнопка листать вниз"></a>
	</div>
</section>
<!-- секция зачем животным пребиотики -->
<section class="about position-relative" id="about" name="about">
	<div class="row mx-0">
		<div class="col offset-xl-1">
			<div class="about_wrap">
				<div class="row mx-0">
					<div class="col col-lg-5 px-0 order-2 order-md-1">
						<div class="about_left_side">
							<div class="about_title">
								<h2>Зачем животным <span class="orange">пребиотики?</span></h2>
							</div>
							<div class="about_text">
								<p>
									Пребиотики - это составляющие продуктов
									питания,
									которые служат пищей пребиотическим бактериям.
								</p>

								<p>
									Пребиотики стимулируют рост и жизнедеятельность полезной
									микрофлоры в
									кишечнике вашего питомца.
									Попадая в кишечник, пребиотики не перевариваются и не
									растворяются, а
									питают
									полезные бактерии и являются благоприятной средой для их
									развития.
								</p>

								<p>
									Welco - источник полезных пребиотических волокон, которые
									способствуют
									восстановлению полезной микрофлоры в кишечнике, улучшая
									пищеварение и
									помогая полноценно усваивать питательные вещества из пищи.
								</p>
								</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-7 px-0 order-1 order-md-2 d-flex align-items-center justify-content-center">
						<div class="about_img_wrap">

							<picture>
								<source srcset="img/planshet-dog.png" media="(max-width: 768px)">
								<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/why-need-dog.png">
								<img src="<?= SITE_TEMPLATE_PATH; ?>/img/why-need-dog.png" alt="фотография корги">
							</picture>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- блок с продукцией -->
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"product", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "product",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "SUBTITLE",
			1 => "POSITION",
			2 => "COLOR",
			3 => "MODALID",
			4 => "VITA",
			5 => "VATAAMOUNT",
			6 => "MACROAMOUNT",
			7 => "MICROAMOUNT",
			8 => "AMOUNT",
			9 => "MACRO",
			10 => "MICRO",
			11 => "COMPOSITION",
			12 => "KJ",
			13 => "KKAL",
			14 => "ADD",
			15 => "NUTRITION",
			16 => "COLOR",
			17 => 'MODALS',
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>

<!-- секция ответы на вопросы -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= SITE_TEMPLATE_PATH; ?>/img/prime-planshet.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= SITE_TEMPLATE_PATH; ?>/img/prime-planshet.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= SITE_TEMPLATE_PATH; ?>/img/prime-planshet.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="answers" id="answers">
	<div class="row m-0">
		<div class="col-12 col-lg-6 px-0">
			<div class="answers_img_wrap w-100">
				<img src="<?= SITE_TEMPLATE_PATH; ?>/img/no.png" alt="заглушка отсутствующего изображения" class="answers_img">
			</div>
		</div>
		<div class="col-12 col-lg-6 px-0">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Почему пищеварение питомца так важно?</h4>
								<p>Потому что нормальная работа желудочно-кишечного тракта – это залог всего здоровья организма. Кошки и собаки совсем как люди – страдают от нарушений пищеварения из-за стресса, неполноценного питания или приема антибиотиков. И для скорейшего возврата к нормальной жизни любимца следует позаботиться о быстром восстановлении естественной функциональной микрофлоры кишечника.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Причем тут вообще иммунитет?</h4>
								<p>А вот причем: более 70% иммунитета обеспечивает здоровый кишечник. Если он работает плохо – еда не усваивается. Недостаток витаминов и минералов, белков и жиров делает животных беззащитными перед инфекциями. Чтобы восстановить иммунную систему, следует помочь организму усваивать все полезные нутриенты из пищи.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Как именно работает Welco?</h4>
								<p>Лакомство Welco содержит натуральный инновационный пребиотический комплекс FOS+MOS PREBIOTIC FORMULA, который помогает хорошо жить полезным бактериям в кишечнике. Фруктоолигосахариды (FOS)+ маннаолигосахариды (MOS) улучшают пищеварение и адаптивность животных, выводят токсины, а также защищают организм от проникновения патогенных вирусов и микроорганизмов, помогая естественному иммунитету кошек и собак.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Поможет ли Welco, если у моего домашнего животного чувствительное пищеварение?</h4>
								<p>Да, точно поможет. Ведь в составе лакомства натуральные компоненты, специально подобранные ветеринарными специалистами для бережной заботы о пищеварении таких питомцев и минимизации негативных проявлений работы их особенной пищеварительной системы.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Как понять, что у моего питомца кожа и шерсть, требующие особого внимания?</h4>
								<p>На самом деле довольно просто: если кожа питомца шелушится, потеряла упругость, а шерсть тусклая и ломкая – вы получили сигнал о помощи. Ведь внешность – это важно, и для животных особенно: это показатель их здоровья.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Почему пищеварение питомца так важно?</h4>
								<p>Потому что нормальная работа желудочно-кишечного тракта – это залог всего здоровья организма. Кошки и собаки совсем как люди – страдают от нарушений пищеварения из-за стресса, неполноценного питания или приема антибиотиков. И для скорейшего возврата к нормальной жизни любимца следует позаботиться о быстром восстановлении естественной функциональной микрофлоры кишечника.</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="answers_container">
							<div class="answers_item">
								<h4>Не хочу усложнять жизнь себе и питомцу, насколько комфортно мне будет применять такой продукт?</h4>
								<p>Будет просто и удобно, ведь давать вкусное лакомство кошке или собаке Вам будет только в удовольствие. Которое, тем не менее, поможет четвероногому члену семьи быстро стать здоровым изнутри и красивым снаружи.</p>
							</div>
						</div>
					</div>

				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>

</section>
<!-- секция как применять -->
<section class="how_use position-relative" id="how_use">
	<div class="row m-0">
		<div class="col-12 col-lg-6 px-0">
			<div class="how_use_img_wrap w-100">
				<img src="<?= SITE_TEMPLATE_PATH; ?>/img/how-use.png" alt="ряд из серых паучей с логотипом велкопэт" class="how_use_img w-100 h-100">
			</div>
		</div>
		<div class="col-12 col-lg-6 px-0">
			<div class="how_use_content">
				<div class="how_use_title">
					<h2>как применять welco?</h2>
				</div>
				<p class="how_use_text">
					Welco разработан для ежедневного использования <br> в течение 7 дней. 1 пауч (35
					мл)
					в день предназначен для животного любого веса, возраста и породы.
					<br>
					<br>
					Давать Welco животному следует перед утренним
					кормлением.
				</p>
				<div class="how_use_instruction">
					<img src="<?= SITE_TEMPLATE_PATH; ?>/img/how-use-instruction.png" alt="инструкция по использованию корма велкопэт">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- секция где купить -->
<section class="where_bay position-relative" id="where_bay">
	<div class="row m-0">
		<div class="col-10 offset-1 px-0">
			<div class="row m-0">
				<div class="col">
					<div class="where_bay_title">
						<h2>где купить welco?</h2>
					</div>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-12 col-md-6 col-lg-4">
					<h4 class="where_bay_item">
						4 лапы
					</h4>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<h4 class="where_bay_item">
						Бетховен
					</h4>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<h4 class="where_bay_item">
						КЗВС
					</h4>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<h4 class="where_bay_item">
						магизоо
					</h4>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<h4 class="where_bay_item">
						petshop
					</h4>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<h4 class="where_bay_item where_bay_item_special">
						мокрый нос
					</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- секция с формой и соцсетями -->
<section class="feedback" id="feedback">
	<div class="row m-0">
		<div class="col-12 d-flex flex-column align-items-center">
			<div class="feedback_title">
				<h2>Консультация ветеринарного специалиста</h2>
			</div>
			<div class="feedback_subtitle">
				<p>Наши ветеринарные врачи проконсультируют вас и помогут с выбором продукции Welco
				</p>
			</div>
			<div class="feedback_form">
				<div class="input-group phone_group justify-content-between mb-3">
					<div class="text-field">
						<label class="text-field__label" for="userphone">Ваш телефон</label>
						<input class="text-field__input d-block" type="tel" name="userphone" id="userphone" placeholder="+7 928 978 59 87">
					</div>
					<div class="text-field">
						<label class="text-field__label" for="usermail">Ваша электронная
							почта</label>
						<input class="text-field__input d-block" type="email" name="usermail" id="usermail" placeholder="agitagrand@gmail.com">
					</div>

				</div>
				<div class="input-group feedback_text_area_group">
					<div class="text-field w-100">
						<label class="text-field__label" for="usertext">вопрос</label>
						<textarea class="text-field__textarea d-block" name="usertext" id="usertext" placeholder="Задайте свой вопрос"></textarea>
					</div>
				</div>
				<div class="feedback_dropdown_wrap">
					<div class="row m-0">
						<div class="col-12 col-md-8">
							<div class="feedback_dropdown">
								<input type="file" id="dropdown" name="dropdown" accept="image/png, image/jpeg, image/jpg">
								<img src="<?= SITE_TEMPLATE_PATH; ?>/img/Shape.svg" alt="стилизованное синее облако с белой стрелкой внутри">
								<span class="feedback_dropdown_text">Прикрепить файл в формате JPG. JPEG. PNG</span>
							</div>
							<div class="form-check mb-4 mb-lg-0 d-flex align-items-center">
								<input class="form-check-input shadow-none mt-0" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">Принимаю условия <a href="#">Политики конфиденциальности</a></label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="d-flex justify-content-center justify-content-lg-end align-items-end h-100 w-100">
								<div class="btn btn-primary">Спросить</div>
							</div>
						</div>
					</div>
				</div>
				<div class="social">
					<div class="row m-0">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="social_wrap d-flex justify-content-between">
									<a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/social/vk 2.svg" alt="значок в контакте"></a>
									<a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/social/yout 1.svg" alt="значок ютуба"></a>
									<a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/social/dzen 1.svg" alt="значок яндекс дзен"></a>
									<a href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/social/insta 1.svg" alt="значок инстаграма"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>