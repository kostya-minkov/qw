<?php

header('Content-type: text/html; charset=utf-8');
//--------------------------------------------------------------------------------------------//
//створили масив
$array = explode(" ", $_POST['text']);

$size = sizeof($array);

for($i = 0; $i < $size; $i++){
// більше символів ніж 5 то наступні я замінюю на *
    if(mb_strlen($array[$i],'UTF-8') > 5) {
        //Обрізаю 5 символів
            $array[$i]  = mb_substr($array[$i], 0, 5,'UTF-8');
            $array[$i] .= "*"; //І додаю до кінця зірочку
    }
}
// масив у строку
$text = implode(" ", $array);
//--------------------------------------------------------------------------------------------//

$text2 = $_POST['text'];
$text2 = preg_replace('/([\w]{5})[\w]+/u', '$1*', $text2);
//--------------------------------------------------------------------------------------------//
?>
<meta charset="UTF-8">
<form action="5.php" method="post">
    <textarea style="color: #0013ff" name="text" cols="50" rows="8" autofocus><? echo $_POST['text'] ?></textarea>
    <br><br>
    <input type="submit" name="sent">
    <br><br>
    <textarea style="color: #e33900" cols="50" rows="8" readonly><? echo "\t\t 1 варіант з циклом \n\n".$text ?></textarea>
    <textarea style="color: #e33900" cols="50" rows="8" readonly><? echo "\t\t 2 варіант з регуляркою \n\n".$text2 ?></textarea>
</form>
