<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<?
//проверяем размер файла
if ($_FILES['file']['error']=='1'){
    echo 'INVALID FILE SIZE';
    die();
}

if ($_FILES['file1']['error']=='1'){
    echo 'INVALID FILE SIZE';
    die();
}
// если есть вложение
if (!empty($_FILES['file']['tmp_name']) && !empty($_FILES['file1']['tmp_name'])) {    
    //здесь проверяем расширение (картинка):
    if(strripos($_FILES['file']['type'], 'image')!==false and strripos($_FILES['file1']['type'], 'image')!==false){
	  // echo json_encode($_FILES);

	  // Закачиваем файл в /tmp_img
      //для этого в корне создаем папку tmp_img
        $name_file = $_FILES['file']['name'];
        $name_file1 = $_FILES['file1']['name'];
        $uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/tmp_img';
        $is_moved = move_uploaded_file($_FILES['file']['tmp_name'], "$uploads_dir/$name_file");
        $is_moved1 = move_uploaded_file($_FILES['file1']['tmp_name'], "$uploads_dir/$name_file1");
	 file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test_file.log', print_r(array($_FILES,$_POST,$is_moved), 1), FILE_APPEND);
        if ($is_moved && $is_moved1){
            // если всё ок:
            // действия...
            CModule::IncludeModule("iblock");
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $el = new CIBlockElement;
            $props = array();
            $props['IBLOCK_ID'] = 5; // ID инфоблока
            $props['ACTIVE'] = 'Y';
            $props['NAME'] = 'Обращение от '.$name.' '.date('d.m.Y H:i:s');
            $props['ACTIVE_FROM'] = date('d.m.Y H:i:s');

            $arParams = array("replace_space" => "-", "replace_other" => "-");
			$trans = Cutil::translit($name, "ru", $arParams);
			$props["CODE"] = $trans.mt_rand();
            $property_values = array();
            //PHOTO
            $property_values['PHOTO'] = CFile::MakeFileArray( $uploads_dir."/".$name_file);
            $property_values['PHOTO1'] = CFile::MakeFileArray( $uploads_dir."/".$name_file1);
            $property_values['PHONE'] = $phone;
            $property_values['MAIL'] = $email;
            $props['PROPERTY_VALUES'] = $property_values;
            ////file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test_file111.log', print_r(array($props,$property_values), 1), FILE_APPEND);
            //добавляем элемент в инфоблок:
           // unlink ($uploads_dir."/".$name_file);
            if($new_el = $el->Add($props)){
            	unlink ($uploads_dir."/".$name_file);
            	unlink ($uploads_dir."/".$name_file1);

            	$resItemsList = CIBlockElement::GetList(
				    array(),
				    Array("IBLOCK_ID"=>5, "CODE" => $props["CODE"]),
				    false,
				    false,
				    array()
				);
				while($item = $resItemsList->GetNextElement())
				{
					$element = $item->GetFields();
    				$element['PROPERTIES'] = $item->GetProperties();
				    $arElems = $element; // соответствие XML_ID => ID
				}

				$photo_one =CFile::GetPath($arElems['PROPERTIES']['PHOTO']['VALUE']);
				$photo_one_min = CFile::ResizeImageGet(
                              $arElems['PROPERTIES']['PHOTO']['VALUE'],
                              array(
                                 'width'=>200,
                                 'height'=>200
                              ),
                              BX_RESIZE_IMAGE_PROPORTIONAL,
                             Array(
                                 "name" => "sharpen",
                                 "precision" => 0
                              )
                           );
				////file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test_file333.log', print_r(array($arElems,$arElems['PROPERTIES']['PHOTO']['VALUE'],$photo_one), 1), FILE_APPEND);
				$photo_one = "<a style='color: #4c5d68;' href='https://".$_SERVER["HTTP_HOST"].$photo_one."'><img style='width:200px; ' src='https://".$_SERVER["HTTP_HOST"].$photo_one_min['src']."'></a>";
				$photo_to = CFile::GetPath($arElems['PROPERTIES']['PHOTO1']['VALUE']);
				$photo_to_min = CFile::ResizeImageGet(
                             $arElems['PROPERTIES']['PHOTO1']['VALUE'],
                              array(
                                 'width'=>200,
                                 'height'=>200
                              ),
                              BX_RESIZE_IMAGE_PROPORTIONAL,
                             Array(
                                 "name" => "sharpen",
                                 "precision" => 0
                              )
                           );
				//$photo_to = 'https://'.$_SERVER["HTTP_HOST"].$photo_to;
				$photo_to = "<a  style='color: #4c5d68;' href='https://".$_SERVER["HTTP_HOST"].$photo_to."'><img style='width:200px; ' src='https://".$_SERVER["HTTP_HOST"].$photo_to_min['src']."'></a>";
            	// Отправка письма клиенту
					$sitename = 's1';
					$emailEvent = "FORM_RULES_RETURN";
					$arEventFields = array(
					    'NAME' => $name,
					    'EMAIL' => $email,
					    'PHONE' => $phone,
					    'PHOTO' => $photo_one,
					    'PHOTO1' => $photo_to,
					    
					);
					$return['id'] = $arElems["ID"];
					$return['data'] = 1;
					////file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test_file444.log', print_r(array($arEventFields), 1), FILE_APPEND);
					CEvent::SendImmediate($emailEvent, $sitename, $arEventFields);
                echo json_encode($return);//'OK';
            }
            else{
            	unlink ($uploads_dir."/".$name_file);
            	unlink ($uploads_dir."/".$name_file1);
				echo "Error: ".$el->LAST_ERROR;
            }
            // удаляем темповый файл:
        }else{
            echo 'ERROR FILE MOVED';
        }
    }else{
        echo 'INVALID FILE TYPE';
    }



}