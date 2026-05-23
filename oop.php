<?php
class Car {
    public $merek;
    public $roda;
    
    function set($merek, $roda = 4){
        $this->merek = $merek;
        $this->roda = $roda;
    }
    
    function get(){
        echo "Nama : ".$this->merek." Roda: ".$this->roda;
    }
    function jalan(){
        return true;
    }
    function rem(){
        return false;
    }
}

$honda = new Car();
$honda->set("BRIO");
$roda = $honda->get();

$isJalan = $honda->jalan();

if($isJalan === true){
    echo "\nMobil ".$honda->merek." Sedang jalan";
}else{
    echo "\nMobil ".$honda->merek." Sedang berhenti";
}

?>
