<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE HTML>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<meta name="description" content="Welco - источник полезных пребиотических волокон, которые способствуют восстановлению полезной микрофлоры в кишечнике, улучшая пищеварение и помогая полноценно усваивать питательные вещества из пищи." />
	<meta name="keywords" content="пребиотик, питомцы, животные, лекарство, питание" />
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


	<!-- <script src="js/jquery-1.9.1.min.js"></script> -->
	<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
	<script src="<?= SITE_TEMPLATE_PATH ?>/js/script.js"></script>
	<? global $APPLICATION;
	////$APPLICATION->AddHeadScript("jquery-3.3.1.min.js");
	$APPLICATION->AddHeadScript("/return/jquery.mask.js");
	$APPLICATION->AddHeadScript("/return/jquery.validate.min.js");
	$APPLICATION->AddHeadScript("/return/script.js");

	$APPLICATION->SetAdditionalCSS("/return/style.css"); ?>

	<!--[if lt IE 9]>
		  <script src="js/html5.js"></script>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		 <![endif]-->
	<?php $APPLICATION->ShowHead() ?>
</head>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-11 px-0">
				<main>