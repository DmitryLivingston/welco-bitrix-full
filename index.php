<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
					<!-- первый экран -->
					<section class="prime position-relative">
						<div class="row m-0">
							<div class="col-12 col-xl-5 offset-xl-1 px-3 order-2 order-md-1">
								<div class="prime_left_side">
									<div class="prime_logo d-none d-md-block">
										<img class="prime_logo-img" src="<?=SITE_TEMPLATE_PATH;?>/img/welco_logo 1.png" alt="логотип компании вэлкопэт">
									</div>
									<div class="prime_title">
										<h1>Натуральный <span class="orange">пребиотик в виде лакомства</span> для
											вашего питомца</h1>
									</div>
									<div class="prime_text"><span>Пребиотик Welco улучшает работу желудочно-кишечного
											тракта
											и способствуют усилению естественной защиты организма животных от
											инфекций</span>
									</div>
									<div class="prime_button_block d-flex align-items-center justify-content-between">
										<div class="prime_button">
											<a href="#" class="btn prime_btn_violet" data-bs-toggle="modal" data-bs-target="#modalAntistress">
												Купить Welco
											</a>
										</div>
										<img src="<?=SITE_TEMPLATE_PATH;?>/img/packs.png" alt="три пауча вэлкопэт" class="pb-3">
									</div>
								</div>
							</div>
							<div class="col-12 col-xl-6 px-0 order-1 order-md-2">
								<div class="prime_right_side h-100">
									<div class="prime_img h-100 w-100">
										<picture>
											<source srcset="<?=SITE_TEMPLATE_PATH;?>/img/prime-planshet.png" media="(max-width: 768px)">
											<source srcset="<?=SITE_TEMPLATE_PATH;?>/img/prime-mobile" media="(max-width: 360px)">
											<source srcset="<?=SITE_TEMPLATE_PATH;?>/img/Prime.png">
											<img src="<?=SITE_TEMPLATE_PATH;?>/img/Prime.png" alt="изображение двух пачек товара велкопэт для кошек и собак на оранжевом фоне" class="prime_bg_img">
										</picture>
										<div class="prime_logo d-block d-md-none position-absolute">
											<img class="prime_logo-img mobile_logo" src="<?=SITE_TEMPLATE_PATH;?>/img/welco_logo 1.png" alt="логотип компании вэлкопэт">
										</div>
										<span class="prime_img_text">Неполнорационный корм (лакомство-пребиотик). не является лекарственным средством.</span>
									</div>
								</div>
							</div>
						</div>
						<div class="scroll-button d-none d-md-block">
							<a href="#about" id="about-scroll-btn"><img src="<?=SITE_TEMPLATE_PATH;?>/img/chevron down.png" alt="кнопка листать вниз"></a>
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
													<h2>Зачем животным <span class="orange">пребиотики?</span></h2>
												</div>
												<div class="about_text">
													<p>
														Пребиотики - это составляющие продуктов
														питания,
														которые служат пищей пребиотическим бактериям.
													</p>

													<p>
														Пребиотики стимулируют рост и жизнедеятельность полезной
														микрофлоры в
														кишечнике вашего питомца.
														Попадая в кишечник, пребиотики не перевариваются и не
														растворяются, а
														питают
														полезные бактерии и являются благоприятной средой для их
														развития.
													</p>

													<p>
														Welco - источник полезных пребиотических волокон, которые
														способствуют
														восстановлению полезной микрофлоры в кишечнике, улучшая
														пищеварение и
														помогая полноценно усваивать питательные вещества из пищи.
													</p>
													</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-7 px-0 order-1 order-md-2 d-flex align-items-center justify-content-center">
											<div class="about_img_wrap">
												
												<picture>
													<source srcset="img/planshet-dog.png" media="(max-width: 768px)">
													<source srcset="<?=SITE_TEMPLATE_PATH;?>/img/why-need-dog.png">
													<img src="<?=SITE_TEMPLATE_PATH;?>/img/why-need-dog.png" alt="фотография корги">
												</picture>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>
					<!-- первый блок с продукцией -->
					<section class="first_product_couple position-relative" id="first_product_couple">
						<!-- антистресс -->
						<div class="antistress">
							<div class="row m-0">
								<div class="col offset-xl-1 px-0">
									<div class="row m-0">
										<div class="col-12 col-md-5 px-0 order-2 order-md-1">
											<div class="antistress_img_wrap">
												<img src="<?=SITE_TEMPLATE_PATH;?>/img/antistress.png" alt="два товара вэлкопэт для кошек и собак антистресс" class="antistress_img product_img">
											</div>
											<div class="col-12 col-7 order-1 order-md-2 d-flex d-md-none flex-column justify-content-center align-items-center">
												<p class="antistress_text">
													Содержит витамины группы В и целебный экстракт мелиссы, которые
													обеспечивают снижение уровня стресса и помогают животным стать спокойнее
													и счастливее.
												</p>
												<!-- кнопки -->
												<div class="round_links d-flex justify-content-between">
													<a href="#where_bay" class="round_button">где <br> купить <br><i
														class="fa-solid fa-chevron-down"></i></a>
													<a href="" class="round_button pt-2">состав <br><i
															class="fa-solid fa-plus"></i> </a>
												</div>
											</div>
										</div>
										<div class="col col-7 order-1 order-md-2">
											<div class="antistress_title">
												<h1>Антистресс</h1>
												<h3>для кошек и собак</h3>
											</div>
											<p class="antistress_text d-none d-md-block">
												Содержит витамины группы В и целебный экстракт мелиссы, которые
												обеспечивают снижение уровня стресса и помогают животным стать спокойнее
												и счастливее.
											</p>
											<!-- кнопки -->
											<div class="round_links justify-content-between d-none d-md-flex">
												<a href="" class="round_button pt-2">состав <br><i
														class="fa-solid fa-plus"></i> </a>
												<a href="#where_bay" class="round_button">где <br> купить <br><i
														class="fa-solid fa-chevron-down"></i></a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- почки -->
						<div class="kidney">
							<div class="row m-0 h-100">
								<div class="col offset-xl-1 px-0">
									<div class="row m-0 h-100">

										<div class="col-lg-6 ps-0 h-100 kidney_content d-flex flex-column align-items-end">
											<div class="kidney_title">
												<h1>здоровые почки</h1>
												<h3>для кошек</h3>
											</div>
											<p class="kidney_text">
												Содержит экстракт плодов клюквы, который улучшает состояние почек и
												мочевыводящих путей, поддерживая здоровье мочевыделительной системы у
												кошек.
											</p>
											<div class="round_links d-flex justify-content-between">
												<a href="" class="round_button pt-2">состав <br><i
														class="fa-solid fa-plus"></i> </a>
												<a href="#where_bay" class="round_button">где <br> купить <br><i
														class="fa-solid fa-chevron-down"></i></a>
											</div>
										</div>
										<div class="col-lg-6 px-0 h-100 d-flex align-items-center">
											<div class="kidney_img_wrap">
												<img src="<?=SITE_TEMPLATE_PATH;?>/img/kidney.png" alt="коробка товара вэлкопэт здоровые почки для кошек" class="kidney_img product_img">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>
					<!-- второй блок с продукцией -->
					<section class="second_product_couple position-relative" id="second_product_couple">
						<!-- кожа -->
						<div class="skin">
							<div class="row m-0">
								<div class="col offset-xl-1 px-0">
									<div class="d-flex">
										<div class="d-none d-lg-block">
											<div class="skin_img_wrap">
												<img src="<?=SITE_TEMPLATE_PATH;?>/img/skin.png" alt="два товара вэлкопэт здоровая кожа и блестящая шерсть для собак" class="skin_img product_img">
											</div>
										</div>
										<div class="skin_contain">
											<div class="skin_title">
												<h1>здоровая кожа
													<br> и блестящая шерсть
												</h1>
												<h3>для кошек и собак</h3>
											</div>
											<p class="skin_text">
												Содержит полезную жирную кислоту Омега-6 и цинк, <br> которые улучшают
												состояние кожи и шерсти, <br> позволяя коже быть здоровой, а шерсти
												блестящей <br> и красивой.
											</p>
											<div class="round_links d-flex justify-content-between">
												<a href="" class="round_button pt-2">состав <br><i
														class="fa-solid fa-plus"></i> </a>
												<a href="#where_bay" class="round_button">где <br> купить <br><i
														class="fa-solid fa-chevron-down"></i></a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- суставы -->
						<div class="joints">
							<div class="row m-0 h-100">
								<div class="col offset-lg-1 px-0">
									<div class="row m-0 h-100">
										<div class="col-12 col-lg-6 ps-0 h-100 joints_content d-flex flex-column align-items-end">
											<div class="joints_title">
												<h1>здоровые суставы</h1>
												<h3>для собак</h3>
											</div>
											<p class="joints_text">
												Содержит полезную жирную кислоту Омега-3 <br> и экстракт зеленого
												моллюска, которые улучшают состояние суставов и связок, бережно заботясь
												<br> о здоровье опорно-двигательного аппарата у собак.
											</p>
											<div class="round_links d-flex justify-content-between">
												<a href="" class="round_button pt-2">состав <br><i
														class="fa-solid fa-plus"></i> </a>
												<a href="#where_bay" class="round_button">где <br> купить <br><i
														class="fa-solid fa-chevron-down"></i></a>
											</div>
										</div>
										<div class="col-12 col-lg-6 px-0 h-100 d-none d-lg-block">
											<div class="joints_img_wrap">
												<img src="<?=SITE_TEMPLATE_PATH;?>/img/joints.png" alt="коробка товара вэлкопэт здоровые суставы для собак" class="joints_img product_img">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>
					<!-- секция ответы на вопросы -->
					<section class="answers" id="answers">
						<div class="row m-0">
							<div class="col-12 col-lg-6 px-0">
								<div class="answers_img_wrap w-100">
									<img src="<?=SITE_TEMPLATE_PATH;?>/img/no.png" alt="заглушка отсутствующего изображения" class="answers_img">
								</div>
							</div>
							<div class="col-12 col-lg-6 px-0">
								<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
									<div class="carousel-indicators">
									  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
									  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
									</div>
									<div class="carousel-inner">
									  <div class="carousel-item active">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Почему  пищеварение питомца так важно?</h4>
												<p>Потому что нормальная работа желудочно-кишечного тракта – это залог всего здоровья организма. Кошки и собаки совсем как люди – страдают от нарушений пищеварения из-за стресса, неполноценного питания или приема антибиотиков. И для скорейшего возврата к нормальной жизни любимца следует позаботиться о быстром восстановлении естественной функциональной микрофлоры кишечника.</p>
											</div>
										</div>
									  </div>
									  <div class="carousel-item">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Причем тут вообще иммунитет?</h4>
												<p>А вот причем: более 70% иммунитета обеспечивает здоровый кишечник. Если он работает плохо – еда не усваивается. Недостаток витаминов и минералов, белков и жиров делает животных беззащитными перед инфекциями. Чтобы восстановить иммунную систему, следует помочь организму усваивать все полезные нутриенты из пищи.</p>
											</div>
										</div>
									  </div>
									  <div class="carousel-item">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Как именно работает Welco?</h4>
												<p>Лакомство Welco содержит натуральный инновационный пребиотический комплекс FOS+MOS PREBIOTIC FORMULA, который помогает хорошо жить полезным бактериям в кишечнике. Фруктоолигосахариды (FOS)+ маннаолигосахариды (MOS) улучшают пищеварение и адаптивность животных, выводят токсины, а также защищают организм от проникновения патогенных вирусов и микроорганизмов, помогая естественному иммунитету кошек и собак.</p>
											</div>
										</div>
									  </div>
									  <div class="carousel-item">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Поможет ли Welco, если у моего домашнего животного чувствительное пищеварение?</h4>
												<p>Да, точно поможет. Ведь в составе лакомства натуральные компоненты, специально подобранные ветеринарными специалистами для бережной заботы о пищеварении таких питомцев и минимизации негативных проявлений работы их особенной пищеварительной системы.</p>
											</div>
										</div>
									  </div>
									  <div class="carousel-item">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Как понять, что у моего питомца кожа и шерсть, требующие особого внимания?</h4>
												<p>На самом деле довольно просто: если кожа питомца шелушится, потеряла упругость, а шерсть тусклая и ломкая – вы получили сигнал о помощи. Ведь внешность – это важно, и для животных особенно: это показатель их здоровья.</p>
											</div>
										</div>
									  </div>
									  <div class="carousel-item">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Почему  пищеварение питомца так важно?</h4>
												<p>Потому что нормальная работа желудочно-кишечного тракта – это залог всего здоровья организма. Кошки и собаки совсем как люди – страдают от нарушений пищеварения из-за стресса, неполноценного питания или приема антибиотиков. И для скорейшего возврата к нормальной жизни любимца следует позаботиться о быстром восстановлении естественной функциональной микрофлоры кишечника.</p>
											</div>
										</div>
									  </div>
									  <div class="carousel-item">
										<div class="answers_container">
											<div class="answers_item">
												<h4>Не хочу усложнять жизнь себе и питомцу, насколько комфортно мне будет применять такой продукт?</h4>
												<p>Будет просто и удобно, ведь давать вкусное лакомство кошке или собаке Вам будет только в удовольствие. Которое, тем не менее, поможет четвероногому члену семьи быстро стать здоровым изнутри и красивым снаружи.</p>
											</div>
										</div>
									  </div>
									  <!-- <div class="carousel-item">
										<img src="<?=SITE_TEMPLATE_PATH;?>/img/modal-dog.png" class="d-block w-100" alt="...">
									  </div>
									  <div class="carousel-item">
										<img src="..." class="d-block w-100" alt="...">
									  </div> -->
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
							</div>
						</div>
					
					</section>
					<!-- секция как применять -->
					<section class="how_use position-relative" id="how_use">
						<div class="row m-0">
							<div class="col-12 col-lg-6 px-0">
								<div class="how_use_img_wrap w-100">
									<img src="<?=SITE_TEMPLATE_PATH;?>/img/how-use.png" alt="ряд из серых паучей с логотипом велкопэт" class="how_use_img w-100 h-100">
								</div>
							</div>
							<div class="col-12 col-lg-6 px-0">
								<div class="how_use_content">
									<div class="how_use_title">
										<h2>как применять welco?</h2>
									</div>
									<p class="how_use_text">
										Welco разработан для ежедневного использования <br> в течение 7 дней. 1 пауч (35
										мл)
										в день предназначен для животного любого веса, возраста и породы.
										<br>
										<br>
										Давать Welco животному следует перед утренним
										кормлением.
									</p>
									<div class="how_use_instruction">
										<img src="<?=SITE_TEMPLATE_PATH;?>/img/how-use-instruction.png" alt="инструкция по использованию корма велкопэт">
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
											<h2>где купить welco?</h2>
										</div>
									</div>
								</div>
								<div class="row m-0">
									<div class="col-12 col-md-6 col-lg-4">
										<h4 class="where_bay_item">
											4 лапы
										</h4>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<h4 class="where_bay_item">
											Бетховен
										</h4>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<h4 class="where_bay_item">
											КЗВС
										</h4>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<h4 class="where_bay_item">
											магизоо
										</h4>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<h4 class="where_bay_item">
											petshop
										</h4>
									</div>
									<div class="col-12 col-md-6 col-lg-4">
										<h4 class="where_bay_item where_bay_item_special">
											мокрый нос
										</h4>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- секция с формой и соцсетями -->
					<section class="feedback" id="feedback">
						<div class="row m-0">
							<div class="col-12 d-flex flex-column align-items-center">
								<div class="feedback_title">
									<h2>Консультация ветеринарного специалиста</h2>
								</div>
								<div class="feedback_subtitle">
									<p>Наши ветеринарные врачи проконсультируют вас и помогут с выбором продукции Welco
									</p>
								</div>
								<div class="feedback_form">
									<div class="input-group phone_group justify-content-between mb-3">
										<div class="text-field">
											<label class="text-field__label" for="userphone">Ваш телефон</label>
											<input class="text-field__input d-block" type="tel" name="userphone"
												id="userphone" placeholder="+7 928 978 59 87">
										</div>
										<div class="text-field">
											<label class="text-field__label" for="usermail">Ваша электронная
												почта</label>
											<input class="text-field__input d-block" type="email" name="usermail"
												id="usermail" placeholder="agitagrand@gmail.com">
										</div>

									</div>
									<div class="input-group feedback_text_area_group">
										<div class="text-field w-100">
											<label class="text-field__label" for="usertext">вопрос</label>
											<textarea class="text-field__textarea d-block" name="usertext" id="usertext"
												placeholder="Задайте свой вопрос"></textarea>
										</div>
									</div>
									<div class="feedback_dropdown_wrap">
										<div class="row m-0">
											<div class="col-12 col-md-8">
												<div class="feedback_dropdown">
													<input type="file" id="dropdown" name="dropdown" accept="image/png, image/jpeg, image/jpg">
													<img src="<?=SITE_TEMPLATE_PATH;?>/img/Shape.svg" alt="стилизованное синее облако с белой стрелкой внутри">
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
									</div>
									<div class="social">
										<div class="row m-0">
											<div class="col-12">
												<div class="d-flex justify-content-center">
													<div class="social_wrap d-flex justify-content-between">
														<a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/social/vk 2.svg" alt="значок в контакте"></a>
														<a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/social/yout 1.svg" alt="значок ютуба"></a>
														<a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/social/dzen 1.svg" alt="значок яндекс дзен"></a>
														<a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/social/insta 1.svg" alt="значок инстаграма"></a>
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
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>