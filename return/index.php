<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Форма с загрузкой файлов Mirdeveloper");
$APPLICATION->SetTitle("Форма с загрузкой файлов");
global $APPLICATION;
////$APPLICATION->AddHeadScript("jquery-3.3.1.min.js");
$APPLICATION->AddHeadScript("/return/jquery.mask.js");
$APPLICATION->AddHeadScript("/return/jquery.validate.min.js");
$APPLICATION->AddHeadScript("/return/script.js");

$APPLICATION->SetAdditionalCSS("/return/style.css");

?>


<div class="container">
    <div class="row">
		<div class="col-xl-12 col-md-4 rules_form_new">
	        <div class="map__feedback" style="position: relative; top: 0px; margin: 15px 0;">

	            <form id="form-rules-return" method="post" enctype="multipart/form-data" style="max-width: 100%;">
	                <div class="form-group">
	                    <input class="map__input-text form-control" type="text" name="name" placeholder="ФИО" <?/*required=""*/?>>
	                </div>
	                <div class="form-group">
	                    <input class="map__input-text form-control" type="text" name="phone" placeholder="Телефон" required="">
	                </div>
	                 <div class="form-group">
	                    <input class="map__input-text form-control" type="text" name="email" placeholder="E-mail" required="">
	                </div>
	                 <div class="form-group">
	                    <span class="file_name_rules">Фото 1</span>
	                    <div class="fl_upld">
	                        <label><input id="fl_inp" class="map__input-file form-control" type="file" name="file" placeholder="Фото отвеса" >Выберите файл</label>
	                        <div id="fl_nm">Файл не выбран</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <span class="file_name_rules">Копия 1</span>
	                    <div class="fl_upld">
	                        <label><input id="fl_inp1" class="map__input-file form-control" type="file" name="file1"  placeholder="Копия чека" >Выберите файл</label>
	                        <div id="fl_nm1">Файл не выбран</div>
	                    </div>
	                </div>
	                <?//echo CFile::InputFile("IMAGE_ID", 20, $str_IMAGE_ID);?>

	                <div class="form-group">
	                    <input class="map__input-checkbox form-control" type="checkbox" name="terms" id="map__input-checkbox" checked="" required="">
	                    <label class="map__input-checkbox-label terms_l" for="map__input-checkbox">Оставляя свои данные я соглашаюсь с
	                        <a class="map__input-link" href="/privacy/">Политикой конфиденциальности</a>
	                    </label>
	                </div>
	                
	                <div class="result error"  hidden></div>
	                <button class="button_fill map__button modal__button" type="submit">Отправить</button>
	            </form>
	            <!-- loader -->
	            <div class="formStatus-loaded">
	                <img class="formStatus-loaded-icon" id="loadImg" src="load.gif">
	            </div>


	        </div>
		</div>
		<img style="display: none;" id="loadImg" src="load.gif" />
		<script>
			
		</script>

		
	</div>
</div>


<div class="modal fade modal__registration modal__call" id="myModalCall-done" tabindex="-1" role="dialog" aria-labelledby="myModalCallLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title map__heading" id="myModaCalllLabel">Уведомление</h4>
            </div>
            <div class="modal-body">
                <span class="result done">
                    Ваша заявка успешно отправлена.
                    
                </span>
            </div>
            <div class="modal-footer">
                <button class="button_fill map__button modal__button" data-dismiss="modal" aria-label="Close">Ок</button>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>