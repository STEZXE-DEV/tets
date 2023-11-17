<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="\style.css">
</head>
<body>
    <div class="baner"><h1>Biblioteka w Książkowicach Wielkich</h1></div>
    <div class="lewy"><h3>Polecamy dzieła autorów:</h3><ol><?php $serwer="localhost";
$user="root";
$password="";
$database="biblioteka";
$con=mysqli_connect($serwer, $user, $password, $database);


$sql="SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;";
$res = mysqli_query($con, $sql);

while($tab = mysqli_fetch_row($res)) {
    echo "<li>$tab[0] $tab[1]</li>";}
  ?></ol></div>
    <div class="srodkowy"><h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3>
        <p><a href="sekretariat@biblioteka.pl">Napisz do nas</p></a><img src="/biblioteka.png" alt="książki"></div>
    <div class="prawy_g"><h3>Dodaj czytelnika</h3>
    <form method="post">
    imie: <input type="text" class="text"><br>
    nazwisko: <input type="text" class="text"><br>
    symbol: <input type="text" class="text"><br>
    <button type="submit">DODAJ</button>
    </form>
    </div>
    <div class="prawy_d"><?php 
    if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['rok'])) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $rok = $_POST['rok'];
        $kod = $imie[0].$imie[1].$rok[-2].$rok[-1].$nazwisko[0].$nazwisko[1];
        $kod = strtolower($kod);
        $kw1 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$kod');";
        mysqli_query($con, $kw1);
        echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";
    }
    ?></div>
    <footer class="stopka"><p>Projekt strony: Stanisław 09</p></footer>

</body>
</html>
<?php 
$serwer="localhost";
$user="root";
$password="";
$database="biblioteka";
$con=mysqli_connect($serwer, $user, $password, $database);
$sql="SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;";
$res = mysqli_query($con, $sql);


  
?>