<?php
require_once '../inc/header.php';
$name = sha1('admin');
$passwd = sha1('admin');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../styles/style1.css" >
</head>
<body>
<?php
      if(isset($_POST['submit'])):
    $name2 = sha1($_POST['login']);
    $passwd2 = sha1($_POST['password']);
    echo ($name == $name2 && $passwd == $passwd2) ? '<p>Доступ открыт Добро пожаловать АДМИН</p>' : '<p>Невепный логин пароль</p>';
else:
    ?>

<form class="log" method="post" action = "<?=$_SERVER['PHP_SELF']?>" >
    <label for="login">Введите имя пользователя</label>
        <input type="text" name="login"  id ="login" ><br>
    <label for="password">Введите пароль</label>
        <input type="password" name="password"  id ="password"><br>
    <input type="submit" name = "submit" value="Проверить">

</form>
<? endif;?>
<hr color="red">
<p>Анкета пользователя</p>
<?
$v =[];
echo '<form name="form2" action="" method="post">
<p><b>1.Ваш пол мужской?:</b></p>
<p><input  name="v[1]" type="radio" value="0">Да
    <input name="v[1]" type="radio" value="1">Нет<br></p>

    <p><b>2.Ваш пол Женский?:</b></p>
    <p><input  name="v[2]" type="radio" value="0">Да
        <input name="v[2]" type="radio" value="1">Нет<br></p>

    <p><b>3.Вы программист?:</b></p>
    <p><input  name="v[3]" type="radio" value="1">Да
        <input name="v[3]" type="radio" value="0">Нет<br></p>

    <p><b>4.Вы пользуетесь смартфоном?:</b></p>
    <p><input  name="v[4]" type="radio" value="0">Да
        <input name="v[4]" type="radio" value="1">Нет<br></p>

    <p><b>5.Вы любите животных?:</b></p>
    <p><input  name="v[5]" type="radio" value="0">Да
        <input name="v[5]" type="radio" value="1">Нет<br></p>

    <p><b>6.У вас есть автомобиль?:</b></p>
    <p><input  name="v[6]" type="radio" value="0">Да
        <input name="v[6]" type="radio" value="1">Нет<br></p>

    <p><b>7.Вы пользуетсеь банковской картой?:</b></p>
    <p><input  name="v[7]" type="radio" value="0">Да
        <input name="v[7]" type="radio" value="1">Нет<br></p>

    <p><b>8.Вы любите фотографировать?:</b></p>
    <p><input  name="v[8]" type="radio" value="0">Да
        <input name="v[8]" type="radio" value="1">Нет<br></p>

    <p><b>9.У вас есть домашние животные?:</b></p>
    <p><input  name="v[9]" type="radio" value="1">Да
        <input name="v[9]" type="radio" value="0">Нет<br></p>

    <p><b>10.Вам нарвится ваша работа?:</b></p>
    <p><input  name="v[10]" type="radio" value="1">Да
        <input name="v[10]" type="radio" value="0">Нет<br></p>

<p><b>11.Вы любите горы?:</b></p>
<p><input  name="v[11]" type="radio" value="0">Да
    <input name="v[11]" type="radio" value="1">Нет<br></p>

    <p><b>12.Вы люите спать?:</b></p>
    <p><input  name="v[12]" type="radio" value="0">Да
        <input name="v[12]" type="radio" value="1">Нет<br></p>

    <p><b>13.Вы дюбите поесть?:</b></p>
    <p><input  name="v[13]" type="radio" value="1">Да
        <input name="v[13]" type="radio" value="0">Нет<br></p>

    <p><b>14.Вы пользуетесь такси?:</b></p>
    <p><input  name="v[14]" type="radio" value="1">Да
        <input name="v[14]" type="radio" value="0">Нет<br></p>

    <p><b>15.Вы любите танцевать?:</b></p>
    <p><input  name="v[15]" type="radio" value="0">Да
        <input name="v[15]" type="radio" value="1">Нет<br></p>

    <p><b>16.У вас есть дача?:</b></p>
    <p><input  name="v[16]" type="radio" value="0">Да
        <input name="v[16]" type="radio" value="1">Нет<br></p>

    <p><b>17.Вы пользуетсеь техникой apple?:</b></p>
    <p><input  name="v[17]" type="radio" value="0">Да
        <input name="v[17]" type="radio" value="1">Нет<br></p>

    <p><b>18.Вы любите яблоки?:</b></p>
    <p><input  name="v[18]" type="radio" value="0">Да
        <input name="v[18]" type="radio" value="1">Нет<br></p>

    <p><b>19.У вас спортивное телосложение?:</b></p>
    <p><input  name="v[19]" type="radio" value="1">Да
        <input name="v[19]" type="radio" value="0">Нет<br></p>

    <p><b>20.Вы любите петь?:</b></p>
    <p><input  name="v[20]" type="radio" value="0">Да
        <input name="v[20]" type="radio" value="1">Нет<br></p>

    
    <input type="submit" name="submit2" value="Отправить"><br>
    </form>';
if(isset($_POST["submit2"])){
    echo 'Сумма баллов составила ' . array_sum($_POST['v']) . " баллов <br>";
}
$su = array_sum($_POST['v']);
if ($su > 15) {
    echo "У Вас покладистый характер<br>";
    if ($su <= 15 & $su >= 8){
      echo "Вы не лишены недостатков, но с вами можно ладить<br>";}
         }
    else
        echo "Вашим друзьям можно посочувствовать<br>";



    ?>
</body>
<? require_once '../inc/footer.php' ?>
</html>
