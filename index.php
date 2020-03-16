<?php

require_once __DIR__ . '/classes/Customerservice.php';
require_once __DIR__ . '/classes/Amministrazione.php';

  $riccio = new Dipendente('Ste', 'Riccio', '18/04/1988', 'RCCSFN88D18L219V', 'Pulizie');
  $riccio->calcStipendio(24, 150);
  $riccio->setEta(31);
  var_dump($riccio);

  $rossi = new Customerservice ('Mario', 'Rossi', '15-05-1987','GHHSKM87N15H879U', 'Customer Service');
  $rossi->setLivello('middle');
  $rossi->calcStipendio(24, 87);
  $rossi->setEta(32);
  $rossi->setTool('Olark'.','.' Zendesk');
  var_dump($rossi);



?>
