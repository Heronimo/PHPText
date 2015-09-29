<?php


$paises = array('italia' => 'roma','francia' => 'paris','alemania' => 'berlin', 'suecia' => 'estocolmo','finlandia' => 'oslo','grecia' => 'atenas','suiza' => 'ginebra','inglaterra' => 'londres','rusia' => 'moscu','austria' => 'viena');
$result = count($paises);

   echo "hay ".$result."  países: </br> </br>" ;
   print_r(array_keys($paises));
   echo "</br> </br> hay ".$result."  capitales: </br> </br>" ;
   print_r( array_values( $paises ));



   echo "</br> </br> Ordenamos el array por paises, por el valor de la Key: </br> </br>" ;

ksort($paises);
foreach ($paises as $key => $val) {
    echo "$key = $val"."<br>";
}

   echo "</br> </br> Ordenamos el array por paises, por el valor de la Key </br> </br>" ;

ksort($paises);
foreach ($paises as $val => $key) {
    echo " $val = $key"."<br>";
}


   echo "</br> </br> Ordenamos el array por capitales, el valor de el valor </br> </br>" ;

asort($paises);
foreach ($paises as $key => $val) {
    echo "$val = $key"."<br>";
}
echo "________"."<br>";


$a = array(1,2,3);
$b = array(1,1,1,4);
$c = $a + $b;
   print_r( array_values( $c ));

echo "</br></br>";


$arrlength = count($c);


for($x = 0; $x <  $arrlength; $x++) {
     echo $c[$x];
     echo "</br>";
}

echo "</br></br>";

$a = array('key1'=>1, 'key2'=>2, 'key3'=>3);

$a['key1'] = 5; 
print $a['key1'];

?>
