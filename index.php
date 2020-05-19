<head id='ciroueInject'></head><?php 

include('autoload.php');
include('db.php');

$catsStatement = $db->query('SELECT * FROM cats');
$catRows = $catsStatement->fetchAll();

foreach($catRows as $catRow) {
  $cat = new Cat($catRow);
  $cat->identify();
  $cat->meow();
  $cat->eat('croquettes');
  $cat->sleep(rand(1,20));
  echo "<br><br>";
}

echo Cat::$count. " chats instanciés\n";