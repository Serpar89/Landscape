<?php
error_reporting(-1);
header('content-Type:text/html; charset=utf-8');
session_start();
?>
<div class="test">
<?php 
echo '<pre>',@print_r($_COOKIE),'</pre>';
if (@$_COOKIE['access'] == 1){
}else echo 'У вас нет доступа администратора', exit;


//$_SERVER['REMOTE_ADDR'] == '127.0.0.1';
//if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
//}else echo 'У вас нет доступа администратора', exit;


echo '<pre>',print_r($_SERVER),'</pre>';
?>
</div>