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



          $this->dataNascita = $_dataNascita;
          $this->cf = $_cf;


          if(preg_match('/^([^0-9]+)$/', $_nome) == 0 || strlen($_nome) < 3){
            throw new Exception('inserisci il nome correttamente e solo in lettere');
          }
          else{
            $this->nome = $_nome;
          }
          if(empty($_cognome) || preg_match('/^([^0-9]+)$/', $_nome)== 0){

            throw new Exception('inserisci il cognome correttamente e solo in lettere');

          }
          else{
            $this->cognome = $_cognome;
          }
          if(empty($_reparto) || preg_match('/^([^0-9]+)$/', $_nome)== 0){

            throw new Exception('inserisci il reparto correttamente e solo in lettere');

          }
          else {
            $this->reparto = $_reparto;
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

      public function calcEta(){
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
