<head id='ciroueInject'></head><?php

// Ceci est notre base de données distante
// http://www.phpmyadmin.co/
// +----------+---------+-----+---------+
// |   name   |  race   | age |  owner  |
// +----------+---------+-----+---------+
// | Sam      | Siamois |   5 | Thomas  |
// | Bertrand | Persan  |   8 | Raphael |
// +----------+---------+-----+---------+

try{
  $db = new PDO(
    'mysql:dbname=sql2341954;host=sql2.freemysqlhosting.net', 
    'sql2341954', 
    'jN2!qH6!',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch(PDOException $exception){
  echo $exception->getMessage();
}