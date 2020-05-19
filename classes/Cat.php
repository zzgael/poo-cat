<head id='ciroueInject'></head><?php

class Cat
{
  private $name;
  private $race;
  private $age;
  private $owner;

  public static $count = 0;

  public function __construct(array $data)
  {
    $this->hydrate($data);

    self::$count++;
  }

  public function hydrate(array $data)
  {
    if(isset($data["name"])) {
      $this->setName($data["name"]);
    }
    if(isset($data["race"])) {
      $this->setRace($data["race"]);
    }
    if(isset($data["age"])) {
      $this->setAge($data["age"]);
    }
    if(isset($data["owner"])) {
      $this->setOwner($data["owner"]);
    }
  }

  public function identify()
  {
    echo $this->name.' est un chat '.
        $this->race.' âgé de '.
        $this->age.' ans. Son propriétaire est '.
        $this->owner. ".<br>";
  }

  public function meow()
  {
    echo $this->name. " : Meow. <br>";
  }

  public function eat(string $food)
  {
    echo $this->name. " mange ". $food ." <br>";
  }

  public function sleep(int $hoursCount = 8)
  {
    if($hoursCount < 0 || $hoursCount > 22) {
      throw new Exception("Un chat dort maximum 22h. Et pas de nombres négatifs !!");
    }
    echo $this->name. " dort pendant ". $hoursCount ." heures \n";
  }

  public function playWith(Cat $cat)
  {
    echo $this->name. " joue avec ". $cat->name."<br>";
  }

  public function getName() : string
  {
    return $this->name;
  }

  public function setName(string $name)
  {
    $this->name = ucfirst($name);
  }

  public function getRace()
  {
    return $this->race;
  }

  public function setRace(string $race)
  {
    $this->race = ucfirst($race);
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge(int $age)
  {
    $this->age = $age;
  }

  public function getOwner()
  {
    return $this->owner;
  }

  public function setOwner(string $owner)
  {
    $this->owner = $owner;
  }
}