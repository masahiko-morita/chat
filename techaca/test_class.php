<?php

class Slime {
    public $type = 'スライム';
    public $suffix = "";

    public $hp = 10;
    public $power = 3;

    function __construct($yui) {
        $this->suffix = $yui;
    }

    function name() {
        return $this->type . $this->suffix;
    }

    function attack($character_name) {
        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime("B");

$slime_A->attack('主人公');

?>