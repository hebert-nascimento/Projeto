<?php
$conn = mysqli_connect("localhost", "root", "123456", "descart_bd");
if(!$conn) {
    die ('Não conectado!!!'.mysql_errno());
}
?>