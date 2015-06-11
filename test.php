<?php
error_reporting(-1);
header('content-Type:text/html; charset=utf-8');
?>

<div class="test">Тестирование is_numeric
<?php
echo '<pre>';
$tests = array(
    "424", 
    133, 
    "1e4", 
    "not numeric",
	array ('s',1,1,2,3	), 
    9.1
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo "'{$element}' - число", PHP_EOL;
    } else {
        echo @"'{$element}' - НЕ число", PHP_EOL;
    }
}
echo is_array($tests['4']) ? 'Массив' : 'Не массив';
echo "\n";


echo '</pre>';
echo'Testing is array';
echo '<pre>';
$yes = array('это', 'массив');

echo is_array($yes) ? 'Массив' : 'Не массив';
echo "\n";

$no = 'это строка';

echo is_array($no) ? 'Массив' : 'Не массив';
echo '</pre>';


echo'Testing is_float or is_double or is_real';
echo '<pre>';
if (is_float(27.25)) {
    echo "is float\n";
} else {
    echo "is not float\n";
}
var_dump(is_float('abc'));
var_dump(is_float(23));
var_dump(is_float(23.5));
var_dump(is_float(1e7));  //Научная форма записи
var_dump(is_float(true));
echo '</pre>';


echo'Testing is_int or is_integer or is_long';
echo '<pre>';
$var = (int)'5 dsad';
if (is_int($var)) {
    echo $var.' '."целое\n";
} else {
    echo $var.' '."не целое\n";
}
var_dump(is_int(23));
var_dump(is_int("23"));
var_dump(is_int(23.5));
var_dump(is_int(true));;
echo '</pre>';

echo'Testing is_string';
echo '<pre>';
if (is_string("23")) {
    echo "строка\n";
} else {
    echo "не строка\n";
}
var_dump(is_string('abc'));
var_dump(is_string("23"));
var_dump(is_string(23.5));
var_dump(is_string(true));
echo '</pre>';

echo'Testing is_null';
echo '<pre>';
$foo = 10;
@var_dump(is_null($inexistent), is_null($foo));
echo '</pre>';

echo'Testing is_bool';
echo '<pre>';

$a = false;
$b = 0;
// Так как $a является булевой переменной, функция вернет true
if (is_bool($a)) {
    echo "Да, это булевая переменная\n";
}

// Так как $b не является булевой переменной, функция вернет false
if (is_bool($b)) {
    echo "Да, эasdasdеменная\n";
}else echo "Нет, это не булевая переменная";
echo '</pre>';

echo'Testing $var for type';
echo '<pre>';
$var = "1 and one";
echo $var." type unset".'<br>';
$var = (string) "1 and one";
echo $var." type string".'<br>';
$var = (int)"23 and one";
echo $var." type int".'<br>';
$var = (bool)10000;
echo $var.' type boll'.'<br>';
echo '</pre>';


echo'Testing unset';
echo '<pre>';
function foo() 
{    unset($GLOBALS['bar']); // Удаляем bar через глобальную область видимости
}
$bar = "something";
foo(); // После вывода даной функции $bar станет неопределеноё - несущетсвующей
echo @$bar; // Undefined variable: bar
echo '</pre>';


echo'Testing isset - array';
echo '<pre>';

$a = array ('test' => 0, 'hello' => 0, 'pie' => array('a' => 'apple', 'b' => 'apple'),
	'cake' => array ('a' => 'name', 'b' => 'text' ));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['foo']));             // FALSE
var_dump(isset($a['hello']));           // FALSE

// Элемент с ключом 'hello' равен NULL, поэтому он считается неопределенным
// Если Вы хотите проверить существование ключей со значением NULL, используйте: 
var_dump(array_key_exists('hello', $a)); // TRUE

// Проверка вложенных элементов массива
var_dump(isset($a['pie']['a']));        // TRUE
var_dump(isset($a['pie']['c']));        // FALSE
var_dump(isset($a['cake']['c']));  // FALSE

echo '</pre>';

echo'Testing isset $';
echo '<pre>';
$a = 'someting';
echo 1 , var_dump(isset($a['text'])); 			//
echo 2 , var_dump(isset($a[0]));			//
echo 3 , var_dump(isset($a['0']));			//
echo 4 , var_dump(isset($a[0.5]));			//
echo 5 , var_dump(isset($a['0.5']));			//
echo 6 , var_dump(isset($a[7]));			//
echo 7 , var_dump(isset($a[8])); 			//

echo '</pre>';

echo'Testing isset $ = array';
echo '<pre>';
$a = array( 'key'=>'someting');
echo 1 , var_dump(isset($a['key'][2])); 			//
echo 2 , var_dump(isset($a[0][8]));			//
echo 3 , var_dump(isset($a[0][9]));			//
echo 4 , var_dump(isset($a['1']));			//
echo 5 , var_dump(isset($a[2]));			//
echo 6 , var_dump(isset($a['2']));			//
echo 7 , var_dump(isset($a[3])); 			//
echo 8 , var_dump(isset($a['3']));			//
echo 9 , var_dump(isset($a[9.9]));			//
echo 10 , var_dump(isset($a['9.9']));		//
echo 11 , var_dump(isset($a[11]));			//
echo 12 , var_dump(isset($a['11']));		//
echo 13 , var_dump(isset($a['text'])); 		//
echo 14 , var_dump(isset($a['5 text']));	//	
echo '</pre>';

if (isset($a['key'][7])){
	echo '<br>массив А существует, в его строке с индексом 7 есть знак';
}else {echo 'массив А не существует, в его строке с индексом 8 нет знака';
}

if (isset($a['key']['someting'])){
	echo '<br>массив А существует, в его строке с индексом 7 есть знак';
}else {echo '<br>массив А не существует, в его строке с индексом 8 нет знака';
}

$x = array ('b' => array ('c' => 'apple'));
if (isset($x['b']['c'][5])){
	echo '<br>массив А существует, в его строке с индексом 7 есть знак';
}else {echo '<br>массив А не существует, в его строке с индексом 8 нет знака';
}

echo'Testing empty';
echo '<pre>';
$a = 'someting';
echo 4 , var_dump(empty($a['text']));			// 
echo 5 , var_dump(empty($a[0]));			//
echo 6 , var_dump(empty($a['0']));			//
echo 7 , var_dump(empty($a[3])); 			//
echo 8 , var_dump(empty($a['3']));			//
echo 9 , var_dump(empty($a[0.5]));			//
echo 10 , var_dump(empty($a['0.5']));		//
echo 11 , var_dump(empty($a['text']));			//
echo 12 , var_dump(empty($a['0 text']));		//
echo '</pre>';


echo'isset and empty $var=0' ;
echo '<pre>';
$var = NULL;

// Принимает значение true, потому что $var пусто
if (empty($var)) {
    echo '$var или 0, или пусто, или вообще не определена';
}

// Принимает значение true, потому что $var определена
if (isset($var)) {
    echo '$var определена, даже если она пустая';
}
echo '</pre>';

echo'TESTING gettype' ;
echo '<pre>';
$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $key => $value) {
    echo $key,'=',gettype($value), "\n";
}
echo '</pre>';

echo'TESTING Count' ;
echo '<pre>';
$array = array (1,2,4,5,7,9,2,12);
echo count($array);
echo '</pre>';

echo'TESTING date' ;
echo '<pre>';
//echo date (DATE_RSS);
echo  date('l jS \of F Y h:i:s A');
echo '</pre>';
?>

</div>
