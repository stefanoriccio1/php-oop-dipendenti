<?php

require_once __DIR__ . '/classes/Dipendente.php';

  $riccio = new Dipendente('Ste', 'Riccio', '18/04/1988', 'RCCSFN88D18L219V', 'Pulizie');
  $riccio->calcStipendio(24, 150);
  $riccio->setEta(31);
  var_dump($riccio);


?>
