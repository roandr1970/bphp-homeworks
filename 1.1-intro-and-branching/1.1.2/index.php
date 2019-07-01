<?php
$time = date("H");
$week = date('N');

if ($time >= 6 && $time < 11) {
    $textTime = 'Доброе утро!';
    $image = 'img/1.jpg';
} elseif ($time >= 11 && $time < 18) {
        $textTime = 'Добрый день!';
        $image = 'img/2.jpg';
    } elseif ($time >= 18 && $time < 23) {
            $textTime = 'Добрый вечер!';
            $image = 'img/3.jpg';
        } else {
                $textTime = 'Доброй ночи!';
                $image = 'img/4.jpg';
            }

switch ($week) {
    case 1: $textWeek = 'Сегодня понедельник.'; break;
    case 2: $textWeek = 'Сегодня вторник.'; break;
    case 3: $textWeek = 'Сегодня среда.'; break;
    case 4: $textWeek = 'Сегодня четверг.'; break;
    case 5: $textWeek = 'Сегодня пятница.'; break;
    case 6: $textWeek = 'Сегодня суббота.'; break; 
    case 7: $textWeek = 'Сегодня воскресенье.'; break;          
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><? echo "$textTime <br> $textWeek"; ?></h1>
        </div>
    </div>
</body>
</html>

