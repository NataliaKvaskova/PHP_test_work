<?php
echo "<h1>Лабораторная работа №1</h1>";
$num = 123;
echo "<h2>Переменные в php</h2><h3>Задание №1</h3><p>Переменная num = $num</p>";
$a = 10;
echo "<h3>Задание №2</h3><p>Переменная a = $a</p>";
$a = 20;
echo "Теперь значение переменной а = $a</p>";
echo "<h2>Математические операции с числами в PHP</h2><h3>Задание №1</h3>";
$a = 1+2+3;
echo "<p> Значение переменной а = сумме чисел 1, 2, 3 = $a";
$c = 10;
$d = 5;
$result = $c + $d;
echo "<h3>Задание №2</h3><p> Сумма переменных c = 10 и d = 5 равна $result";
$a = 1;
$b = 2;
$c = 3;
echo "<h3>Задание №3</h3><p> Сумма переменных a = 1, b = 2 и c = 3 равна " . $a+$b+$c;
$a = 10;
$b = 5;
$c = $a-$b;
$d = 7;
$result = $c + $d;
echo "<h3>Задание №4</h3><p>Значение переменной result равно (10-5) + 7 = $result";
echo "<h2>Приоритет математических операций в PHP</h2>";
echo "<h3> Задание 1</h3>";
echo "<p>При запуске кода<pre><code>
    < ?php
    $ a = 5 + 5 * 3;
    echo $ a;
    ?></code></pre>на экран будет выведено число 20</p>";
echo "<h3> Задание 2</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 5 + 5 * 3 + 3;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 23</p>";
echo "<h3> Задание 3</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 8 / 2 + 2;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 6</p>";
echo "<h3> Задание 4</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 8 + 2 / 2;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 9</p>";
echo "<h3> Задание 5 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 8 / 2 * 2;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 8</p>";
echo "<h3> Задание 6 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 8 * 4 / 2 / 2;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 8</p>";
echo "<h3> Задание 7 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = (2 + 3) * (2 + 3);
    echo $ a;
    ? ></code></pre>на экран будет выведено число 25</p>";
echo "<h3> Задание 8 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = (2 + 3) * 2 + 3;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 13</p>";
echo "<h3> Задание 9 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 2 * (2 + 4 * (3 + 1));
    echo $ a;
    ? ></code></pre>на экран будет выведено число 36</p>";
echo "<h3> Задание 10 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 2 * 8 / 4;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 4</p>";
echo "<h3> Задание 11 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = (2 * 8) / 4;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 4</p>";
echo "<h3> Задание 12 </h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 2 * (8 / 4);
    echo $ a;
    ? ></code></pre>на экран будет выведено число 4</p>";
echo "<h2>Дроби в PHP</h2>";
echo "<h3> Задание 1</h3>";
$a = 1.5;
$b = 0.75;
echo "<p>Сумма переменных a = 1.75 и b = 0.75 равна " . $a+$b;
echo "<h2>Отрицательные числа в PHP</h2>";
echo "<h3> Задание 1</h3>";
$a = -100;
echo "Значение переменной a равно $a";
echo "<h3> Задание 2</h3>";
$a = -5;
$b = 3;
echo "<p> Число с обратным знаком переменной a = $a равно " . $a*-1 . "</p><p> Число с обратным знаком переменной b = $b равно " . $b*-1 . "</p>";
echo "<h2>Остаток от деления в PHP</h2>";
echo "<h3> Задание 1</h3>";
$a = 10;
$b = 3;
echo "<p>Остаток при делении 10 на 3 равен " . $a%$b . "</p>";
echo "<h2>Возведение в степень в PHP</h2>";
echo "<h3> Задание 1</h3>";
echo "2 в 10 степени равно " . 2**10;
echo "<h3> Задание 2</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 3 * 2 ** 3;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 24</p>";
echo "<h3> Задание 3</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = (3 * 2) ** 3;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 216</p>";
echo "<h3> Задание 4</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 3 * 2 ** (3 + 1);
    echo $ a;
    ? ></code></pre>на экран будет выведено число 48</p>";

echo "<h3> Задание 5</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 2 ** 3 * 3;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 24</p>";

