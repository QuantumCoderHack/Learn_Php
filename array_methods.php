<?php
//-------------------------------------------------------------------
$array_ex=array("Spiderman","Suç ve Ceza","IT","İçimizdeki Çocuk","İnsan ve Davranışı");

array_unshift($array_ex,"Şeker Portakalı");//Dizinin başına eleman ekler.
array_push($array_ex,"Spiderman 2");//Dizinin sonuna eleman ekler.


echo "<pre>";
print_r($array_ex);
//-------------------------------------------------------------------



//-------------------------------------------------------------------
array_shift($array_ex);//Dizinin başındaki elemanı kaldırır.
array_pop($array_ex);//Dizinin sonundaki elemanı kaldırır.


echo "<pre>";
print_r($array_ex);
//-------------------------------------------------------------------





//-------------------------------------------------------------------
unset($array_ex[2]);//Dizide belirtilen indis numarasına göre kaldırır.


echo "<pre>";
print_r($array_ex);
//-------------------------------------------------------------------


//ORNEKLER

//-------------------------------------------------------------------
//1, 5, 9 No.lu indise sahip olan öğrenci adlarını silen PHP kodlarını yazınız.

echo "<br><br> 1, 5, 9 No.lu indise sahip olan öğrenci adlarını silen PHP kodlarını yazınız.";


$ogrenciler=array("Ali","Veli","Ayşe","Fatma","Çiçek","Yasin","İbo","Arda","Mustafa","Mehmet","Kemal");


unset($ogrenciler[1]);
unset($ogrenciler[5]);
unset($ogrenciler[9]);


echo "<pre>";

print_r($ogrenciler);
//-------------------------------------------------------------------


//-------------------------------------------------------------------
//Sildiğiniz 1 ve 5 no.lu indise sahip olan öğrencileri dizin başına, 9 No.lu indise sahip olan öğrenciyi
//dizinin sonuna ekleyen PHP kodlarını yazınız.

echo "<br><br> Sildiğiniz 1 ve 5 no.lu indise sahip olan öğrencileri dizin başına, 9 No.lu indise sahip olan öğrenciyi dizinin sonuna ekleyen PHP kodlarını yazınız.";

$ogrenciler=array("Ali","Veli","Ayşe","Fatma","Çiçek","Yasin","İbo","Arda","Mustafa","Mehmet","Kemal");



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
//Dizin başından ve sonundan iki tane öğrenci adını çıkaran PHP kodunu yazınız.
echo "<br><br> Dizin başından ve sonundan iki tane öğrenci adını çıkaran PHP kodunu yazınız.";

$ogrenciler=array("Ali","Veli","Ayşe","Fatma","Çiçek","Yasin","İbo","Arda","Mustafa","Mehmet","Kemal");

array_shift($ogrenciler);
array_pop($ogrenciler);

echo "<pre>";

print_r($ogrenciler);
//-------------------------------------------------------------------


//-------------------------------------------------------------------
//Dizileri birleştirme işlemi
echo "<br><br> Dizileri birleştirme işlemi";

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
//Dizilerde yer alan verilerin farkını bulma
echo "<br><br> Dizilerde yer alan verilerin farkını bulma";
$sayilar=array(1,12,4,6);
$sayilar2=array(1,8,3,4);
$sayilar3=array(6,2,15,4);

$birlestir=array_diff($sayilar,$sayilar2,$sayilar3);

echo "<pre>";

print_r($birlestir);
//-------------------------------------------------------------------




//-------------------------------------------------------------------
//Dizide tekrarlanan değerleri silme
echo "<br><br> Dizide tekrarlanan değerleri silme";
$sayilar=array(1,1,2,3,3,4,5,6);

$birlestir=array_unique($sayilar);

echo "<pre>";

print_r($birlestir);
//-------------------------------------------------------------------




//-------------------------------------------------------------------
//Dizideki elemanları yan yana sıralama
echo "<br><br> Dizideki elemanları yan yana sıralama <br>";
$sayilar=array(1,3,4,6,7,8);

echo implode("-",$sayilar);

//-------------------------------------------------------------------


//Rastgele kitap ve yazar adı tanımlama
$books=array(
0=>array("kitap adı"=>"It","yazar"=>"Peter Johnson"),
1=>array("kitap adı"=>"Spiderman","yazar"=>"Peter Parker"),
2=>array("kitap adı"=>"Tom ve Jerry","yazar"=>"İbo Büyük Hekim"),
3=>array("kitap adı"=>"Kovan Hayatı","yazar"=>"Arda Kovan")

);

$rnd=array_rand($books);

echo $books[$rnd]["kitap adı"],"---> ";
echo $books[$rnd]["yazar"],"|";

//-------------------------------------------------------------------






?>
