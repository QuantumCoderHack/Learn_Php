<?php

$liste_array=array("Ali","Ahmet","Ayþe","Fatma","Leyla","Osman");

foreach($liste_array as $list){
    echo $list."<br>";
}
echo "<br>";


for($i=0;$i<count($liste_array);$i++){
    echo $liste_array[$i]."<br>";
}
echo "<br>";
echo "<br>";

$musteri=array(
"adsoyad"=>"Ahmet Ahmet",
"sehir"=>"Elazýð",
"Borç"=>20000,
);

$key=array_keys($musteri);

foreach($musteri as $array){
    var_dump($array);
}

for($j=0; $j<count($key);$j++){
    echo $musteri[$key[$j]]."<br>";
}

echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
$sayilar=array(45,3,12,17,4,24,65,85,741); 


$sum=0;
for($k=0;$k<count($sayilar);$k++){
    $sum+=$sayilar[$k];
    
echo $sayilar[$k]."<br>";
}

echo "<br>";

echo "Average :".($sum/count($sayilar));





?>