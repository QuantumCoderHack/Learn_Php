<?php
//-------------------------------------------------------------------
$array_ex=array("Spiderman","Suç ve Ceza","IT","Ýçimizdeki Çocuk","Ýnsan ve Davranýþý");

array_unshift($array_ex,"Þeker Portakalý");//Dizinin baþýna eleman ekler.
array_push($array_ex,"Spiderman 2");//Dizinin sonuna eleman ekler.


echo "<pre>";
print_r($array_ex);
//-------------------------------------------------------------------



//-------------------------------------------------------------------
array_shift($array_ex);//Dizinin baþýndaki elemaný kaldýrýr.
array_pop($array_ex);//Dizinin sonundaki elemaný kaldýrýr.


echo "<pre>";
print_r($array_ex);
//-------------------------------------------------------------------





//-------------------------------------------------------------------
unset($array_ex[2]);//Dizide belirtilen indis numarasýna göre kaldýrýr.


echo "<pre>";
print_r($array_ex);
//-------------------------------------------------------------------


//ORNEKLER

//-------------------------------------------------------------------
//1, 5, 9 No.lu indise sahip olan öðrenci adlarýný silen PHP kodlarýný yazýnýz.

echo "<br><br> 1, 5, 9 No.lu indise sahip olan öðrenci adlarýný silen PHP kodlarýný yazýnýz.";


$ogrenciler=array("Ali","Veli","Ayþe","Fatma","Çiçek","Yasin","Ýbo","Arda","Mustafa","Mehmet","Kemal");


unset($ogrenciler[1]);
unset($ogrenciler[5]);
unset($ogrenciler[9]);


echo "<pre>";

print_r($ogrenciler);
//-------------------------------------------------------------------


//-------------------------------------------------------------------
//Sildiðiniz 1 ve 5 no.lu indise sahip olan öðrencileri dizin baþýna, 9 No.lu indise sahip olan öðrenciyi
//dizinin sonuna ekleyen PHP kodlarýný yazýnýz.

echo "<br><br> Sildiðiniz 1 ve 5 no.lu indise sahip olan öðrencileri dizin baþýna, 9 No.lu indise sahip olan öðrenciyi dizinin sonuna ekleyen PHP kodlarýný yazýnýz.";

$ogrenciler=array("Ali","Veli","Ayþe","Fatma","Çiçek","Yasin","Ýbo","Arda","Mustafa","Mehmet","Kemal");



unset($ogrenciler[1]);
unset($ogrenciler[5]);

array_unshift($ogrenciler,"Veli");
array_unshift($ogrenciler,"Yasin");

unset($ogrenciler[9]);

array_push($ogrenciler,"Mehmet");

echo "<pre>";

print_r($ogrenciler);
//-------------------------------------------------------------------


//-------------------------------------------------------------------
//Dizin baþýndan ve sonundan iki tane öðrenci adýný çýkaran PHP kodunu yazýnýz.
echo "<br><br> Dizin baþýndan ve sonundan iki tane öðrenci adýný çýkaran PHP kodunu yazýnýz.";

$ogrenciler=array("Ali","Veli","Ayþe","Fatma","Çiçek","Yasin","Ýbo","Arda","Mustafa","Mehmet","Kemal");

array_shift($ogrenciler);
array_pop($ogrenciler);

echo "<pre>";

print_r($ogrenciler);
//-------------------------------------------------------------------


//-------------------------------------------------------------------
//Dizileri birleþtirme iþlemi
echo "<br><br> Dizileri birleþtirme iþlemi";

$meyveler=array("Elma","Muz","Kiraz");
$sebzeler=array("Kabak","Havuç","Turp");

$birlestir=array_merge($meyveler,$sebzeler);

echo "<pre>";

print_r($birlestir);
//-------------------------------------------------------------------




//-------------------------------------------------------------------
//Dizilerde ortak eleman bulma
echo "<br><br> Dizilerde ortak eleman bulma";
$sayilar=array(1,2,4,6);
$sayilar2=array(1,2,3,4);
$sayilar3=array(6,2,3,4);

$birlestir=array_intersect($sayilar,$sayilar2,$sayilar3);

echo "<pre>";

print_r($birlestir);
//-------------------------------------------------------------------



//-------------------------------------------------------------------
//Dizilerde yer alan verilerin farkýný bulma
echo "<br><br> Dizilerde yer alan verilerin farkýný bulma";
$sayilar=array(1,12,4,6);
$sayilar2=array(1,8,3,4);
$sayilar3=array(6,2,15,4);

$birlestir=array_diff($sayilar,$sayilar2,$sayilar3);

echo "<pre>";

print_r($birlestir);
//-------------------------------------------------------------------




//-------------------------------------------------------------------
//Dizide tekrarlanan deðerleri silme
echo "<br><br> Dizide tekrarlanan deðerleri silme";
$sayilar=array(1,1,2,3,3,4,5,6);

$birlestir=array_unique($sayilar);

echo "<pre>";

print_r($birlestir);
//-------------------------------------------------------------------




//-------------------------------------------------------------------
//Dizideki elemanlarý yan yana sýralama
echo "<br><br> Dizideki elemanlarý yan yana sýralama <br>";
$sayilar=array(1,3,4,6,7,8);

echo implode("-",$sayilar);

//-------------------------------------------------------------------




?>