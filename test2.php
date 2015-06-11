<?php
error_reporting(-1);
header('content-Type:text/html; charset=utf-8');
session_start ();
?>

    <div class="test">
    <?php 
	echo '<pre>','SESSION :',print_r($_SESSION),'</pre>';
	echo '<pre>','COOKIE :',print_r($_COOKIE),'</pre>';
	

	?>
    
    </div>
