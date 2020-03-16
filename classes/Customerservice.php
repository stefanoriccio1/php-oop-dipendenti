<?php
  require_once __DIR__ . '/../traits/GetBudget.php';
  require_once 'Dipendente.php';

  class Customerservice extends Dipendente{

    protected $toolConosciuti;
    protected $livello;
    protected $bonus;

    public function setTool($_toolConosciuti){
      $this->toolConosciuti = $_toolConosciuti;
    }

    public function setLivello($_livello){
      $this->livello = $_livello;
      $this->calcBonus($this->livello);
    }

    private function calcBonus($_livello){
      if($_livello == 'senior'){
        $this->bonus = 5;
      }
      elseif ($_livello = 'middle'){
        $this->bonus = 3;
      }
      elseif ($_livello = 'junior'){
        $this->bonus = 1.5;
      }
    }
    public function calcStipendio($_gg, $_prezzoBase){

      $this->stipendio = $_gg * $_prezzoBase * $this->bonus;
    }
  }
  $rossi = new Customerservice ('Mario', 'Rossi', '15-05-1987','GHHSKM87N15H879U', 'Customer Service');
  $rossi->calcStipendio(24, 87);
  $rossi->setEta(32);
  $rossi->setTool('Olark'.','.' Zendesk');
  $rossi->setLivello('middle');
  var_dump($rossi);

?>
