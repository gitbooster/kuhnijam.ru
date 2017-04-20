<?

// Имя файла, в котором хранится счетчик
$file_counter = "../php/counter.txt";

// Читаем текущее значение счетчика
if (file_exists($file_counter)) {
    $fp = fopen($file_counter, "r");
    $counter = fread($fp, filesize($file_counter));
    fclose($fp);
} else {
    $counter = 0;
}

// Увеличиваем счетчик на единицу
$counter++;

// Сохраняем обновленное значение счетчика
$fp = fopen($file_counter, "w");
fwrite($fp, $counter);
fclose($fp); 

?>