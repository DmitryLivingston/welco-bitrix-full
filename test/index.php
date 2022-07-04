<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>


<section class="first_product_couple position-relative" id="first_product_couple">
	
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"product",
		array(),
		false
	); ?>

</section>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>