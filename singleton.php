<?php
class Animals {
    private static $instance;
    private $items;

    private function __construct() {
        $this->items = [];
    }

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function getItems() {
        return $this->items;
    }
}


$registry1 = Animals::getInstance();
$registry1->addItem('cat');
$registry1->addItem('bird');
print_r($registry1->getItems());
echo '<br>';

$registry2 = Animals::getInstance();
$registry2->addItem('horse');
$registry2->addItem('dog');
print_r($registry2->getItems());
echo '<br>';

print_r($registry1->getItems());

?>