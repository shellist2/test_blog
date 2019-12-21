<?php

require 'setting_db.php';

$data = $_POST;



    if (isset ($_POST['send'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $add_users = mysqli_query($connection, "INSERT INTO `users` (`login`,`password`) VALUES ('$login', '$password')");
  
 if($add_users){
            echo "Данные успешно добавлены";
        }else {
            echo "Произошла ошибка";
        }    
    }
 

?>


<?php mysqli_close($connection);?>