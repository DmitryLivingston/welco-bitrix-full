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
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/logo.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					); ?>
				</div>
				<div class="prime_title">
					<h1>
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/include/primetitle.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						); ?>
					</h1>
				</div>
				<div class="prime_text mobile-text"><span>
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/include/primesubtitle.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						); ?>
					</span>
				</div>
				<div class="prime_button_block d-flex align-items-center justify-content-between">
					<div class="prime_button">
						<a href="#where_bay" class="btn prime_btn_violet">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/prime_button.php",
									"EDIT_TEMPLATE" => ""
								),
								false
							); ?>
						</a>
					</div>
					<div class="order-1 order-md-2">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/include/prime_little_img.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 px-0 order-1 order-md-2">
			<div class="prime_right_side h-100">
				<div class="prime_img h-100 w-100">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/prime_big_img.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					); ?>
					<div class="prime_logo d-block d-md-none position-absolute">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/include/logo.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						); ?>
					</div>
					<span class="prime_img_text">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/include/prime_img_text.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						); ?>
					</span>
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
		<div class="col offset-xl-1 px-0">
			<div class="about_wrap">
				<div class="row mx-0">
					<div class="col col-lg-5 px-0 order-2 order-md-1">
						<div class="about_left_side">
							<div class="about_title">
								<h1><? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"PATH" => "/include/why_title.php",
											"EDIT_TEMPLATE" => ""
										),
										false
									); ?></h1>
							</div>
							<div class="about_text mobile-text">
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									".default",
									array(
										"COMPONENT_TEMPLATE" => ".default",
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/include/why_text.php",
										"EDIT_TEMPLATE" => ""
									),
									false
								); ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-7 px-0 order-1 order-md-2 d-flex align-items-center justify-content-center">
						<div class="about_img_wrap">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/why_img.php",
									"EDIT_TEMPLATE" => ""
								),
								false
							); ?>

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
			0 => "SORT",
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
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/include/answers_img.php",
						"EDIT_TEMPLATE" => ""
					),
					false
				); ?>
			</div>
		</div>
		<div class="col-12 col-lg-6 px-lg-0">
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
		<div class="col-12 col-lg-6 px-md-0">
			<div class="how_use_img_wrap w-100">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/include/how_use_img.php",
						"EDIT_TEMPLATE" => ""
					),
					false
				); ?>
			</div>
		</div>
		<div class="col-12 col-lg-6 px-md-0">
			<div class="how_use_content">
				<div class="how_use_title">
					<h2><? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"AREA_FILE_SHOW" => "file",
								"PATH" => "/include/how_use_title.php",
								"EDIT_TEMPLATE" => ""
							),
							false
						); ?></h2>
				</div>
				<p class="how_use_text mobile-text">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/how_use_text.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					); ?>
				</p>
				<div class="how_use_instruction">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/how_use_instruction.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					); ?>
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
						<h2><? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/where_bay_title.php",
									"EDIT_TEMPLATE" => ""
								),
								false
							); ?></h2>
					</div>
				</div>
			</div>
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
		</div>
	</div>
</section>
<!-- секция с формой и соцсетями -->
<section class="feedback" id="feedback">
	<div class="row m-0">
		<div class="col-12 d-flex flex-column align-items-center">
			<div class="feedback_title">
				<h2>
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/form_title.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					); ?>
				</h2>
			</div>
			<div class="feedback_subtitle mobile-text">
				<p>
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/form_subtitle.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					); ?>
				</p>
			</div>

			<div class="feedback_form" style="position:relative">
				<?/* $APPLICATION->IncludeComponent(
					"WELCO:main.feedback",
					"welcopet_form",
					array(
						"REQUIRED_FIELDS" => array(
							0 => "EMAIL",
						),
						"COMPONENT_TEMPLATE" => "welcopet_form",
						"USE_CAPTCHA" => "N",
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"EMAIL_TO" => "livingston.dd92@gmail.com",
						"EVENT_MESSAGE_ID" => array(),
						"AJAX" => "Y"
					),
					false
				); */ ?>


				<form id="form-rules-return" method="post" enctype="multipart/form-data" style="max-width: 100%;">
					<div class="input-group phone_group justify-content-between mb-3">

						<div class="text-field">
							<label class="text-field__label" for="usermail">Ваша электронная почта</label>
							<input class="text-field__input d-block" type="email" name="email" value="<?= $arResult["AUTHOR_EMAIL"] ?>" id="usermail">
						</div>

						<div class="text-field">
							<label class="text-field__label" for="userphone">Ваш телефон</label>
							<input class="text-field__input d-block" type="tel" name="phone" value="<?= $arResult["user_phone"] ?>" id="userphone">
						</div>

					</div>

					<div class="input-group feedback_text_area_group">
						<div class="text-field w-100">
							<label class="text-field__label" for="usertext">Ваш вопрос</label>
							<textarea class="text-field__textarea d-block" name="name" id="usertext"></textarea>
						</div>
					</div>

					<div class="form-group hidden-drop" style="visibility:hidden; opacity:0; position:absolute; top:0; left:0;">
						<span class="file_name_rules">Копия 1</span>
						<div class="fl_upld">
							<label><input id="fl_inp1" class="map__input-file form-control" type="file" name="file1" placeholder="Копия чека">Выберите файл</label>
							<div id="fl_nm1">Файл не выбран</div>
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
								<input class="form-check-input shadow-none mt-0" type="checkbox" value="" name="check" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">Принимаю условия <a href="/privacy/">Политики конфиденциальности</a></label>
							</div>
							</div>
						
							<div class="col-12 col-md-4">
								<div class="d-flex justify-content-center justify-content-lg-end align-items-end h-100 w-100">
									<div class="result error" hidden></div>
									<button class="button_fill map__button modal__button" type="submit">Спросить</button>
								</div>
							</div>
						</div>
					</div>
				<!-- loader -->
				<div class="formStatus-loaded">
					<img class="formStatus-loaded-icon" id="loadImg" src="/return/load.gif">
				</div>
				<!-- <img style="display: none;" id="loadImg" src="/return/load.gif" /> -->
				</form>
				


			</div>
		</div>
		
		<script>

		</script>


	</div>
	<!-- </div> -->

	<div class="modal fade modal__registration modal__call" id="myModalCall-done" tabindex="-1" role="dialog" aria-labelledby="myModalCallLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title map__heading" id="myModaCalllLabel">Уведомление</h4>
				</div>
				<div class="modal-body">
					<span class="result done">
						Ваша заявка успешно отправлена.

					</span>
				</div>
				<div class="modal-footer">
					<button class="button_fill map__button modal__button" data-dismiss="modal" aria-label="Close">Ок</button>
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

	<!-- </div>

	</div>
	</div> -->
</section>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>