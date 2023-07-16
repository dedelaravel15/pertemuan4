<?php 
    class motor
    {
        public $harga;
        public $plat;
        
        public function __construct($harga, $plat)
        {
            $this->harga = $harga;
            $this->plat = $plat;
        }
        public function DeskripsiMotor()
        {
            return "Motor ini harga nya $this->harga  dengan plat nomor $this->plat";
        }
    }
     

    class sepeda extends motor
    {
        public $merk;

        public function __construct($merk)
        {
            $this->merk = $merk;
        }
        public function pakai()
        {
            echo "ridwan pakai sepeda $this->merk";
        }
    }
    $yadea = new motor(2100000, "AAD 12BG");  
    echo $yadea->DeskripsiMotor();
    $atlantis = new sepeda("Atlantis");
    echo "<br/>";
    echo $atlantis->merk;
    echo "<br/>";
    echo $atlantis->pakai();
    
