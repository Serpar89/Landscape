<?php
error_reporting(-1);
?>
		<div class="result">
<?php //Урок №14 Методы и формы 
if (isset ($_POST['login'], $_POST['password'])) { 
	echo 'Поздравляю! '.$_POST['login'].'. Вы зарегистрированы!';
	//echo 'GET:<pre>'.print_r($_POST,1).'</pre>';
	if (isset ($_POST['Check'])) {
		echo '<br>Вам нравится :';
		;
		foreach ($_POST['Check'] as $v) {
			//$like = '';
			//$like.= $v.', '; // Не понимаю почему он выводит данные с ощибкой
			//echo $like; // Ошибка была в том что я неправильно выставил скобку оператора сравнения
			echo $v.', ';}
		}else echo '<br>Вы не указали что вам нравится';
	if (isset ($_POST['Age'])) {
		echo '<br>Ваш возраст '.$_POST['Age'];
	}else {
		echo '<br>Вы не указали свой возраст суки';}
	if (isset ($_POST['pol'])) {
		echo '<br>Ваш пол '.$_POST['pol'];
	}else {
		echo '<br> '.$_POST['login'].' вы не указали свой пол!';}
}else {
	 echo '<h4>Введите логин и пароль</h4>'
// echo 'POST:<pre>'.print_r($_POST,1).'</pre>';
?>
		</div>
<!-- <form action="" method="post">   
	<div>Введите логин:<input type="text" name="login"></div>
    <div>Введите пароль:<input type="password" name="password"></div>
    <div><input type="submit" name="submit" value="Отправить данные" style="background-color:#0F0"></div>
    <input type="reset" name="reset" value="Сброс">
</form> 
-->
<div class="form1">
<form action="" method="post">
	<div>Введите логин:<input type="text" name="login" value=""></div>
    <div>Введите пароль:<input type="password" name="password" value=""></div>
    <div>Пол<br>
    M <input type="radio" name="pol" value="Men"> |
    W <input type="radio" name="pol" value="Women"> 
    </div>
    <div>Age<br>
    16 <input type="radio" name="Age" value="16"> |
    18 <input type="radio" name="Age" value="18"> 
    </div>
    <div>Age<br>
    <label>Beer <input type="checkbox" name="Check[]" value="beer"> |</label>
    <label>Vodka <input type="checkbox" name="Check[]" value="vodka"> |</label>
    <label>Programming <input type="checkbox" name="Check[]" value="women"> |</label>
    <label>Games <input type="checkbox" name="Check[]" value="games">  </label>
    </div>
    <div><input type="submit" name="submit" value="Отправить данные"></div>
    	<input type="reset" name="reset" value="Сброс">
</form>
</div>
<?php } ?> 
