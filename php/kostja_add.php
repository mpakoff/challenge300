
<?php

require_once '../connection.php';

 // подключаемся к серверу
 $link = mysqli_connect($host, $user, $password, $database)
 or die("Ошибка " . mysqli_error($link));

if (isset($_POST['kostja_time_date']) && isset($_POST['kostja_amount'])&& isset($_POST['id'])){



    // экранирования символов для mysql
    $kostja_time_date = htmlentities(mysqli_real_escape_string($link, $_POST['kostja_time_date']));
    $kostja_amount = htmlentities(mysqli_real_escape_string($link, $_POST['kostja_amount']));
    

    // создание строки запроса
    $query ="INSERT INTO kostja_challenge  VALUES (NULL, '$kostja_time_date','$kostja_amount')";

    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }

    // закрываем подключение
    mysqli_close($link);
    header('Location: ../index.php');
}
?>
                <form method='POST'>
                    <input type="hidden" name="id" value="id" />                       
                    <input type="hidden" value="<?php echo date ("d.m.Y - G:i:s"); ?>" name="kostja_time_date"></p>
                        <p>Количество отжиманий <br>
                    <input type="text" name="kostja_amount" /></p>
                    <input type="submit" value="Добавить">
                </form>
                





