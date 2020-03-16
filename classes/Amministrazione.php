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
?>
