<meta charset="UTF-8">
<form method="post" action="1.php">

<textarea name="text">
<? echo $_POST['text'] ?>
</textarea>
<br>
<input type="submit" name="sent" >
</form>

<?
if (isset($_POST['sent'])) {
    //$text = str_replace(['  ', '   ', '    ', '     ','       '], [' ', ' ', ' ', ' ', ' '], $_POST['text']);
    $text = $_POST['text'];
    echo mb_strlen(trim($text)) . ' символов в строке';
    echo '<br><hr>';
}
echo '<hr>';
?>
