<?php 
require 'setting_db.php';



$result_categories = mysqli_query($connection,"SELECT * FROM `articles_categories`");
$result_title_blog  = mysqli_query($connection,"SELECT * FROM `articles`"); // в таблице нету id = 100

// Проверка если вывод равен нулю, то присвоить переменной $result_categories = категорий не найдено 
if (( mysqli_num_rows($result_categories) == 0) && (mysqli_num_rows($result_title_blog) == 0)) {
  $result_num_rows =  "Категорий не найдено ";
    
}

while ($cat = mysqli_fetch_assoc($result_categories)) {
  $articles_count = mysqli_query($connection, "SELECT COUNT(id) as `total_count` FROM `articles` WHERE  `categories_id` = ".$cat['id']); 
  $articles_count_result = mysqli_fetch_assoc($articles_count);
  
  echo '<ul><li>'.$cat['title'].' ('.$articles_count_result['total_count'].')</li></ul>';
   
 
}
echo '<br />'.$result_num_rows; 

?>

<?php
mysqli_close($connection);
?>