echo "<h3> Задание 6</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = 3 * 2 ** 3 * 3;
    echo $ a;
    ? ></code></pre>на экран будет выведено число 72</p>";
echo "<h2>Строки в PHP</h2>";
echo "<h3> Задание 1</h3>";
$str = 'Hello';
echo"$str";
echo "<h3> Задание 2</h3>";
$str =  'abc';
$str1 = 'def';
echo $str . $str1;
echo "<h3> Задание 3</h3>";
$str =  'Hello';
$str1 = 'world';
echo $str . " " . $str1;
echo "<h3> Задание 4</h3>";
$str3 = 'i love me';
echo "Длина строки в переменной <code> " . $str3 . " </code>равна " . strlen($str3);
echo "<h3> Задание 5</h3>";
$str3 = 'Я хочу к морюшку, отдыхать, наслаждать и радоваться жизни';
echo "Длина строки в переменной <code> " . $str3 . " </code>равна " . mb_strlen($str3);
echo "<h2>Работа с HTML тегами в PHP</h2>";
echo "<h3> Задание 1</h3>";
echo "<i>С помощью тега i выведите на экран курсивный текст.</i>";
echo "<h3> Задание 2</h3>";
echo "1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9";
echo "<h3> Задание 3</h3>";
echo "<img src='img_1.png' alt='Smiley face'></img>";
echo "<h3> Задание 4</h3>";
echo "<input type= 'text' size='80px' placeholder='инпут с каким-то текстом'></input>";
echo "<h3> Задание 5</h3>";
echo "<textarea cols='80'>Многостроничное сообщение с каким-то текстом для упражнения</textarea>";
echo "<h2>Логические значения в PHP</h2>";
echo "<h3> Задание 1</h3>";
$a = true;
echo "Значение переменной a равно $a";
echo "<h3> Задание 2</h3>";
$b = false;
echo "Значение переменной b равно " . intval($b);
echo "<h2>Значение null в PHP</h2>";
echo "<h3> Задание 1</h3>";
$a = null;
echo "<p>Значение переменной а = null равно  $a</p><p style='color:blue;'><i>пустая строка </i></p>";
echo "<h3> Задание 2</h3>";
echo "$undefine <p style='color:blue;'><i>При попытке вывести необъявленную переменную выходит сообщение об ошибке: переменная не определена (Undefined)</i></p>";
echo "<h2>Автоматическое преобразование типов в PHP</h2>";
echo "<h3> Задание 1</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ a = '1';
    $ b = '2';
    echo $ a + $ b + '3';
    ? ></code></pre>на экран будет выведено число 6</p>";
