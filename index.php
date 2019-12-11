<?php
$connection = mysqli_connect('localhost','root', '','test_db');
if ($connection == false) {
    echo "Не удалось подключиться к базе Данных";
    echo mysqli_connect_error();
    exit();
}

$result_categories = mysqli_query($connection,"SELECT * FROM `articles_categories`");
$result_title_blog  = mysqli_query($connection,"SELECT * FROM `articles` WHERE `id` = 100"); // в таблице нету id = 100

// Проверка если вывод равен нулю, то присвоить переменной $result_categories = категорий не найдено 
if (( mysqli_num_rows($result_categories) == 0) && (mysqli_num_rows($result_title_blog) == 0)) {
  $result_num_rows =  "Категорий не найдено ";
    
}

while ($record = mysqli_fetch_assoc($result_categories)) {
   echo '<ul>'.'<li>'.$record['title'].'</li>'.'</ul>';
 
}
echo '<br />'.$result_num_rows; 


while ($record2 = mysqli_fetch_assoc($result_title_blog)) {
    echo '<ul>'.'<li>'.$record2['title'].'</li>'.'</ul>';
}
echo '<br />'.$result_num_rows; // Вот тут поидее должен был сработать $result_num_rows =  "Категорий не найдено " ранее в if сделал условие
?>




<?php
mysqli_close($connection);
?>