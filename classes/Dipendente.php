<?php
  require_once __DIR__ . '/../traits/GetBudget.php';

  class Dipendente {

    public $id;
    public $nome;
    public $cognome;
    public $eta;
    public $dataNascita;
    public $cf;
    public $stipendio;
    public $reparto;

      function __construct($_nome, $_cognome, $_dataNascita, $_cf, $_reparto){

          $this->nome = $_nome;
          $this->cognome = $cognome;
          $this->dataNascita = $dataNascita;
          $this->cf = $cf;
          $this->reparto = $reparto;

      }
  }

  echo(Dipendente);

?>
