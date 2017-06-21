<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 

session_start();
$turn = "";


class Perso {
    public $name;
    public $hp;
    public $str;
    public $def;

    public function atk($ennemy) {
        $ennemy->hp -= (21*$this->str)/$ennemy->def;
    }

    public function buff() {
        $this->def += 2;
        $this->str += 2;
    }

    public function __construct($name, $hp, $str, $def) {
        $this->name = $name;
        $this->hp = $hp;
        $this->str = $str;
        $this->def = $def;
    }

    public function __toString() {
        echo '<p>Name: '.$this->name.'</p>';
        echo '<p>HP: '.(int) $this->hp.'</p>';
        echo '<p>STR: '.$this->str.'</p>';
        echo '<p>DEF: '.$this->def.'</p>';
        if (get_class($this) == "Heal") {
            echo '<p>Bandage: '.$this->bandage.'</p>';            
        }
    }
}

class Heal extends Perso {
    public $bandage = 10;
    public function healing($player) {
        $player->hp += 20;
        $this->bandage -= 1;
    }
}

if (isset($_POST['restart'])) {
    session_destroy();
    echo "<script>";
    echo "location.href = \"\"";
    echo "</script>";
} elseif (!isset($_SESSION['player1'])) {
    $_SESSION['player1'] = new Perso("Danikata", 114, 21, 10);
    $_SESSION['player2'] = new Heal("Raluso", 152, 12, 17);
    $player1 = $_SESSION['player1'];
    $player2 = $_SESSION['player2'];
    $turn = "player1";
} else {
    $player1 = $_SESSION['player1'];
    $player2 = $_SESSION['player2'];
    if(isset($_POST['player1atk'])) {
        $atkplayer1 = $_POST['player1atk'];
        $player1->atk($player2);
        $turn = "player2";   
    }
    if(isset($_POST['player1buff'])) {
        $buffplayer1 = $_POST['player1buff'];
        $player1->buff();
        $turn = "player2";   
    }
    if(isset($_POST['player1heal'])) {
        $healplayer1 = $_POST['player1heal'];
        $player1->healing($player1);
        $turn = "player2";   
    }
    if(isset($_POST['player2atk'])) {
        $atcplayer2atk = $_POST['player2atk'];
        $player2->atk($player1);
        $turn = "player1";   
    }
    if(isset($_POST['player2buff'])) {
        $atcplayer2buff = $_POST['player2buff'];
        $player2->buff();
        $turn = "player1";   
    }
    if(isset($_POST['player2heal'])) {
        $atcplayer2heal = $_POST['player2heal'];
        $player2->healing($player2);
        $turn = "player1";   
    }
}

echo $player1->__toString();
if ($turn === "player1") {
?>
<form action="" method="POST">
<input type="submit" name="player1atk" value="ATK">
</form>
<form action="" method="POST">
<input type="submit" name="player1buff" value="BUFF">
</form>
<!--<form action="" method="POST">
<input type="submit" name="player1heal" value="HEAL">
</form>-->
<?php }
echo $player2->__toString();
if ($turn === "player2") {
?>
<form action="" method="POST">
<input type="submit" name="player2atk" value="ATK">
</form>
<form action="" method="POST">
<input type="submit" name="player2buff" value="BUFF">
</form>
<form action="" method="POST">
<input type="submit" name="player2heal" value="HEAL">
</form>
<?php }
 ?>
<p>Restart?</p>
<form action="" method="POST">
<input type="submit" value="Restart" name="restart">
</form>
</body>
</html>