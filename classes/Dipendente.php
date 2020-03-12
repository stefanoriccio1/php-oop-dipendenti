<?php
  require_once __DIR__ . '/../traits/GetBudget.php';

  class Dipendente {

    protected $id;
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $dataNascita;
    protected $cf;
    protected $stipendio;
    protected $reparto;

      public function __construct($_nome, $_cognome, $_dataNascita, $_cf, $_reparto){


          $this->cognome = $_cognome;
          $this->dataNascita = $_dataNascita;
          $this->cf = $_cf;
          $this->reparto = $_reparto;

          if(empty($_nome) || !is_string($_nome) || strlen($_nome) < 3){
            throw new Exception ('inserisci il nome correttamente e solo in lettere');
          }
          else{
            $this->nome = $_nome;
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

      public function setCf($_cf){
        // fai check su dato
        $this->cf = $_cf;
      }

      public function getCf(){
        return $this->cf;
      }

      public function setEta($_eta){
        // fai check su dato
        $this->eta = $_eta;
      }

      public function getEta(){
        return $this->eta;
      }

      public function calcStipendio($_gg, $_prezzoBase){

        $this->stipendio = $_gg * $_prezzoBase;
      }

      public function getStipendio(){
        return $this->stipendio;
      }
  }


?>
