<?php

$size = htmlspecialchars($_POST['size']);
$color = htmlspecialchars($_POST['color']);


class Square {
    public $color;
    public $wh;
    public $size;

    public function __construct($color, $size) {
        $this->color = $color;
        $this->wh = $size."px";
        $this->size = $size;
    }

    public function display() {
        echo '<div style="width:'.$this->wh.';height:'.$this->wh.';background-color:'.$this->color.'"></div>';
    }

    public function squareSize(){
        return $this->size * $this->size;
    }

}

$square1 = new Square($color, $size);

echo $square1->display();
echo '<p>The square have a size of '.$square1->squareSize().'px²</p>';

?>