<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"WELCO:main.feedback",
	"welcopet_form",
	Array(
		"REQUIRED_FIELDS" => array(0=>"EMAIL",1=>"user_phone",)
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>