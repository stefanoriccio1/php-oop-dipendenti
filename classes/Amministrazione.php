<?php
  require_once __DIR__ . '/../traits/GetBudget.php';
  require_once 'Dipendente.php';


  class Amministrazione extends Dipendente{

    protected $buoniPasto;

    public function calcBuoniPasto(){
      $this->buoniPasto = $this->gg * 5;

    }
    public function getBuoniPasto(){
      return $this->buoniPasto;
    }

  }

  $bianchi = new Amministrazione('Andrea', 'Bianchi', '21-06-1985', 'DHGDJHGDKHYS687', 'Amministrazione');
  $bianchi->calcStipendio(24, 98);
  $bianchi->calcBuoniPasto();
  var_dump($bianchi);
?>
