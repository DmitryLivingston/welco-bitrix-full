<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
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
			<div class="row m-0 news-list">
				<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
					<?= $arResult["NAV_STRING"] ?><br />
				<? endif; ?>
				<? foreach ($arResult["ITEMS"] as $arItem) : ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>

					<div class="col-12 col-md-6 col-lg-4 news-item">
						<span class="where_bay_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<?= $arItem["NAME"] ?>
						</span>
					</div>
				<? endforeach; ?>
				<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
					<br /><?= $arResult["NAV_STRING"] ?>
				<? endif; ?>
			</div>
		</div>
	</div>
</section>