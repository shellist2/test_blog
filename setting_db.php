<?php
$connection = mysqli_connect('orbita.airy.host','h8255_portapro', '8L7q0L7m','test_blog');
if ($connection == false) {
    echo "Не удалось подключиться к базе Данных";
    echo mysqli_connect_error();
    exit();
}

?>
