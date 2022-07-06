<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
	</main>
			</div>
			<!-- сайдбар -->
			<div class="col-12 col-md-1 px-0">
				<aside class="sidebar h-100">
					<div class="d-flex flex-md-column flex-shrink-0">
						<div class="sidebar_menu d-flex flex-md-column justify-content-around justify-content-md-between align-items-center w-100">
							<div class="sidebar_menu__menu"><a href="#" data-bs-toggle="modal" data-bs-target="#modalMenu"><img src="<?=SITE_TEMPLATE_PATH;?>/img/menu.svg" alt="три полоски с надписью меню"></a></div>
							<div class="sidebar_menu__consultation"><a href="#feedback"><img src="<?=SITE_TEMPLATE_PATH;?>/img/consultation.svg" alt="значок диалога с надписью консультация врача"></a></div>
							<div class="sidebar_menu__wherebay"><a href="#where_bay"><img src="<?=SITE_TEMPLATE_PATH;?>/img/whereBay.svg" alt="значок сумочки с надписью где купить"></a></div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
<footer>
	<span>Copyright© ООО «Апиценна» 1991-<script>
			document.write(new Date().getFullYear());
		</script>. Все права защищены. <a href="">Карта сайта</a>. <a href="">Поисковое продвижение</a>.</span>

	<!-- Модалка меню -->
	<div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
				<div class="modal-body p-0">
					<div class="row m-0">
						<div class="col-11 px-0">
							<div class="row">
								<div class="col-6"><img src="<?=SITE_TEMPLATE_PATH;?>/img/modal-dog.png" alt="собака лежит на спине и смотрит вверх на логотип вэлкопэт" class="h-100 w-100 modal_menu_img"></div>
								<div class="col-6">
									<div class="d-flex justify-content-center h-100 align-items-center">
										<div class="modal_menu_text">
											<h3><a href="#feedback" id="modalMenuWhy">Зачем нужны пребиотики?</a></h3>
											<h3><a href="#first_product_couple">Продукты</a></h3>
											<h3><a href="#answers">Ответы на вопросы</a></h3>
											<h3><a href="#how_use">Как применять</a></h3>
											<h3><a href="#where_bay">Где купить Welco</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1 h-100 px-0">
							<div class="modal-sidebar">
								<div class="sidebar_menu__close d-flex flex-column align-items-center">
									<button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
									<span>Меню</span>
								</div>
								<div class="sidebar_menu__consultation"><a href="#about"><img src="<?=SITE_TEMPLATE_PATH;?>/img/consultation.svg" alt="значок диалога с надписью консультация врача"></a></div>
								<div class="sidebar_menu__wherebay"><a href="#where_bay"><img src="<?=SITE_TEMPLATE_PATH;?>/img/whereBay.svg" alt="значок сумочки с надписью где купить"></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>

<!-- <script src="/js/sidebars.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->
</body>

</html>