document.addEventListener('DOMContentLoaded', function () {

    // Приветствие нашего гавайского человечка срабатывает сразу же после загрузки страницы

    //alert('ura');
    var btn = document.querySelectorAll("#send");
    btn[0].addEventListener("click", function () {
        
         var $fio = document.querySelectorAll("#fio")[0].value.trim();
         var $email = document.querySelectorAll("#email")[0].value.trim();
         var $phone = document.querySelectorAll("#phone")[0].value.trim();
         var $birthday = document.querySelectorAll("#birthday")[0].value.trim();
         var $question = document.querySelectorAll("#question")[0].value.trim();
         var $elem_error = document.querySelectorAll("#error")[0];
         var $elem_result = document.querySelectorAll("#result")[0];
         $elem_error.innerHTML = '';
         $elem_result.innerHTML = '';
         var $error="";
         if ($fio=== "") {
             $error=$error+"Не заполнено поле ФИО!<br>"
         }
         if ($email=== "") {
             $error=$error+"Не заполнено поле Email!<br>"
         }
         if ($phone=== "") {
             $error=$error+"Не заполнено поле Телефон!<br>"
         }
         if ($birthday=== "") {
             $error=$error+"Не заполнено поле Дата рождения!<br>"
         }
         if ($question=== "") {
             $error=$error+"Не заполнено поле Вопрос!<br>"
         }
         if ($error!=="") {
             $error="<b>Обнаружены следующие ошибки:</b><br>"+$error+"<b>Пожалуйста, исправьте их и попробуйте еще раз.</b>";
             $elem_error.innerHTML = $error;
             event.preventDefault(); 
         }
         

    
    });
});

