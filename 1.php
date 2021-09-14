<?php
  echo "ZSŁ<br>";

  echo "ZSK<br>";

  $name="Anna";
  $nazwisko="Nowak";
  echo 'Imię: $name <br>'; //Imię: $name
  echo "Imię: $name <br>"; //Imię: $name

  //typy danych
  //calkowity
  $całkowita=10; //mogą by po polsku
  echo $całkowita;

  $bin=0b1011; //11
  $oct=010;    //8
  $hex=0x10;   //16

  echo $bin,$oct,$hex;

  $x=10.5;

  $prawda=true; //echo wywala 1
  $fałsz=false; //echo nie wywala nic

  echo"$fałsz<br>"; //HIRDOC zajebista sprawa Profesor Szyper Poleca
  echo <<< ETYKIETA
    <br>
    Imie i nazwisko: $name $nazwisko<br>
    Poznań<br>
  ETYKIETA;

  $tekst = <<< ETYKIETA
    <br>
    Imie i nazwisko: $name $nazwisko<br>
    Poznań<br>
  ETYKIETA;

echo $tekst;

  //nowdoc - traktuje wszystko jako stringa
  echo <<< 'ETYKIETA'
    <br>
    Imie i nazwisko: $name $nazwisko<br>
    Poznań<br>
  ETYKIETA;

  echo "Imię użytkownika $name, nazwa zmiennej użytkownika \$name";  // to znak zastzrrzony \'\\\'

?>
