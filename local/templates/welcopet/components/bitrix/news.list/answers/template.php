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
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	<div class="carousel-indicators">
	<? $i= 0;
		$b= 1;
	 foreach ($arResult["ITEMS"] as $key=> $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$i++?>" <?=($key == 0) ? "class='active' aria-current='true'" : ''?> aria-label="Slide <?=$b++?>"></button>

		<? endforeach; ?>		
	</div>
	<div class="carousel-inner news-list">

		<? foreach ($arResult["ITEMS"] as $key=> $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<div class="carousel-item news-item <?=($key == 0) ? 'active' : ''?>" >
				<div class="answers_container">
					<div class="answers_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<h4><?= $arItem["NAME"] ?></h4>
						<p><?= $arItem["PREVIEW_TEXT"] ?></p>
					</div>
				</div>
			</div>

		<? endforeach; ?>
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
