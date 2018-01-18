<meta charset="UTF-8">

<form method="post" action="3.php">
    <textarea name="text2"></textarea>
    <input type="submit" name="sent2">
</form>


<?
if(!function_exists('mb_ucfirst'))
{
    function mb_ucfirst($string, $enc = 'UTF-8')
    {
        return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
            mb_substr($string, 1, mb_strlen($string, $enc), $enc);
    }
}


$text2 = htmlspecialchars($_POST['text2']);


$arr2 = explode("\n", $text2);

for ($i = 0; $i < count($arr2); $i++){
    echo ($i+1).mb_ucfirst(mb_strtolower($arr2[$i],'UTF-8')) . "<br>";
}
echo '<hr>';
?>