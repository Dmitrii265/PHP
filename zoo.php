<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');

interface animalAction {
  public function walk();
  public function speak();
}

abstract class Animal implements animalAction {
  protected $nick;
  protected $gender;
  protected $color;
  
  public function __construct($nick, $gender, $color) {
    $this->nick = $nick;
    $this->gender = $gender;
    $this->color = $color;
  }
  
  public function __get($property) {
    return $this->$property;
  }
  
  public function __set($property, $value) {
    if ($property == "nick" && mb_strlen($value) < 16) {
      $this->$property = $value;
    }
  }
  
  public function walk() {
    echo "Топтоптоп";
  }
  
}

class Horse extends Animal { //наследование
  protected $breed;
  
  public function __construct($nick, $gender, $color, $breed) {
    parent::__construct($nick, $gender, $color);
    $this->breed = $breed;
  }
  
  public function hit() {
    echo $this->nick." вас лягнул";
  }
  
  public static function getInfo() {
    echo "Определение лошади";
  }
  
  public function walk() {
    echo "Цокцокцок";  
  }
  
  public function speak() {
    echo "Игого";
  }
}

class Pegasus extends Horse {
  public function fly() {
    echo "Вы видите как ".$this->nick." летает.";
  }
}

// Создайте класс Elephant, который наследуется от Animal
/*
Свойства
 защищенное свойство kind;

Методов
  Ходьба - "Топ топ топ"
  Говорить - "трррру"
  Обнимать - "%имяслона% обнимает вас хоботом" (hug)

Вывод:
Слон: %имяслона% %пол_слона% %цветслона% %типслона% <br>
%каждыйметод% <br>


*/
class Elephant extends Animal {
	protected $kind;

	public function __construct($nick, $gender, $color, $kind) {
		parent::__construct($nick, $gender, $color);
		$this->kind = $kind;
	}

	public function walk() {
		echo "Топ топ топ";
	}
	public function speak() {
		echo "тррру";
	}
	public function hug() {
		echo $this->nick." обнимает вас хоботом";
	}
}

$elephant = new Elephant("Джамбо", "m", "Серый", "Индийский");

echo $elephant->nick." ".$elephant->gender." ".$elephant->color." ".$elephant->kind."<br>";
$elephant->walk();
$elephant->speak();
$elephant->hug();


 