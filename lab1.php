<?php

//разіменування змінних

$var = [1, 2, 3];

function getSecondElement($array) {
  return $array[1];
}

echo getSecondElement($var). "<br>"; // Выводим 2




//foreach

$fruits = array("apple", "banana", "orange");

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}





//concat

$string1 = 'Rainbow';
$string2 = 'unicorn';
$greeting = $string1 . ' ' . $string2. "<br>";
echo $greeting;








//порівняння :

$a = 5;
$b = "5";

if ($a == $b) {
    echo "a == b <br>";
} else {
    echo "a != b<br>";
}

if ($a === $b) {
    echo "a == b, type a == type b<br>";
} else {
    echo "a !== b, type a != type b<br>";
}




//Хеш-массив 

$students = array(
    'unicorn' => 20,
    'cat' => 7,
    'dog' => 5
);

// Добавление нового элемента
$students['bird'] = 3;

// Обращение к элементу по ключу
echo $students['bird'].'<br>';
// Итерирование по хэш-массиву
foreach ($students as $name => $age) {
    echo "$name is $age years old.<br>";
}




//Приведения типов

// string to int
$number1 = "123";
$number2 = (int) $number1;
$number3 = intval($number1);


// float to int
$float1 = 3.14;
$int1 = (int) $float1;
$int2 = intval($float1);

// int to string
$number4 = 456;
$string1 = (string) $number4;
$string2 = strval($number4);








// explode():
$str = "apple,banana,orange";
$arr = explode(",", $str);
print_r($arr);




//implode()
$array = array('apple', 'banana', 'orange');
$delimiter = ', ';
$string = implode($delimiter, $array);

echo '<br>'.$string;

?>