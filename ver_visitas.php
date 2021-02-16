<?php
$visitas = file_get_contents("contador.txt");
printf("Hasta ahora van %d visitas", $visitas);
