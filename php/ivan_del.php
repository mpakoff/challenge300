<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once '../connection.php'; // подключаем скрипт
     
if(isset($_POST['id'])){
 
$link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_POST['id']);
     
    $query ="DELETE FROM ivan_challenge WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    // перенаправление на скрипт index.php
    header('Location: http://10.128.16.151:2223/index.php');
}
 
if(isset($_GET['id']))
{   
    $id = htmlentities($_GET['id']);
    echo "<h2>Удалить запись?</h2>
        <form method='POST'>
        <input type='hidden' name='id' value='$id' />
        <input type='submit' value='Удалить'>
        </form>";
}
?>
</body>
</html>