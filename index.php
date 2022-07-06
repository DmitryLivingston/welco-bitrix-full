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
								<source srcset="<?= SITE_TEMPLATE_PATH; ?>/img/planshet-dog.png" media="(max-width: 768px)">
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
<section class="answers" id="answers">
	<div class="row m-0">
		<div class="col-12 col-lg-6 px-0">
			<div class="answers_img_wrap w-100">
				<img src="<?= SITE_TEMPLATE_PATH; ?>/img/no.png" alt="заглушка отсутствующего изображения" class="answers_img">
			</div>
		</div>
		<div class="col-12 col-lg-6 px-0">
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"answers",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
					"IBLOCK_ID" => "4",	// Код информационного блока
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"FILTER_NAME" => "",	// Фильтр
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
					"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
					"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
					"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
					"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
					"DISPLAY_DATE" => "Y",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SHOW_404" => "N",	// Показ специальной страницы
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				),
				false
			); ?>
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

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"wherebay",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "3",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
); ?>

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
						<label class="text-field__label" for="usermail">Ваша электронная почта</label>
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