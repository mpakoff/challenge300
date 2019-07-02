<?php
  
  define('DB_HOST', 'localhost:3307/run/mysqld/mysqld10.sock');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '123123');
  define('DB_NAME', 'itdep');
  
  $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
  $mysqli->set_charset('utf8');
  $res = $mysqli->query('SELECT SUM(kostja_amount) AS sumAmount FROM `kostja_challenge`');
  $res_sum = mysqli_fetch_assoc($res);
  ?>

  <div> <? echo $res_sum['sumAmount']; ?> </div> 
 
 