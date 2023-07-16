<?php 
    class laptop
    {
        public $merk;
        public $processor;
        public $memory;

        public function __construct($merk, $memory, $processor)
        {
            $this->merk = $merk;
            $this->processor = $processor;
            $this->memory = $memory;
        }
        public function desc()
        {
            return "Merk laptop ini adalah $this->merk, 
            dengan processor $this->processor, 
            dan Ram $this->memory";
        }
    }
$lenovo = new laptop("lenovo", "intel i5", "123GB");
echo $lenovo->desc();
