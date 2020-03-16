<?php
  require_once __DIR__ . '/../traits/GetBudget.php';
  require_once 'Dipendente.php';

  class Customerservice extends Dipendente{

    protected $toolConosciuti;
    protected $livello;
    protected $bonus;

    public function _construct($_nome, $_cognome, $_dataNascita, $_cf, $_reparto){

      parent::construct($_nome, $_cognome, $_dataNascita, $_cf, $_reparto);
      $this->toolConosciuti = $_toolConosciuti;
    }

    public function setTool($_toolConosciuti ){
      if(empty($_toolConosciuti) || preg_match('/^([^0-9]+)$/', $_toolConosciuti)== 0){

        throw new Exception('inserisci il tool correttamente e solo in lettere');

      }
      else{
        $this->toolConosciuti = $_toolConosciuti;
      }
    }
    public function getTool(){

      return $this->toolConosciuti;
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
      $this->gg = $_gg;
    }
  }
  // $rossi = new Customerservice ('Mario', 'Rossi', '15-05-1987','GHHSKM87N15H879U', 'Customer Service');
  // $rossi->setLivello('middle');
  // $rossi->calcStipendio(24, 87);
  // $rossi->setEta(32);
  // $rossi->setTool('Olark'.','.' Zendesk');
  // var_dump($rossi);

?>
