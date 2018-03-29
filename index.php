<?php
require('./Osoba.php');
require('./Student.php');
/*
echo $osoba1->pobierzOpis().'<br/>';
echo $osoba2->pobierzOpis();
echo "<br />";
$osoba1->zmienImie("Sylwia");
echo $osoba1->pobierzOpis().'<br/>';
*/
 $student1= new Student("Jan", 34);
 $student1 ->ustawRok(3);
 echo $student1->pobierzOpis();
 ?>
 