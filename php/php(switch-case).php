<?php
//$day=4;
$day= readline("Gün Numarasını Giriniz: 1,2,3,4,5,6,7 :") ;
switch($day){

    case 1:
        echo "Pazartesi";
         break;
    case 2:
        echo "Salı";
         break;
    case 3:
        echo "Çarşamba";
         break;
    case 4:
        echo "Perşembe";
         break;
    case 5:
        echo "Cuma";
         break;
    case 6:
        echo "Cumartesi";
         break;
    case 7:
        echo "Pazar";
         break;
    
    default:
        echo "Hata !";
        break;
    
}

?>
    