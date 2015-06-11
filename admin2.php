    <div class="form">
        <div class="result"> 
        <?php echo @$result;//'<pre>',print_r($_COOKIE),'</pre>'; ?>
        </div>
        <form action="" method="POST">
            <div class="f1">Введите логин:<input type="text" name="login" value=""></div>
            <div class="f1">Введите пароль:<input type="password" name="pass" value=""></div>
            <div class="f1">Введите email:<input type="text" name="email"></div>
            <div class="f1"><select size="2"  name="sex" >
                <option disabled>Sex</option>
                <?php foreach ($sex as $v) { ?>
                <option value="<?php echo $v; ?>"><?php echo $v ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="f1"><input type="submit" name="submit"></div>
            <div class="f1"><input type="reset" name="reset"></div>
         </form>
    </div>