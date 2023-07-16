<?php
    class hero
    {
        public $nama;
        public $skil;
        public $attack;
        public $hp;

        public function __construct($nama, $attack, $hp)
        {
            $this->nama = $nama;
            $this->attack = $attack;
            $this->hp = $hp;
        }
        public  function skill()
        {
            echo "$this->nama menggunakan skill";
        }
    }
    class Mage extends hero{
        public $mana;
        public $magic;

        public function __construct($nama, $attack, $hp,$mana,$magic)
        {
            parent::__construct($nama, $attack, $hp);

            $this->mana = $mana;
            $this->magic = $magic; 
        }
        public function skill()
        {
            echo "$this->nama menggunakan magic skill";
        }
    } 
    $kagura = new mage("kagura", 0, 3200, 100, 400);
    echo $kagura->nama;
    echo "<br/>";
    $kagura->skill();
    