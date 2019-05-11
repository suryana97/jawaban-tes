<?php

method biodata(){
$nama = "Suryana";
$address = "Jalan Kampung Cikiara RT 04 RW 02 Ds wanakerta Kec Bungursari Kab Purwakarta ";
$hobbies = array ("Adventure" , "Photography" , "Touring");
$is_married = false];
$school ->highschool = "SMK PGRI CIKAMPEK";
$skill = array("photography" => "75" , "editing" => "75");
$biodata = array($nama , $address , $hobbies , $is_married , $school , $skill);
print_r json_encode($biodata);
} biodata();

?>
