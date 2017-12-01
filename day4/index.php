<?php

echo "hi " .$_POST['name']. "&nbsp".$_POST['surname'];
echo "</br>";
echo "u was born " .$_POST['date'];
echo "</br>";
echo "ur login is " .$_POST['login'];
echo "</br>";
echo "ur password " .$_POST['password'];
echo "</br>";


$file = $_FILES['myfile'];

$dir = 'uploads';

if(!file_exists($dir)){
    mkdir($dir, 0644);
}

$file_name = $dir.'/'.$file['name'];
if(move_uploaded_file($file['tmp_name'], $file_name)){
    echo "Файл успешно загружен";
}else {
    echo "Возникла ошибка при загрузке файла";
}

?>
