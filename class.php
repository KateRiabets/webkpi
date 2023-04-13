<?php
class Animal {
    protected $type;
    protected $magical;

    public function __construct($type, $magical) {
        $this->type = $type;
        $this->magical = $magical;
    }

    public function getType() {
        return $this->type;
    }

    public function isMagical() {
        return $this->magical;
    }
}

class MagicalAnimal extends Animal {
    private $power;

    public function __construct($type, $power) {
        parent::__construct($type, true);
        $this->power = $power;
    }

    public function getPower() {
        return $this->power;
    }
}

class NonMagicalAnimal extends Animal {
    private $name;
    private $sound;

    public function __construct($type, $name, $sound) {
        parent::__construct($type, false);
        $this->name = $name;
        $this->sound = $sound;
    }

    public function getName() {
        return $this->name;
    }

    public function getSound() {
        return $this->sound;
    }
}
$animal = new Animal('cat', false);
echo $animal->getType().': '; // выводит "cat"
echo ($animal->isMagical()? 'magical' : 'non-magical').'<br>'; // выводит "false"

$animal1 = new MagicalAnimal('unicorn', 'rainbow');
echo $animal1->getType() . ': ' . ($animal1->isMagical() ? 'magical' : 'non-magical') . ', power: ' . $animal1->getPower() . '<br>';

$animal2 = new NonMagicalAnimal('cat', 'Murchik', 'meow');
echo $animal2->getType() . ': ' . ($animal2->isMagical() ? 'magical' : 'non-magical') . ', name: ' . $animal2->getName() . ', sound: ' . $animal2->getSound();
?>