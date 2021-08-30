<!doctype html>  <!-- HTML5 -->
<html>
<head>
    <meta charset="utf-8">
    <title>Форма обратной связи</title>
    <script src="main.js"></script>
</head>
<body>
    <?php require_once 'send.php'; ?> <!--Отправка email-->
    <h1 align="center">Форма отправки данных</h1>
    <div id="error" align='center' style='color:red;width:400px;margin:0 auto;'><?= $error ?></div>
    <div id="result"  align='center' style='background-color:greenyellow;width:400px;margin:0 auto;'><?= $result ?></div>
    <br>
    <?php if ($result=="") { ?>
    <form method="post" align="center"> 
        <table align='center' border='1'>
            <tr>
                <td>
                    <span align="left" width='30px'>Фамилия, имя, отчество: </span>
                </td>
                <td>
                    <input type="text" name="fio" id="fio" placeholder="Введите ФИО..."  style='width:300px;'>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Адрес эл. почты: </span>
                </td>
                <td>
                    <input type="text" name="email" id="email" placeholder="Введите емейл..."  style='width:300px;'>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Телефон: </span>
                </td>
                <td>
                    <input type="text" name="phone" id="phone" placeholder="Введите телефон..."  style='width:300px;'>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Дата рождения: </span>
                </td>
                <td>
                    <input type="date" name="birthday" id="birthday" placeholder="Введите дату рождения..."  style='width:300px;'>
                </td>
            </tr>
            <tr>
                <td>
                    <span>Вопрос: </span>
                </td>
                <td>
                    <textarea name="question" id="question" placeholder="Введите ваш вопрос..." rows="5" style='width:300px;'></textarea>
                </td>
            </tr>
        </table>
        <br>
        <div align='center''>
            <button type="submit"  name="send" id="send">Отправить вопрос</button>
        </div>
            
    </form>
    <?php } ?>
    <!-- Ниже будем выводить результат отправки емейла. -->
</body>
</html>