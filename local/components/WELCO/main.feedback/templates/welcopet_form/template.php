<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
	<? if (!empty($arResult["ERROR_MESSAGE"])) {
		foreach ($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if ($arResult["OK_MESSAGE"] <> '') {
	?><div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
																}
																	?>

	<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
		<?= bitrix_sessid_post() ?>
		<div class="input-group phone_group justify-content-between mb-3">

			<div class="mf-email">
				
				<div class="text-field">
					<label class="text-field__label" for="usermail">Ваша электронная почта</label>
					<input class="text-field__input d-block" type="email" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>" id="usermail" placeholder="test@gmail.com">
				</div>
			</div>


			<div class="mf-phone">
				
				<div class="text-field">
					<label class="text-field__label" for="userphone">Ваш телефон</label>
					<input class="text-field__input d-block" type="tel" name="user_phone" value="<?= $arResult["user_phone"] ?>" id="userphone">
				</div>
			</div>

		</div>
		<div class="mf-message">
			
			<div class="input-group feedback_text_area_group">
				<div class="text-field w-100">
					<label class="text-field__label" for="usertext">вопрос</label>
					<textarea class="text-field__textarea d-block" name="MESSAGE" id="usertext" placeholder="Задайте свой вопрос"><?= $arResult["MESSAGE"] ?></textarea>
				</div>
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
						<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
						<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>" class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>

		<? if ($arParams["USE_CAPTCHA"] == "Y") : ?>
			<div class="mf-captcha">
				<div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
				<input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40" alt="CAPTCHA">
				<div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?></div>
				<input type="text" name="captcha_word" size="30" maxlength="50" value="">
			</div>
		<? endif; ?>
		
	</form>
</div>

<!-- <div class="input-group phone_group justify-content-between mb-3">
	<div class="text-field">
		<label class="text-field__label" for="userphone">Ваш телефон</label>
		<input class="text-field__input d-block" type="tel" name="user_phone" value="<?= $arResult["user_phone"] ?>" id="userphone">
	</div>
	<div class="text-field">
		<label class="text-field__label" for="usermail">Ваша электронная почта</label>
		<input class="text-field__input d-block" type="email" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>" id="usermail" placeholder="test@gmail.com">
	</div>

</div> -->
<!-- <div class="input-group feedback_text_area_group">
	<div class="text-field w-100">
		<label class="text-field__label" for="usertext">вопрос</label>
		<textarea class="text-field__textarea d-block" name="MESSAGE" id="usertext" placeholder="Задайте свой вопрос"><?= $arResult["MESSAGE"] ?></textarea>
	</div>
</div> -->
<!-- <div class="feedback_dropdown_wrap">
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
</div> -->