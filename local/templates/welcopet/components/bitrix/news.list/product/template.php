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
	<?/* if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; */ ?>
	<section class="first_product_couple position-relative" id="first_product_couple">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<!-- вычисление id модалок -->

			<!-- <div class="d-none samson" data-modal-id="<?=implode(',',$arItem["PROPERTIES"]["MODAL"]["VALUE"])?>"></div>
			<script>
				$(document).ready(function() {
					let modalsIds = [];
					$(".samson").each((index,item) => {
						modalsIds.push($(item).attr('data-modal-id'));
					}) -->
					<!-- // var modalsID = $(".samson").attr("data-modal-id");
					// console.log(modalsID); -->
					<!-- $('.modalProduct').attr('id', 'modal'+modalsID);
					$('.open-modal-button').attr('data-bs-target', 'modal'+modalsID);
				}); -->
			<!-- </script> -->

			<!-- //////////////////////////////////////////////////////////////////////// ВЕРХНЯЯ //////////////////////////////////////////////////////////////////////////////////////////// -->
			<?

			$status = $arItem["PROPERTIES"]["POSITION"]["VALUE"];
			if ($status == 'Верхний') :
			?>
				<?/*print_r($arItem)*/ ?>
				<div class="antistress" style="background-color:<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>;" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="row m-0">
						<div class="col offset-xl-1 px-0">
							<div class="row m-0">
								<div class="col-12 col-md-5 px-0 order-2 order-md-1">
									<div class="antistress_img_wrap">
										<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="antistress_img product_img">
									</div>
									<div class="col-12 col-7 order-1 order-md-2 d-flex d-md-none flex-column justify-content-center align-items-center">
										<p class="antistress_text">
											<?= $arItem["PREVIEW_TEXT"] ?>
										</p>
										<!-- кнопки -->
										<div class="round_links d-flex justify-content-between">
											<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
											<a href="" data-bs-toggle="modal" data-bs-target="#openModal-<?= $arItem["ID"] ?>" class="round_button pt-2 open-modal-button">состав <br><i class="fa-solid fa-plus"></i> </a>
										</div>
									</div>
								</div>
								<div class="col col-7 order-1 order-md-2">
									<div class="antistress_title">
										<h1><?= $arItem["NAME"] ?></h1>
										<h3><?= $arItem["PROPERTIES"]["SUBTITLE"]["VALUE"] ?></h3>
									</div>
									<p class="antistress_text d-none d-md-block">
										<?= $arItem["PREVIEW_TEXT"] ?>
									</p>
									<!-- кнопки -->
									<div class="round_links justify-content-between d-none d-md-flex">
										<a href="" data-bs-toggle="modal" data-modal-id="<?=implode(',',$arItem["PROPERTIES"]["MODAL"]["VALUE"])?>" data-bs-target="#openModal-<?= $arItem["ID"] ?>" class="round_button pt-2 open-modal-button">состав <br><i class="fa-solid fa-plus"></i></a>
										<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
									</div>
								</div>
							</div>

						</div>
					</div>
					
				</div>


			<? elseif ($status !== 'Верхний') : ?>

				<!-- //////////////////////////////////////////////////////////////////////////////////////////// НИЖНЯЯ ///////////////////////////////////////////////////////////////////// -->
				<div class="kidney" style="background-color:<?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="row m-0 h-100">
						<div class="col offset-xl-1 px-0">
							<div class="row m-0 h-100">

								<div class="col-lg-6 ps-0 h-100 kidney_content d-flex flex-column align-items-end">
									<div class="kidney_title">
										<h1><?= $arItem["NAME"] ?></h1>
										<h3><?= $arItem["PROPERTIES"]["SUBTITLE"]["VALUE"] ?></h3>
									</div>
									<p class="kidney_text">
										<?= $arItem["PREVIEW_TEXT"] ?>
									</p>
									<div class="round_links d-flex justify-content-between">
										<a href="" data-bs-toggle="modal" data-bs-target="#openModal-<?= $arItem["ID"] ?>" class="round_button pt-2">состав <br><i class="fa-solid fa-plus"></i> </a>
										<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
									</div>
								</div>
								<div class="col-lg-6 px-0 h-100 d-flex align-items-center">
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
			<!-- ///////////////////////////////////////////////////////////////////////////  МОДАЛКА  ///////////////////////////////////////////////////////////////////////// -->
	<div class="modal fade modalProduct" id="" tabindex="-1" aria-labelledby="openModalLabel" aria-hidden="true">
		<div class="modal-wrap modal-slick">
			<?/* foreach ($arResult["MODALS"] as $item) : */ ?>

			<?/*<pre class="samson d-none"><?print_r($arItem["PROPERTIES"]["MODAL"]["VALUE"])?></pre>*/ ?>
			<?/*<pre class="samson2 d-none"><?print_r($item["ID"])?></pre>*/ ?>

			<div class="modal-slick-item">
				<div class="modal-dialog modal-xl modal-dialog-centered" style="background-color: <?= $item["PROPERTY_COLOR_VALUE"] ?>">
					<div class="modal-content h-100">
						<div class="modal-header border-0">
							<h5 class="modal-title" id="openModalLabel"><?= $item["NAME"] ?></h5>
							<button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row m-0">
								<div class="col-5">
									<p class="modal-subtitle" id="openModalLabel"><?= $item["PROPERTY_SUBTITLE_VALUE"] ?></p>
									<p class="modalAmount"><?= $item["PROPERTY_AMOUNT_VALUE"] ?></p>
									<div class="modalAntistressImgWrap"><img src="<?= CFile::GetPath($item["PREVIEW_PICTURE"]); ?>" alt="изображение упаковки товара велеопэт" class="modal_antistress_img"></div>
									<div class="col-7"></div>
								</div>
								<div class="col-7">
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
											<div class="col modalAntistress_left">
												<div class="modalAntistress_title">
													<h6>Добавки</h6>
												</div>
												<?/*<table class="">
																<tr>
																	<th>Витамины</th>
																</tr>
																<? foreach ($arItem["PROPERTIES"]["VITA"]["VALUE"] as $key => $item) : ?>
																	<tr>
																		<td><?= $item; ?></td>
																		<td><?= $arItem["PROPERTIES"]["VATAAMOUNT"]["VALUE"][$key]; ?></td>
																	</tr>
																<? endforeach ?>
															</table>
															<table class="micro-table">
																<tr>
																	<th>Микроэлементы</th>
																</tr>
																<? foreach ($arItem["PROPERTIES"]["MICRO"]["VALUE"] as $key => $item) : ?>
																	<tr>
																		<td><?= $item; ?></td>
																		<td><?= $arItem["PROPERTIES"]["MICROAMOUNT"]["VALUE"][$key]; ?></td>
																	</tr>
																<? endforeach ?>
															</table>*/ ?>
												<div><?= $item["PROPERTY_ADD_VALUE"]["TEXT"] ?></div>
											</div>
											<div class="col-7 modalAntistress_right">
												<div class="modalAntistress_title">
													<h6>Питательная ценность</h6>
												</div>
												<!-- <table class="nutrition_value_table">
																<tr>
																	<th>На 100г продукта</th>
																</tr>
																<?/* foreach ($arItem["PROPERTIES"]["MACRO"]["VALUE"] as $key => $item) : ?>
																	<tr>
																		<td><?= $item; ?></td>
																		<td><?= $arItem["PROPERTIES"]["MACROAMOUNT"]["VALUE"][$key]; ?></td>
																	</tr>
																<? endforeach */ ?>
															</table>
															<table>
																<tr>
																	<th>Энергетическая ценность (100 г): <?/*= $arItem["PROPERTIES"]["KKAL"]["VALUE"] ?> ккал/<?= $arItem["PROPERTIES"]["KJ"]["VALUE"] */ ?> кДж</th>
																</tr>
															</table> -->
												<div><?= $item["PROPERTY_NUTRITION_VALUE"]["TEXT"] ?></div>
											</div>
											<p class="modalAntistress_bottom_text">
												Неполнорационный корм (лакомство-пребиотик). Не является лекарственным средством.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?/* endforeach */ ?>
		</div>
	</div>	
	</section>

	

	<?/* if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; */ ?>
</div>
<? 
	foreach ($arResult["ITEMS"] as $arItem)
	{
		?>
			<div class="modals-block" data-ids="<?=implode(',',$arItem['PROPERTIES']['MODAL']['VALUE'])?>">
				
			</div>
		<?
	}
?>