<?php

$handle = fopen('names.txt','w');

fwrite($handle,'Pedro'."\n");
fwrite($handle,'Marcio'."\n");
fwrite($handle,'Gabriel'."\n");

fclose($handle);

$handle = fopen('names.txt','a');

fwrite($handle,'Toy'."\n");
fwrite($handle,'Maia'."\n");

?>