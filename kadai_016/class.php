<?php

class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "価格は{$this->price}円です。<br>";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "{$this->name}の身長は{$this->height}cmです。<br>";
    }
}

$food = new Food("りんご", 150);
print_r($food);
echo "<br>";

$animal = new Animal("ライオン", 120, 200);
print_r($animal);
echo "<br><br>";

$food->show_price();
$animal->show_height();
?>
