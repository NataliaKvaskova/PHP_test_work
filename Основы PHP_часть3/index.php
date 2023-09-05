<?php
echo "<h1>Лабораторная работа №3</h1>";
echo "<h2>Условные конструкции в PHP</h2>";
echo "<h2>Конструкция if-else в PHP</h2>";
echo "<h3>Задание 1-5</h3>";
echo '<p>Проверьте то, что переменная $test больше 10.</p>';
$test = 15;
echo "<p>Переменная test = $test</p>";
if($test > 10){
    echo "<p>Переменная test больше 10</p>";
}elseif($test <10) 
    {echo "<p>Переменная test меньше 10</p>";}
    elseif($test === 10) {echo "<p>Переменная test равна 10</p>";};

echo "<h3>Задание 6</h3>";
echo '<p>Проверьте то, что переменная $test не равна 10.</p>';
if ($test !==10){
    echo "<p>Условие выполнено. Переменная test неравна 10</p>";
}else{
    echo "<p>Условие не выполнено. Переменная test равна 10</p>";
};

echo "<h3>Задание 7</h3>";
echo '<p>Даны переменные $test1 и $test2. Проверьте, значение какой из этих переменных больше и выведите соответствующее сообщение на экран.</p>';
$test1 = 5;
$test2 = 7;
echo "<p>Переменная test1 = $test1</p><p>Переменная test2 = $test2</p>";
if ($test1 > $test2){
    echo "<p>Переменная <b>test1</b> больше переменной <b>test2</b>";
}else{echo "<p>Переменная <b>test2</b> больше переменной <b>test1</b>";};

