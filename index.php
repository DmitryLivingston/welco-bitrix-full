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
				<div class="prime_text"><span>
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
					<div class="pb-3">
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
		<div class="col offset-xl-1">
			<div class="about_wrap">
				<div class="row mx-0">
					<div class="col col-lg-5 px-0 order-2 order-md-1">
						<div class="about_left_side">
							<div class="about_title">
								<h2><? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"PATH" => "/include/why_title.php",
											"EDIT_TEMPLATE" => ""
										),
										false
									); ?></h2>
							</div>
							<div class="about_text">
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
		<div class="col-12 col-lg-6 px-0">
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
				<p class="how_use_text">
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
			<div class="feedback_subtitle">
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
			<div class="feedback_form">
			<?$APPLICATION->IncludeComponent(
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
		"EVENT_MESSAGE_ID" => array(
		),
		"AJAX" => "Y"
	),
	false
);?>
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