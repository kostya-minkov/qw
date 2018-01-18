<?php
if(!function_exists('mb_ucfirst'))
{
    function mb_ucfirst($string, $enc = 'UTF-8')
    {
        return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
            mb_substr($string, 1, mb_strlen($string, $enc), $enc);
    }
}


    //Створюємо масив із введеного тексту
    $array = explode(" ", $_POST['text']);
    //Перебираєм масив та перевіряєм слова які мають більше одного символа
    $size = sizeof($array);
    for($i = 0; $i < $size; $i++){
        if(mb_strlen($array[$i],'UTF-8') > 1){
            $array[$i] = mb_ucfirst(mb_strtolower($array[$i],'UTF-8')); // перший символ у верхньому
        }else{
            $array[$i] = mb_strtolower($array[$i],'UTF-8');
        }
    }

    //Переводимо масив в строку
    $text = implode("_", $array);
?>


<meta charset="UTF-8">

<form action="4.php" method="post">
    <textarea style="color: #0013ff" name="text" cols="50" rows="5" autofocus><? echo $_POST['text'] ?></textarea>
    <br><br>
    <input type="submit" name="sent">
    <br><br>
    <textarea style="color: #e33900" cols="50" rows="5" readonly><? echo $text?></textarea>
</form>
