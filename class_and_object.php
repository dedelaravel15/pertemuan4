<?php 
    class mobil
    {
        private $merk;
        private $warna;

        public function setMerk($merk)
        {
            $this->merk = "Mobil $merk";
        }
        public function getMerk()
        {
            echo $this->merk;
        }
        public function setWarna($warna)
        {
            $this->warna = "Mobil $warna";
        }
        public function getWarna()
        {
            echo $this->warna;
        }

        public function hidupkanMesin()
        {
            echo "mesin mobil di hidupkan";
        }
        public function jalan()
        {
            echo "mobil berjalan";
        }
    }
$toyota = new mobil();
$toyota->setMerk("toyota");
$toyota->setWarna("hitam");
echo "<br/>";
$toyota->getMerk();
$toyota->getWarna();
$toyota->hidupkanMesin();
echo "<br/>";
$toyota->jalan();

//private
