
<?php

require_once '../connection.php';

 // подключаемся к серверу
 $link = mysqli_connect($host, $user, $password, $database)
 or die("Ошибка " . mysqli_error($link));

if (isset($_POST['ivan_time_date']) && isset($_POST['ivan_amount'])&& isset($_POST['id'])){



    // экранирования символов для mysql
    $ivan_time_date = htmlentities(mysqli_real_escape_string($link, $_POST['ivan_time_date']));
    $ivan_amount = htmlentities(mysqli_real_escape_string($link, $_POST['ivan_amount']));
    

    // создание строки запроса
    $query ="INSERT INTO ivan_challenge  VALUES (NULL, '$ivan_time_date','$ivan_amount')";

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
                    <input type="hidden" value="<?php echo date ("d.m.Y - G:i:s"); ?>" name="ivan_time_date"></p>
                        <p>Количество отжиманий <br>
                    <input type="text" name="ivan_amount" /></p>
                    <input type="submit" value="Добавить">
                </form>
                





