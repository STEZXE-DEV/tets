<?php
$servername ="localhost";
$username = "root";
$password ="";
$database="baza2";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed." . mysqli_connect_error());


}
echo "Connected successfully";
////$sql = "CREATE TABLE guests(
//    id INT(6),
//    imie varchar(30) NOT NULL,
//    nazwisko varchar(30) NOT NULL)"; 
$sql = "SELECT id, imie, nazwisko FROM guests;";
$result = mysqli_query($conn, $sql);

echo '<br>';
echo "<ol>";
if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_row($result)){
    echo "<li>id: ".$row[0]."Imie: ".$row[1]."</td>". "<td>". "Nazwisko: ".$row[2]."</li>" ."<br>";
        
    }
    echo "</ol>";
          }
    else {
        echo "0 results";
    }
?>