echo "<h2>Принудительное преобразование типов в PHP</h2>";
echo "<h3> Задание 1</h3>";
$str = '12345';
$str = intval($str);
echo "Строковая переменная str = $str преобразована в <span style='color:blue;'>" . gettype($str) . "</span>";
echo "<h3> Задание 2</h3>";
$str = '12.345';
$str = (float)$str;
echo "Строковая переменная str = $str преобразована в <span style='color:blue;'>" . gettype($str) . "</span>";
echo "<h3> Задание 3</h3>";
$str = (int)$str;
echo "Строковая переменная str = 12.345 преобразована в <span style='color:blue;'>" . gettype($str) . "</span> преобразованное значение равно $str";
echo "<h3> Задание 4</h3>";
$test = 12345;
$test = (string)$test;
echo "Числовая переменная test = 12345 преобразована в <span style='color:blue;'>" . gettype($test) . "</span> преобразованное значение равно $test";
echo "<h3> Задание 5</h3>";
$test = 12.345;
$test = (string)$test;
echo "Числовая переменная test = 12.345 преобразована в <span style='color:blue;'>" . gettype($test) . "</span> преобразованное значение равно $test";
echo "<h2>Получение символов строки на PHP</h2>";
echo "<h3> Задание 1</h3>";
$str = 'abcde';
echo "$str[0], $str[2], $str[4]";
echo "<h3> Задание 2</h3>";
$str ='edcba';
$str2 = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo "<p>Первая строка равна = $str,</p><p>вторая строка = $str2</p>";
echo "<h3> Задание 3</h3>";
$index = 2;
if($index <= mb_strlen($str2)){
echo "<p>" . ($index+1) . " символ в строке $str2 = $str2[$index]</p>";
} else{echo "В строке нет такого символа";};
echo "<h3> Задание 4</h3>";
$text = "This is the string to search for characters";
echo "Последний символ строки <code> $text</code> равняется <span style='color:green;'> " . $text[strlen($text)-1] . "</span>";
echo "<h3> Задание 5</h3>";
echo "Предпоследний символ строки <code> $text</code> равняется <span style='color:green;'> " . $text[strlen($text)-2] . "</span>";
echo "<h3> Задание 6</h3>";
echo "Предпредпоследний символ строки <code> $text</code> равняется <span style='color:green;'> " . $text[strlen($text)-3] . "</span>";
echo "<h3> Задание 7</h3>";
$textNum = "12345";
$sumNum = $textNum[0] + $textNum[1] + $textNum[2] + $textNum[3] + $textNum[4];
echo "Сумма цифр строки $textNum равна $sumNum";
echo "<h3> Задание 8</h3>";
$nums = 12345;
$nums = (string)$nums;
$sumNum = $nums[0] + $nums[1] + $nums[2] + $nums[3] + $nums[4];
echo "Сумма цифр в числе $nums равна $sumNum";
echo "<h3> Задание 9</h3>";
$prodNum = $nums[0] * $nums[1] * $nums[2] * $nums[3] * $nums[4];
echo "Произведение цифр в числе $nums равна $prodNum";
echo "<h3> Задание 10</h3>";
$nums = 12345;
$nums = strrev($nums);
echo "Перевернутое с конца число 12345 равно $nums";
echo "<h2>Сокращенные операции в PHP</h2>";
echo "<h3> Задание 1</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ num = 1;
    $ num = $ num + 1;
    $ num = $ num + 1;
    echo $ num;
    ? ></code></pre>на экран будет выведено число 3</p>";
echo "<h3> Задание 2</h3>";
echo "<p>При запуске кода<pre><code>
    < ? php
    $ num = 1;
    $ num = $ num + 2;
    $ num = $ num + 3;
    echo $ num;
    ? ></code></pre>на экран будет выведено число 6</p>";
echo "<h3> Задание 3</h3>";
echo '<p><b>Код</b><pre><code>
    < ? php
    $num = 47;
    $num = $ num + 7;
    $num = $ num - 18;
    $num = $ num * 10;
    $num = $ num / 15;
    echo $num;
    ? ></code></pre><b>можно заменить на код</b><pre><code>$num = ((47+7)-18)*10/15;
echo $num;</code></pre> </p>';
echo "<h3> Задание 4</h3>";
echo '<p><b>Код</b><pre><code>
    < ? php
    $str = "a";
    $str = $str . "b";
    $str = $str . "c";
    echo $str;
    ? ></code></pre><b>можно заменить на код</b><pre><code>$str = "a" . "b" . "c";
echo $str;</code></pre> </p>';
echo "<h2>Операции инкремента и декремента в PHP</h2>";
echo "<h3> Задание 1</h3>";
echo '<p><b>Код</b><pre><code>
    < ? php
    $num = 10;
    $num = $num + 1;
    $num = $num + 1;
    $num = $num - 1;
    echo $num;
    ? ></code></pre><b>можно заменить на код</b><pre><code>
    $num = 10;
    $num ++;
    $num ++;
    $num --;
    echo $num;</code></pre> </p>';
echo "<h3> Задание 2</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num = 3;
    echo ++$num;
    ? ></code></pre> на экран будет выведено число 4</p>';
echo "<h3> Задание 3</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num = 3;
    echo $num++;
    ? ></code></pre> на экран будет выведено число 3. Потому что команда сначала выводит переменную, операция инкремента идет после переменной, поэтому увеличения не будет </p>';
echo "<h3> Задание 4</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num = 3;
    echo --$num;
    ? ></code></pre> на экран будет выведено число 2</p>';
echo "<h3> Задание 5</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num = 3;
    echo $num--;
    ? ></code></pre> на экран будет выведено число 3</p>';
