<?php

$filename = 'test.jpeg';
$url = 'https://content.onliner.by/news/main/75ef08820b844b50520d371331d58442.jpeg';


$image = file_get_contents($url);

file_put_contents($filename, $image);

/*define('FILE_NAME', 'https://onliner.by');

// $f = file_get_contents('test.log');

file_put_contents('asdasd.log', "asdasdasd\n", FILE_APPEND);

// print_r($f);






/*$file = fopen(FILE_NAME, 'a');

fputcsv($file, ['one one one', 'two', 'three']);*/

// echo fread($file, filesize(FILE_NAME));
/*while($str = fgets($file)){
    echo "$str<br>";
}

fclose($file);*/