<?php

require_once __DIR__ . '/classes/Dipendente.php';

  $riccio = new Dipendente('Ste', 'Riccio', '18/04/1988', 'RCCSFN88D18L219V', 'Customer Care');
  $riccio->calcStipendio(24, 150);

  var_dump($riccio);

?>
