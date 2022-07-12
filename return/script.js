	$(document).ready(function(){

    //добавляем маску на поле телефон
    var customOptions = {
      onKeyPress: function(val, e, field, options) {

        if (val.replace(/\D/g, '').length===2)
        {
            val = val.replace('8','');    
            field.val(val);
         }
         field.mask("+7 (999) 999-99-99", options);
        },
        placeholder: "+7 (___) ___-__-__" 
    };

    $("input[name=phone]").mask("+7 (999) 999-99-99", customOptions);

const formAnimationLoader = () => {
  // найдем элемент с изображением загрузки и уберем невидимость:
  var loaderBox = $(".formStatus-loaded");
  loaderBox.toggleClass('fs-show');
}


function preg_match (regex, str) {
  return (new RegExp(regex).test(str))
}

    // правило возврата страница
$("#form-rules-return").validate({
    errorPlacement: function(error, element) {
        error.insertBefore(element);
    },
    rules: {
        name:{
            required: true,
            minlength: 4
        },
        phone:{
            required: true,
            minlength: 5
        },
        
        email:{
            required: true,
        },

        file1:{
            required: true,
        },
        check: {
            required: true,
        },
    },
    messages: {
        name: {
            required: "Вы забыли ввести вопрос",
            minlength: jQuery.validator.format("Длина названия компании должна быть больше 4-ти символов")
        },
        phone:{
            required: "Поле 'Телефон' обязательно для заполнения",
            minlength: jQuery.validator.format("Проверьте правильность заполнения поля")
        },
        email:{
            required: "Поле 'Email' обязательно для заполнения",
        },
        check:{
            required: "Поставьте галочку",
        },
        file1:{
            required: "Прикрепите фото",
        },
    },
    submitHandler: function(form) {
        var form = $('#form-rules-return')[0];
        console.log(form);
        console.log("=====");
        formAnimationLoader();
      
        $.ajax({
            type: 'post',
            url: '/ajax_form.php',
            //dataType: 'json',
            type: 'POST',
            data: new FormData(form),
            processData: false,
            contentType: false,
           
            success: function(response) {
                formAnimationLoader();
                
              //// console.log("response=" + JSON.stringify(response, null, 4));
               
                 if (response==='INVALID FILE SIZE'){
                    // здесь ставим своё уведомление о том, что превышен размер файла
                    var err_text_size = "Превышен размер файла";
                    //$('#form-rules-return').children('.result').text(response).show();
                    $('#form-rules-return').children('.result').text(err_text_size).show();
                    return;
                }

                if (response==='INVALID FILE TYPE'){
                    // здесь ставим своё уведомление о том, что не тот тип файла (не картинка)
                    var err_text = "Неверный формат файла, необходимо загружать изображения";
                    // $('#form-rules-return').children('.result').text(response).show();
                     $('#form-rules-return').children('.result').text(err_text).show();
                    return;
                }
                //получаем ответ и разбираем его, преобразуя в объект
                var data_response = JSON.parse(response);// response["data"];
                var data = Number(data_response["data"]);
                var data_id = data_response["id"];
                /*console.log(data_response);
                 console.log(data);
                 */

                if (data==1){
                    console.log('response='+response);
                    grecaptcha.reset();
                    $('#form-rules-return').children('.result').text('').hide();
                    $('#form-rules-return').each(function(indx){        
                        $('input , textarea').removeClass("error , valid");
                    });
                    $('#form-rules-return').trigger('reset');
                    //$('#modal_create_act').modal('toggle');
                    $('#myModalCall-done span.result').html('Ваша заявка № '+data_id+' успешно отправлена. Уведомление отправлено на Ваш email адрес');
                    $('#myModalCall-done').modal('show');   
                }
                else{
                    $('#form-rules-return').children('.result').text(response).show();
                    return;
                }
            }
        });
        //successForm(form);
    }
});


});



$(document).ready( function() {
    // $("#fl_inp").change(function(){
    //      var filename = $(this).val().replace(/.*\\/, "");
    //      $("#fl_nm").html(filename);
    // });
    $("#fl_inp1").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         $("#fl_nm1").html(filename);
    });
});