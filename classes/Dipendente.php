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
          $this->cognome = $_cognome;
          $this->dataNascita = $_dataNascita;
          $this->cf = $_cf;
          $this->reparto = $_reparto;

          if(empty($_nome) || !is_string($_nome)){

            die('inserisci il nome correttamente e solo in lettere');

          }
          if(empty($_cognome) || !is_string($_cognome)){

            die('inserisci il conome correttamente e solo in lettere');

          }
          if(empty($_reparto) || !is_string($_reparto)){

            die('inserisci il reparto correttamente e solo in lettere');

          }
          if(empty($_date) || !is_string($_nome)){

            die('inserisci il nome correttamente e solo in lettere');

          }

      }
  }

?>
