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
<div class="news-list">

	<section class="first_product_couple position-relative" id="first_product_couple">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<!-- //////////////////////////////////////////////////////////////////////// ВЕРХНЯЯ //////////////////////////////////////////////////////////////////////////////////////////// -->
			<?

			if(($arItem["SORT"] % 2) !== 0) :
			?>
				<div class="antistress" style="background-color:<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>;" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="row m-0">
						<div class="col offset-xl-1 px-0">
							<div class="row m-0">
								<div class="col-12 col-md-5 px-0 order-2 order-md-1">
									<div class="antistress_img_wrap">
										<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="antistress_img product_img">
									</div>
									<div class="col-12 col-md-7 order-1 order-md-2 d-flex d-md-none flex-column justify-content-center align-items-center">
										<p class="antistress_text">
											<?= $arItem["PREVIEW_TEXT"] ?>
										</p>
										<!-- кнопки адаптив-->
										<div class="round_links d-flex justify-content-between">
											<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
											<a href="" data-modal-id="<?= implode(',', $arItem["PROPERTIES"]["MODAL"]["VALUE"]) ?>" class="round_button pt-2 open-modal-button">состав <br><i class="fa-solid fa-plus"></i> </a>
										</div>
									</div>
								</div>
								<div class="col col-md-7 order-1 order-md-2">
									<div class="antistress_title">
										<h1><?= $arItem["NAME"] ?></h1>
										<h3><?= $arItem["PROPERTIES"]["SUBTITLE"]["VALUE"] ?></h3>
									</div>
									<p class="antistress_text d-none d-md-block">
										<?= $arItem["PREVIEW_TEXT"] ?>
									</p>
									<!-- кнопки -->
									<div class="round_links justify-content-between d-none d-md-flex">
										<a href="" data-modal-id="<?= implode(',', $arItem["PROPERTIES"]["MODAL"]["VALUE"]) ?>" class="round_button pt-2 open-modal-button">состав <br><i class="fa-solid fa-plus"></i></a>
										<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>


			<? else : ?>

				<!-- //////////////////////////////////////////////////////////////////////////////////////////// НИЖНЯЯ ///////////////////////////////////////////////////////////////////// -->
				<div class="kidney" style="background-color:<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="row m-0 h-100">
						<div class="col offset-xl-1 px-md-0">
							<div class="row m-0 h-md-100">

								<div class="col-12 col-lg-6 ps-md-0 h-md-100 kidney_content d-md-flex flex-column align-items-end">
									<div class="kidney_title">
										<h1><?= $arItem["NAME"] ?></h1>
										<h3><?= $arItem["PROPERTIES"]["SUBTITLE"]["VALUE"] ?></h3>
									</div>
									<div class="kidney_img_wrap d-block d-md-none">
										<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="kidney_img product_img mt-0">
									</div>
									<p class="kidney_text">
										<?= $arItem["PREVIEW_TEXT"] ?>
									</p>
									<div class="w-100 d-flex justify-content-center justify-content-md-start">
										<div class="round_links d-flex justify-content-between">
											<a href="" data-modal-id="<?= implode(',', $arItem["PROPERTIES"]["MODAL"]["VALUE"]) ?>" class="round_button pt-2 open-modal-button">состав <br><i class="fa-solid fa-plus"></i> </a>
											<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6 px-0 h-100 d-none d-md-flex align-items-center justify-content-center justify-content-md-start">
									<div class="kidney_img_wrap">
										<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="kidney_img product_img">
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>


			<? endif ?>


		<? endforeach; ?>
		
	</section>
	
</div>
<!-- ///////////////////////////////////////////////////////////////////////////  МОДАЛКА  ///////////////////////////////////////////////////////////////////////// -->
<?
foreach ($arResult["ITEMS"] as $arItem) {
?>
	<div class="modals-block hidden" data-ids="<?= implode(',', $arItem['PROPERTIES']['MODAL']['VALUE']) ?>">
		<div class="modals-block-inner">
			<div class="modals-block-list">
				<? foreach ($arItem['PROPERTIES']['MODAL']['VALUE'] as $modalId) : ?>
					<? $item = $arResult['MODALS'][$modalId]; ?>
					<div class="body-color" style="background-color:<?= $item["PROPERTY_COLOR_VALUE"] ?>">
						<div class="modal-body">
							<div class="modal-close"></div>
							<div class="modal-body-inner modalProduct">
								<div class="row m-0">
									<div class="col-5">
										<h5 class="modal-title" id="openModalLabel"><?= $item["NAME"] ?></h5>
										<p class="modal-subtitle" id="openModalLabel"><?= $item["PROPERTY_SUBTITLE_VALUE"] ?></p>
										<p class="modalAmount"><?= $item["PROPERTY_AMOUNT_VALUE"] ?></p>
										<div class="modalAntistressImgWrap"><img src="<?= CFile::GetPath($item["PREVIEW_PICTURE"]); ?>" alt="изображение упаковки товара велеопэт" class="modal_antistress_img"></div>
										<div class="col-7"></div>
									</div>
									<div class="col-7 d-flex flex-column justify-content-center">
										<div class="modalAntistress_content">
											<div class="modalAntistress_content_composition">
												<div class="modalAntistress_title">
													<h6>Состав</h6>
												</div>
												<div class="modalAntistress_text">
													<p><?= $item["PROPERTY_COMPOSITION_VALUE"]["TEXT"] ?></p>
												</div>
											</div>
										</div>
										<div class="modalAntistress_content_table">
											<div class="row">
												<div class="col-5 modalAntistress_left">
													<div class="modalAntistress_title">
														<h6>Добавки</h6>
													</div>
													<div><?= $item["PROPERTY_ADD_VALUE"]["TEXT"] ?></div>
												</div>
												<div class="col-5 modalAntistress_right">
													<div class="modalAntistress_title">
														<h6>Питательная ценность</h6>
													</div>
													<div><?= $item["PROPERTY_NUTRITION_VALUE"]["TEXT"] ?></div>
												</div>
												<!-- <p class="modalAntistress_bottom_text">
															Неполнорационный корм (лакомство-пребиотик). Не является лекарственным средством.
														</p> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<? endforeach;
				unset($modalId); ?>
			</div>
		</div>
	</div>
<?
}
unset($arItem);
?>