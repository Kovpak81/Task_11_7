<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Таблица</title>
</head>
<body>
    <?php
include 'number.php';
?>
    <h1>Таблица истинности PHP</h1>
    <table>
        <thead>
            <tr>
                <th>А</th>
                <th>В</th>
                <th>!А</th>
                <th>А||B</th>
                <th>A&&B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>0</td>
                <td><?php var_dump(!$a);?></td>
                <td><?php var_dump($a||$b);?></td>
                <td><?php var_dump($a&&$b);?></td>
                <td><?php var_dump($a xor $b);?></td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td><?php var_dump(!$a);?></td>
                <td><?php var_dump($a||$b2);?></td>
                <td><?php var_dump($a&&$b2);?></td>
                <td><?php var_dump($a xor $b2);?></td>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td><?php var_dump(!$a2);?></td>
                <td><?php var_dump($a2||$b);?></td>
                <td><?php var_dump($a2&&$b);?></td>
                <td><?php var_dump($a2 xor $b);?></td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td><?php var_dump(!$a2);?></td>
                <td><?php var_dump($a2||$b2);?></td>
                <td><?php var_dump($a2&&$b2);?></td>
                <td><?php var_dump($a2 xor $b2);?></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h1>Гибкое сравнение в РНР</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="grey">true</td>
                <td><?php var_dump($true == $true);?></td>
                <td><?php var_dump($true == $false);?></td>
                <td><?php var_dump($true == $a2);?></td>
                <td><?php var_dump($true == $a);?></td>
                <td><?php var_dump($true == -1);?></td>
                <td><?php var_dump($true == $str);?></td>
                <td><?php var_dump($true == $null);?></td>
                <td><?php var_dump($true == $string);?></td>
            </tr>
            <tr>
                <td class="grey">false</td>
                <td><?php var_dump($false == $true);?></td>
                <td><?php var_dump($false == $false);?></td>
                <td><?php var_dump($false == $a2);?></td>
                <td><?php var_dump($false == $a);?></td>
                <td><?php var_dump($false == -1);?></td>
                <td><?php var_dump($false == $str);?></td>
                <td><?php var_dump($false == $null);?></td>
                <td><?php var_dump($false == $string);?></td>
            </tr>
            <tr>
                <td class="grey">1</td>
                <td><?php var_dump($a2 == $true);?></td>
                <td><?php var_dump($a2 == $false);?></td>
                <td><?php var_dump($a2 == $a2);?></td>
                <td><?php var_dump($a2 == $a);?></td>
                <td><?php var_dump($a2 == -1);?></td>
                <td><?php var_dump($a2 == $str);?></td>
                <td><?php var_dump($a2 == $null);?></td>
                <td><?php var_dump($a2 == $string);?></td>
            </tr>
            <tr>
                <td class="grey">0</td>
                <td><?php var_dump($a == $true);?></td>
                <td><?php var_dump($a == $false);?></td>
                <td><?php var_dump($a == $a2);?></td>
                <td><?php var_dump($a == $a);?></td>
                <td><?php var_dump($a == -1);?></td>
                <td><?php var_dump($a == $str);?></td>
                <td><?php var_dump($a == $null);?></td>
                <td><?php var_dump($a == $string);?></td>
            </tr>
            <tr>
                <td class="grey">-1</td>
                <td><?php var_dump(-$a2 == $true);?></td>
                <td><?php var_dump(-$a2 == $false);?></td>
                <td><?php var_dump(-$a2 == $a2);?></td>
                <td><?php var_dump(-$a2 == $a);?></td>
                <td><?php var_dump(-$a2 == -1);?></td>
                <td><?php var_dump(-$a2 == $str);?></td>
                <td><?php var_dump(-$a2 == $null);?></td>
                <td><?php var_dump(-$a2 == $string);?></td>
            </tr>
            <tr>
                <td class="grey">"1"</td>
                <td><?php var_dump($str == $true);?></td>
                <td><?php var_dump($str == $false);?></td>
                <td><?php var_dump($str == $a2);?></td>
                <td><?php var_dump($str == $a);?></td>
                <td><?php var_dump($str == -1);?></td>
                <td><?php var_dump($str == $str);?></td>
                <td><?php var_dump($str == $null);?></td>
                <td><?php var_dump($str == $string);?></td>
            </tr>
            <tr>
                <td class="grey">null</td>
                <td><?php var_dump($null == $true);?></td>
                <td><?php var_dump($null == $false);?></td>
                <td><?php var_dump($null == $a2);?></td>
                <td><?php var_dump($null == $a);?></td>
                <td><?php var_dump($null == -1);?></td>
                <td><?php var_dump($null == $str);?></td>
                <td><?php var_dump($null == $null);?></td>
                <td><?php var_dump($null == $string);?></td>
            </tr>
            <tr>
                <td class="grey">"php"</td>
                <td><?php var_dump($string == $true);?></td>
                <td><?php var_dump($string == $false);?></td>
                <td><?php var_dump($string == $a2);?></td>
                <td><?php var_dump($string == $a);?></td>
                <td><?php var_dump($string == -1);?></td>
                <td><?php var_dump($string == $str);?></td>
                <td><?php var_dump($string == $null);?></td>
                <td><?php var_dump($string == $string);?></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <h1>Жёсткое сравнение в РНР</h1>
    <table>
        <thead>
        <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td class="grey">true</td>
                <td><?php var_dump($true === $true);?></td>
                <td><?php var_dump($true === $false);?></td>
                <td><?php var_dump($true === $a2);?></td>
                <td><?php var_dump($true === $a);?></td>
                <td><?php var_dump($true === -1);?></td>
                <td><?php var_dump($true === $str);?></td>
                <td><?php var_dump($true === $null);?></td>
                <td><?php var_dump($true === $string);?></td>
            </tr>
            <tr>
                <td class="grey">false</td>
                <td><?php var_dump($false === $true);?></td>
                <td><?php var_dump($false === $false);?></td>
                <td><?php var_dump($false === $a2);?></td>
                <td><?php var_dump($false === $a);?></td>
                <td><?php var_dump($false === -1);?></td>
                <td><?php var_dump($false === $str);?></td>
                <td><?php var_dump($false === $null);?></td>
                <td><?php var_dump($false === $string);?></td>
            </tr>
            <tr>
                <td class="grey">1</td>
                <td><?php var_dump($a2 === $true);?></td>
                <td><?php var_dump($a2 === $false);?></td>
                <td><?php var_dump($a2 === $a2);?></td>
                <td><?php var_dump($a2 === $a);?></td>
                <td><?php var_dump($a2 === -1);?></td>
                <td><?php var_dump($a2 === $str);?></td>
                <td><?php var_dump($a2 === $null);?></td>
                <td><?php var_dump($a2 === $string);?></td>
            </tr>
            <tr>
                <td class="grey">0</td>
                <td><?php var_dump($a === $true);?></td>
                <td><?php var_dump($a === $false);?></td>
                <td><?php var_dump($a === $a2);?></td>
                <td><?php var_dump($a === $a);?></td>
                <td><?php var_dump($a === -1);?></td>
                <td><?php var_dump($a === $str);?></td>
                <td><?php var_dump($a === $null);?></td>
                <td><?php var_dump($a === $string);?></td>
            </tr>
            <tr>
                <td class="grey">-1</td>
                <td><?php var_dump(-$a2 === $true);?></td>
                <td><?php var_dump(-$a2 === $false);?></td>
                <td><?php var_dump(-$a2 === $a2);?></td>
                <td><?php var_dump(-$a2 === $a);?></td>
                <td><?php var_dump(-$a2 === -1);?></td>
                <td><?php var_dump(-$a2 === $str);?></td>
                <td><?php var_dump(-$a2 === $null);?></td>
                <td><?php var_dump(-$a2 === $string);?></td>
            </tr>
            <tr>
                <td class="grey">"1"</td>
                <td><?php var_dump($str === $true);?></td>
                <td><?php var_dump($str === $false);?></td>
                <td><?php var_dump($str === $a2);?></td>
                <td><?php var_dump($str === $a);?></td>
                <td><?php var_dump($str === -1);?></td>
                <td><?php var_dump($str === $str);?></td>
                <td><?php var_dump($str === $null);?></td>
                <td><?php var_dump($str === $string);?></td>
            </tr>
            <tr>
                <td class="grey">null</td>
                <td><?php var_dump($null === $true);?></td>
                <td><?php var_dump($null === $false);?></td>
                <td><?php var_dump($null === $a2);?></td>
                <td><?php var_dump($null === $a);?></td>
                <td><?php var_dump($null === -1);?></td>
                <td><?php var_dump($null === $str);?></td>
                <td><?php var_dump($null === $null);?></td>
                <td><?php var_dump($null === $string);?></td>
            </tr>
            <tr>
                <td class="grey">"php"</td>
                <td><?php var_dump($string === $true);?></td>
                <td><?php var_dump($string === $false);?></td>
                <td><?php var_dump($string === $a2);?></td>
                <td><?php var_dump($string === $a);?></td>
                <td><?php var_dump($string === -1);?></td>
                <td><?php var_dump($string === $str);?></td>
                <td><?php var_dump($string === $null);?></td>
                <td><?php var_dump($string === $string);?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>