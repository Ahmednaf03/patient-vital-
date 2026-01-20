<?php
echo __DIR__ . "<br>";

$items = scandir(__DIR__);
foreach ($items as $item) {
    echo $item . "<br>";
    $fullPath = __DIR__ . DIRECTORY_SEPARATOR . $item;
    // echo $fullPath . "<br>";
}
echo is_dir($items[0]) ;
echo str_repeat("&nbsp;&nbsp;&nbsp;", 1);
echo is_dir($items[1]) ;
echo var_dump($items);
echo "<br>";
echo var_dump(__DIR__);
?>