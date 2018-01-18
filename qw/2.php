<?php
$links = array('http://google.com',
                'http://negoogle.com',
                'htt://instagram.com',
                'https://alterego.ru',
                'https:/vk.ru',
                'htps:/romovds.ew',
                'http:/qadr.qwe'
               );


for ($i = 0; $i < count($links); $i++){
    echo $links[$i];

    $val1 = substr($links[$i], 0,7);
    $val2 = substr($links[$i], 0,8);

    if($val1 == 'http://' or $val2 == 'https://'){
        echo '<b style="color: green;"> -> correct url </b><br>';
    }else{
        echo '<b style="color: red"> -> error in url</b><br>';
    }

}