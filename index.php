<?php
error_reporting(-1); // Вывод всех ошибок на экран и их логирование
header('content-Type:text/html; charset=utf-8');
define ('CREATED',2016); // Указываю константу копирайта 
session_start ();
//$_SESSION['name'] = 'serpar';
setcookie('access',@$_POST['email'],time()+3000,'/');
setcookie('email',@$_POST['email']);
//$_COOKIE['email'] = $_POST['email'];
setcookie('login',@$_POST['login']);
//$_COOKIE['login'] = $_POST['login'];
setcookie('sex',@$_POST['sex']);
//$_COOKIE['sex'] = $_POST['sex'];
setcookie('password',@$_POST['password']);
setcookie('access',@$_POST['access']);
//$_COOKIE['access'] = $_POST['access'];
$sex = array ('Men', 'Women');
	if (!empty($_POST['login']) && !empty ($_POST['pass'])){
		if(isset ($_POST['login'][4]) && isset ($_POST['pass'][4])){ // в логине и пароле не менее 5ти символов.
			if(isset ($_POST['sex'])) { 
				if (in_array ($_POST['sex'],$sex)){
					if(!empty ($_POST['email'])){
						if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
							$result = 'Вы успешно зарегистрировались';
							$_POST['access'] = 1;
						}else {$result = 'Вы указали email с ошибками';};
					} else {$result = 'Вы не указали email';};
				}else {$result = 'Вы не ввели пол';};
			}else $result = 'Вы не ввели пол';
			//$result = 'Вы успешно зарегистрировались'; // правильно она заполнина или нет
		}else {$result = 'Логин или пароль меньше 5-ти символов';}
	}else {$result = 'Введите логин, пароль и email для регистрации';}
		//$result = 'Введите логин, пароль и email для регистрации';
setcookie('access',@$_POST['access']);
?>

<?php
	if (isset ($_GET['page'])){  // Проверяем существует ли $_GET['page']
		}else {$_GET['page']='main';} // Если не существует присваиваем значение $_GET['page']='main'
		
	$allowed = array ('main','aboutus','server','test','admin','admin2','test2');// указываем разрешенные значения для $_GET['page']
	if (in_array($_GET['page'],$allowed)){ // Сравниваем $_GET['page'] с значениями массива
	}else {exit ('Вы ввели недопустимые значения');} // Если ввели недопустимые значения = прерываем скрипт
	echo '<pre>',@print_r($_POST),'</pre>';
	echo '<pre>',@print_r($_COOKIE),'</pre>';
	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LANDSCAPE DESING</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This site is the first Serpars work "> <!-- Краткое описание -->
        <meta name="keywords" content="LANDSCAPE, desing, creative, ideas,plantings"><!--Ключевые слова -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="Style.css" rel="stylesheet" type="text/css">
    </head>
<body>
  <div class="logo"><img src="bodyimagesmall.jpg" alt="mainimage"></div> <!-- main logo -->
  <div class="main"> <!-- Main Div -->
    <div class="head">
      <div class="mainname"> <!-- Main page, site-name  -->
        <p><span class="mainname colgrey">LANDSCAPE <span class="colgrey2"> DESING </span> <br>
        <span class="mainname2">creative desing ideas</span> </span></p>
      </div>
    </div>
    <div class="clear"></div> <!--  Clear both  -->
    <div class="navigation"> <!-- Main page, navigation  -->
      <div class="nb1"><a href="index.php?page=main">HOME</a></div>
      <div class="nb1"><a href="index.php?page=aboutus">ABOUT US</a></div>
      <div class="nb1"><a href="index.php?page=test">TEST</a></div>
      <div class="nb1"><a href="index.php?page=test2">Test 2</a></div>
      <div class="nb1"><a href="index.php?page=server">Server Info</a></div>
      <div class="nb1"><a href="index.php?page=admin2">ADMIN</a></div>
    </div>
  
    <div class="clear"></div> <!--  Clear both  -->
  
<?php include $_GET['page'].'.'.'php' // include page ?> 
        <div class="clear"></div> <!-- Clear both  -->     
        <hr class="line">
    <?php include 'bottom.php'// include bottom content ?>

	<?php 
        if (CREATED == date('Y')) { // сравниваем контстанту с текущим годом, если совпадает присваеваем год
            $year = date('Y'); 
        }else {$year = date('Y').'-'.CREATED;} // если не совпадает пишем года через дефис
    
    ?>
  </div> <!-- END OF THE MAIN --> 
  <div class="clear"></div> <!-- Clear both  -->
  <div class="footer">
    <div class="copyr"> LANDSCAPE.UNITED <?php echo $year ?> &copy; | <a class="li" href="#"> PRIVACY POLICY</a>
    </div>
  </div>
</body>
</html>