echo "<h2>Типы данных и конструкция if-else в PHP";
echo "<h3>Задание 1</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = "3";
    $test2 = "3";
       
    if ($test1 == $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h3>Задание 2</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = "3";
    $test2 = "3";
       
    if ($test1 === $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';

    echo "<h3>Задание 3</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = 3;
    $test2 = "3";
       
    if ($test1 == $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';

    echo "<h3>Задание 4</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = 3;
    $test2 = "3";
       
    if ($test1 === $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';

    echo "<h3>Задание 5</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = 3;
    $test2 = 3;
       
    if ($test1 === $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';

    echo "<h3>Задание 6</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
     $test1 = "3";
    $test2 = "3";
       
    if ($test1 != $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 7</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
   $test1 = "3";
    $test2 = "3";
       
    if ($test1 !== $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 8</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = 3;
    $test2 = "3";
       
    if ($test1 != $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 9</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = 3;
    $test2 = "3";
       
    if ($test1 != $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h3>Задание 10</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test1 = 3;
    $test2 = 2;
       
    if ($test1 !== $test2) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h2>Команда isset в PHP";
    echo "<h3>Задание 1</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test = 0;
   
    if (isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h3>Задание 2</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
    $test = null;
   
    if (!isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h3>Задание 3</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
     $test = null;
   
    if (isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 4</h3>";
    echo '<p>при запуске кода<pre><code>
    < ? php
      if (!isset($test3)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h3>Задание 5</h3>";
    echo '<p>при запуске кода<pre><code>
    $test = "";
  
   if (isset($test)) {
       echo "+";
   } else {
       echo "-";
   }
   ? ></code></pre> на экран будет выведено "+"</p>';
   echo "<h3>Задание 6</h3>";
   echo '<p>при запуске кода<pre><code>
      if (!isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-", тк переменная $test была объявлена ранее</p>';
    echo "<h3>Задание 7</h3>";
    echo '<p>при запуске кода<pre><code>
      $test = false;
   
    if (isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"</p>';
    echo "<h3>Задание 8</h3>";
    echo '<p>при запуске кода<pre><code>
     $arr = [1, 2, 3, 4, 5];
   
    if (isset($arr[])) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет сообщение об ошибке: невозможно использовать <b>[]</b> для чтения. Если убрать [], на экран будет выведено "+"</p>';

    echo "<h2>Команда empty в PHP</h2>";
    echo "<h3>Задание 1</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = 0;
   
    if (empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+", тк условие истинно: значение переменной равно 0</p>';

    echo "<h3>Задание 2</h3>";
    echo '<p>при запуске кода<pre><code>
    $test = -1;
   
    if (empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 3</h3>";
    echo '<p>при запуске кода<pre><code>
    $test = "";
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 4</h3>";
    echo '<p>при запуске кода<pre><code>
    $test = -1;
   
    if (empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"</p>';
    echo "<h3>Задание 5</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = "0";
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-". Т.к. в переменной установлена строка со значение 0</p>';
    echo "<h3>Задание 6</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = -1;
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';
    echo "<h3>Задание 7</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = null;
   
    if (empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';
    echo "<h3>Задание 8</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = false;
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-", тк установлено значение False, что приравнивается к 0 (пустому) значению';
    echo "<h3>Задание 9</h3>";
    echo '<p>при запуске кода<pre><code>
      $test = true;
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';
    echo "<h3>Задание 10</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = "false";
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';
    echo "<h3>Задание 11</h3>";
    echo '<p>при запуске кода<pre><code>
     $test = "null";
   
    if (!empty($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';
    echo "<h3>Задание 12</h3>";
    echo '<p>при запуске кода<pre><code>
      $test = 0;
   
    if (isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';
    echo "<h3>Задание 13</h3>";
    echo '<p>при запуске кода<pre><code>
    $test = null;
   
    if (isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "-"';
    echo "<h3>Задание 14</h3>";
    echo '<p>при запуске кода<pre><code>
    $test = false;
   
    if (isset($test)) {
        echo "+";
    } else {
        echo "-";
    }
    ? ></code></pre> на экран будет выведено "+"';

    echo "<h2>Комбинации конструкций if-else в PHP</h2>";
    echo "<h3>Задание 1-3</h3>";
    $day = 31;
    if($day >0 && $day <=10){
        echo "Число $day относится к 1 декаде месяца";
    }elseif ($day >10 && $day <= 20){
        echo "Число $day относится ко 2 декаде месяца";
    }
    elseif ($day >11 && $day <= 31){
    echo "Число $day относится к 3 декаде месяца";
    }else {echo "<b>ОШИБКА: </b>Число $day не относится к числам месяца";};

    echo "<h3>Задание 4</h3>";
    
function sumNum ($a){
    $aArr = str_split(((string)$a), $length=1);
    echo "<p><b> переменная age равна $a </b></p>";
    $summNumeric = 0;
    foreach ( $aArr as $numeric){
        $summNumeric = $summNumeric + (int)$numeric;
    };

    if ( $a >10 &&  $a <99){
        if ($summNumeric <= 9){
            echo "В числе  $a сумма цифр ($summNumeric) однозначна;";}
            else {echo "В числе  $a сумма цифр ($summNumeric) двузначна;";};


        }else {echo "Число $a не попадает в диапозон чисел от 10 до 99;";};
};
$age = 5;
echo sumNum($age);
$age = 15;
echo sumNum($age);
$age = 86;
echo sumNum($age);
$age = 105;
echo sumNum($age);

echo "<h2>Практика на условия if-else в PHP</h2>";
echo "<h3>Задание 1</h3>";
echo '<p> В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).</p>';
function monthName ($a){
    if ($a >0 && $a <13){
        if ($a === 1){
            echo "Январь<br>";}
            elseif ($a === 2){
                echo "Февраль<br>";}
                elseif ($a === 3){
                    echo "Март<br>";}
                        elseif ($a === 4){
                            echo "Апрель<br>";}
                            elseif ($a === 5){
                                echo "Май<br>";}
                                    elseif ($a === 6){
                                        echo "Июнь<br>";}
                                        elseif ($a === 7){
                                            echo "Июль<br>";}
                                            elseif ($a === 8){
                                                echo "Август<br>";}
                                                elseif ($a === 9){
                                                    echo "Сентябрь<br>";}
                                                    elseif ($a === 10){
                                                        echo "Октябрь<br>";}
                                                        elseif ($a === 11){
                                                            echo "Ноябрь<br>";}
                                                            elseif ($a === 12){
                                                                echo "Декабрь<br>";}
    }else {echo "<span style='color:red;'>Число не обозначает месяц;</span>";};
};

$monthNum = 5;
echo "Переменная <b>month равна $monthNum</b>. Обозначает: ";
monthName($monthNum);
$monthNum = 11;
echo "Переменная <b>month равна $monthNum</b>. Обозначает: ";
monthName($monthNum);
$monthNum = 55;
echo "Переменная <b>month равна $monthNum</b>. Обозначает: ";
monthName($monthNum);

echo "<h3>Задание 2</h3>";
echo '<p> Дана строка, состоящая из символов, например, "abcde". Проверьте, что первым символом этой строки является буква "a".</p>';
$str = 'abcde';
if ($str[0]==="a"){
    echo "Условие выполнено, первый символ строки $str равен 'a'";
}else {echo "Условие невыполнено, первый символ строки неравен 'a'";};
echo "<h3>Задание 3</h3>";
echo '<p> Дано число, например, 12345. Проверьте, что первым символом этого числа является цифра 1, 2 или 3.</p>';
$num = 12345;
$str = (string)$num;
if ($str[0]==="1" || $str[0]==="2" || $str[0]==="3"){
    echo "Условие выполнено, первый символ строки $str равен " . $str[0];
}else {echo "Условие невыполнено, первый символ строки равен" . $str[0];};
echo "<h3>Задание 4</h3>";
echo '<p> Дано трехзначное число. Найдите сумму цифр этого числа.</p>';
$a = 345;
$aArr = str_split(((string)$a), $length=1);
    $summNumeric = 0;
    foreach ( $aArr as $numeric){
        $summNumeric = $summNumeric + (int)$numeric;
    };
echo "Сумма цифр числа $a равна  $summNumeric";

echo "<h3>Задание 5</h3>";
echo '<p> Дано число из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.</p>';

$a = 345845;
$a = (string)$a;
if (($a[0] + $a[1] + $a[2]) == ($a[3] + $a[4] + $a[5])){
    echo "Условие выполнено. В числе $a cумма первых трех цифр равняется сумме вторых трех цифр.";
} else {echo "Условие невыполнено. В числе $a cумма первых трех цифр НЕ равняется сумме вторых трех цифр.";};

echo "<h2>Конструкция switch-case в PHP";
echo "<h3>Задание 1</h3>";
echo '<p> Переменная $num может принимать значения 1, 2, 3 или 4. Определите, в какую пору года попадает значение этой переменной.</p>';
$number = 12;
function sessons ($a){
    switch ($a) {
        case 1:
            $result = 'Зима';
        case 2:
            $result = 'Весна';
        break;
        case 3:
            $result = 'Лето';
        break;
        case 4:
            $result = 'Осень';
    }
 return $result;
};
$number = 12;
if($number > 0 && $number <5){
    echo "<p>Число $number: " . sessons($number) . "</p>";
} else {echo "<p>Число $number не попадает в диапозон от 1 до 4;</p>";};

$number = 1;
if($number > 0 && $number <5){
    echo "<p>Число $number: " . sessons($number) . "</p>";
} else {echo "<p>Число $number не попадает в диапозон от 1 до 4;</p>";};

$number = 3;
if($number > 0 && $number <5){
    echo "<p>Число $number: " . sessons($number) . "</p>";
} else {echo "<p>Число $number не попадает в диапозон от 1 до 4;</p>";};

echo "<h2>Логические операции в PHP";
echo "<h3>Задание 1</h3>";
echo '<p> Пусть даны следующие переменные:
<pre><code>
< ? php
    $a = 2 * (3 - 1);
    $b = 6 - 2;
? >
</code></pre>
Используя оператор ==, узнайте, равны ли значения этих переменных или нет.</p>';

$a = 2 * (3 - 1);
$b = 6 - 2;

if ($a === $b){
    echo "<p>Переменные a и b равны</p>";
}else{ echo "<p>Переменные a и b НЕравны</p>";};

echo "<h3>Задание 2</h3>";
echo '<p> Пусть даны следующие переменные:
<pre><code>
< ? php
    $a = 5 * (7 - 4);
    $b = 1 + 2 + 7;
? >
</code></pre>
Используя оператор >, узнайте, больше ли переменная $a, чем $b.</p>';
$a = 5 * (7 - 4);
$b = 1 + 2 + 7;

if ($a > $b){
    echo "<p>Переменная a больше b</p>";
}else{ echo "<p>Переменные a НЕбольше b</p>";};

echo "<h3>Задание 3</h3>";
echo '<p> Пусть даны следующие переменные:
<pre><code>
< ? php
    $a = 2 ** 4;
    $b = 4 ** 2;
? >
</code></pre>
Используя оператор !=, узнайте, разные ли значения этих переменных или нет.</p>';
$a = 2 ** 4;
$b = 4 ** 2;
if ($a != $b){
    echo "<p>Переменные a и b Неравны</p>";
}else{ echo "<p>Переменные a и b равны</p>";};