echo "<h3> Задание 6</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num1 = 3;
    $num2 = ++$num1;
    echo $num1;
    echo $num2;
    ? ></code></pre> на экран будет выведены числа 4 и 4. Потому что в третьей строке кода команда сначала увеличит переменную $num1 на единицу, а потом запишет ее в переменную $num2 </p>';
echo "<h3> Задание 7</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num1 = 3;
    $num2 = $num1++;
    echo $num1;
    echo $num2;
    ? ></code></pre> на экран будет выведены числа 4 и 3. Потому что во третьей строке кода команда сначала запишет в переменную $num2  переменную $num1, а потом увеличит $num1  на единицу</p>';

echo "<h3> Задание 8</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num1 = 3;
    $num2 = --$num1;
    echo $num1;
    echo $num2;
    ? ></code></pre> на экран будет выведены числа 2 и 2</p>';
echo "<h3> Задание 9</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num1 = 3;
    $num2 = $num1--;
    echo $num1;
    echo $num2;
    ? ></code></pre> на экран будет выведены числа 2 и 3</p>';
echo "<h3> Задание 10</h3>";
echo '<p>при запуске кода<pre><code>
    < ? php
    $num1 = 3;
    $num1++;
    $num2 = $num1--;
    echo $num1++;
    echo --$num2;
    ? ></code></pre> на экран будет выведены числа 3 и 3</p>';
echo "<h2>Практика на операции в PHP</h2>";
echo "<h3> Задание 1</h3>";
$sec = 24*60*60;
echo "В сутках $sec секунд";
echo "<h3> Задание 2</h3>";
$sec = 30*24*60*60;
echo "В 30 сутках $sec секунд";
echo "<h3> Задание 3</h3>";
$sec = 360*24*60*60;
$sec1 =361*24*60*60;
echo "В обычном году $sec секунд. В високосном $sec1 секунд";
echo "<h3> Задание 4</h3>";
$min = 24*60;
echo "В сутках $min минут";
echo "<h3> Задание 5</h3>";
$min = 360*24*60;
$min1 =361*24*60;
echo "В обычном году $min минут. В високосном $min1 минут";
echo "<h3> Задание 6</h3>";
$Kb = 1024;
$Mb = $Kb**2;
echo "1Mb равен $Mb байтам";
echo "<h3> Задание 7</h3>";
$Gb = $Kb**3;
echo "1GB равен $Gb байтам";
echo "<h3> Задание 8</h3>";
$Gb = 10 * $Kb**3;
echo "10GB равен $Gb байтам";
echo "<h3> Задание 9</h3>";
$Tb = $Kb**4;
echo "1TB равен $Tb байтам";
echo "<h3> Задание 10</h3>";
$Tb = $Kb**3;
echo "1TB равен $Tb килобайтам";
echo "<h2>Практика на формулы в PHP</h2>";
echo "<h3> Задание 1</h3>";
function areaCircle($r){
    return 3.14*$r**2;
};
$r1 = 15;
$areaCir = areaCircle($r1);
echo "Площадь круга с радиусом $r1 см равна $areaCir см";
echo "<h3> Задание 2</h3>";
function areaSquare($l){
    return $l**2;
};
$l = 15;
$aSquare = areaSquare($l);
echo "Площадь квадрата со стороной $l см равна $aSquare см";
echo "<h3> Задание 3</h3>";
function areaRectangle($h, $w){
    return $h*$w;
};
$h = 15;
$w = 10;
$aRectangle = areaRectangle($h, $w);
echo "Площадь прямоугольника со сторонами $h см и $w см равна $aRectangle см";
echo "<h3> Задание 4</h3>";
function perimeterRectangle($h, $w){
    return $h*2 + 2*$w;
};
$aRectangle = perimeterRectangle($h, $w);
echo "Периметр прямоугольника со сторонами $h см и $w см равен $aRectangle см";
echo "<h3> Задание 5</h3>";
function tfahrenheit ($c){
    return ($c * 9/5) + 32;
}
$c = 15;
$c = tfahrenheit ($c);
echo "15С = " . round($c, 2) . "F";
echo "<h3> Задание 6</h3>";
function tCelsius ($c){
    return ($c - 32)* 5/9;
}
$c = 69;
$c = tCelsius($c);
echo "69F = " . round($c, 2) . "C";












   

