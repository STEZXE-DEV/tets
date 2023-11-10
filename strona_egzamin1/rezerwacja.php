<?php
$server="localhost";
$user="root";
$password="";
$database="baza";
$con=mysqli_connect($server, $user, $password, $database);
if($con){
    die("Nie udało się połączyć: ". msqli_error())}
$data=$_POST['data'];
$ile=$_POST['osob'];
$telefon=$_POST['telefon'];
$sql="insert into rezerwacje( data_rez, liczba_osob, telefon) values($value, $data, $telefon)";

if(mysqli_query($con, $sql)){
    echo "dodano rezerwacje do bazy";
}
else{
    echo "błąd dodania rekordu";
}

?>