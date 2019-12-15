<?php

require 'setting_db.php';
?>

<?php

    if (isset ($_REQUEST['send'])) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        $add_users = mysqli_query($connection, "INSERT INTO `users` (`login`,`password`) VALUES ('$login', '$password')");
  
 if($add_users){
            echo "Данные успешно добавлены";
        }else {
            echo "Произошла ошибка";
        }    
    }
 

?>


<?php mysqli_close($connection);?>