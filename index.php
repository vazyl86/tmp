<table border="1px solid">
    <tr>
    <th>№</th>
    <th>Имя функции</th>
    <th>Описание</th>
    <th>Аргументы</th>
    <tr>
        <td>1 HEEEEEEEE34242343242</td>
        <td>strpos</td>
        <td>int strpos ( string haystack, string needle [, int offset] )<br>
 Возвращает позицию первого вхождения подстроки needle в строку haystack. В отличие от strrpos(), использует всю строку needle, а не только первый символ.<br>
 Если подстрока needle не найдена, strpos() возвращает FALSE.</td>
    </tr>
    <tr>
        <td>2</td>
        <td>stlen</td>
        <td>int strlen ( string string )<br>
 Возвращает длину строки string.</td>
    </tr>
    <tr>
        <td>3</td>
        <td>list</td>
        <td>void list ( mixed varname, mixed ... )<br>
		Присвоить переменным из списка значения подобно массиву<br>
 Подобно array(), это не функция, а языковая конструкция. list() используется для того, чтобы присвоить списку переменных значения за одну операцию.<br>
Замечание: list() работает только с массивами, индексами которых являются числа и нумерация которых начинается с 0.</td>
    </tr>
    <tr>
        <td>4</td>
        <td>implode</td>
        <td>string implode ( string $glue , array $pieces )<br>
		Объединяет элементы массива с помощью строки glue.<br></td>
    </tr>
    <tr>
        <td>5</td>
        <td>explode</td>
        <td>array explode ( string $delimiter , string $string [, int $limit ] )<br>
Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя.</td>
    </tr>
    <tr>
        <td>6</td>
        <td>print_r </td>
        <td>mixed print_r ( mixed $expression [, bool $return = false ] )<br>
print_r() выводит информацию о переменной в удобочитаемом виде.<br>
print_r(), var_dump() и var_export() могут также показывать защищенные (protected) и закрытые (private) атрибуты объектов в PHP 5. Статические элементы класса не будут отображены.<br>
Если вы хотите перехватить вывод print_r(), используйте параметр return. Если его значение равно TRUE, то print_r() вернет результат вывода вместо вывода в браузер (который производится по умолчанию).</td>
    </tr>
    <tr>
        <td>7</td>
        <td>var_dump </td>
        <td>void var_dump ( mixed $expression [, mixed $... ] )<br>
Функция отображает структурированную информацию об одном или нескольких выражениях, включая их тип и значение. Массивы и объекты анализируются рекурсивно с разным отступом у значений для визуального отображения структуры.<br>
Все общедоступные, закрытые и защищенные свойства объекта будут возвращены при выводе, если только объект не реализует метод __debugInfo() (добавлен в PHP 5.6.0).</td>
    </tr>
    <tr>
        <td>8</td>
        <td>echo</td>
        <td>void echo ( string $arg1 [, string $... ] )<br>
Выводит все аргументы.<br>
На самом деле echo - это не функция, а конструкция языка, поэтому заключать аргументы в скобки необязательно.<br>echo (в отличии от других языковых конструкций) не ведет себя как функция, поэтому не всегда может быть использована в контексте функции. Вдобавок, если вы хотите передать более одного аргумента в echo, эти аргументы нельзя заключать в скобки.<br>
echo имеет также краткую форму, представляющую собой знак равенства, следующий непосредственно за открывающим тэгом. До версии PHP 5.4.0, этот сокращенный синтаксис допускался только когда включена директива конфигурации short_open_tag.</td>
    </tr>
    <tr>
        <td>9</td>
        <td>htmlspecialchars</td>
        <td>string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )<br>
Преобразует специальные символы в HTML-сущности<br>
В HTML некоторые символы имеют особый смысл и должны быть представлены в виде HTML сущностей, чтобы сохранить их значение. Эта функция возвращает строку, над которой проведены эти преобразования. Если вам нужно преобразовать все возможные сущности, используйте htmlentities().<br>
Если входная строка переданная в эту функцию и результирующий документ используют одинаковую кодировку символов, то этой функции достаточно, чтобы подготовить данные для вставки в большинство частей HTML документа. Однако, если данные содержат символы, не определенные в кодировке символов результирующего документа и вы ожидаете сохранения этих символов (как числовые или именованные сущности), то вам недостаточно будет этой и htmlentities() функций (которые только преобразуют подстроки с соответствующими сущностями). Необходимо использовать функцию mb_encode_numericentity().<br>
    </tr>
    <tr>
        <td>10</td>
        <td>lcfirst</td>
        <td>string lcfirst ( string $str )
Возвращает строку str, первый символ которой был преобразован в нижний регистр, если этот символ является буквой.<br>
Принадлежность того или иного символа к буквенным определяется с учетом текущей локали. Это означает, что, например, в используемой по умолчанию локали "C", символ ä не будет преобразован.<br>
    </tr>
    <tr>
        <td>11</td>
        <td> __invoke()</td>
        <td>mixed __invoke ([ $... ] )<br>
Метод __invoke() вызывается, когда скрипт пытается выполнить объект как функцию. Так же испльзуется объектом замыкания, иначе говоря PHP вызывает этот метод каждый раз когда видит круглые скобки после имени переменной.<br>
    </tr>
    <tr>
        <td>12</td>
        <td>usort</td>
        <td>bool usort ( array &$array , callable $value_compare_func )<br>
Эта функция сортирует элементы массива, используя для сравнения значений callback-функцию, предоставленную пользователем. Используйте эту функцию, если вам нужно отсортировать массив по какому-нибудь необычному признаку. <br>
    </tr>
    <tr>
        <td>13</td>
        <td>sqrt</td>
        <td>float sqrt ( float $arg )<br>
Возвращает квадратный корень из arg.<br>
    </tr>
    <tr>
        <td>14</td>
        <td>array_filter</td>
        <td>array array_filter ( array input [, mixed callback] )<br>
Функция array_filter() возвращает массив, содержащий значения массива исходный_массив, отфильтрованные в соответствии с результатом функции обратного вызова. Если исходный_массив является ассоциативным массивом, его ключи сохраняются.<br>
    </tr>
</table>


