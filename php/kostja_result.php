<?php
  
  define('DB_HOST', 'localhost:3307/run/mysqld/mysqld10.sock');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '123123');
  define('DB_NAME', 'itdep');
  
  $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
  $mysqli->set_charset('utf8');

  $result_set = $mysqli->query('SELECT * FROM `kostja_challenge`');
  $table = [];
  while (($row = $result_set->fetch_assoc()) != false) {
      $table[] = $row;
  
        ?>
        
        
  <tr>
      <td> <?php echo $row ['id']; ?> </td>
      <td> <?php echo $row ['kostja_time_date']; ?> </td>
      <td class="amount"><?php echo $row ['kostja_amount']; ?> </td>
      <td><button class="del_record" type="button"><a href="/php/kostja_del.php?id=<?php echo $row ['id']; ?>">Удалить</a></button>  </td>
         
          
  </tr>

 
<?php
}
?>