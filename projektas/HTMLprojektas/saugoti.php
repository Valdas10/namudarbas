<?php
$dbName = "mano_baze";
$user = "valdas";
$password = "kamuolys";
$vardas = $_REQUEST['vardas'];
$elpastas = $_REQUEST['elpastas'];
$zinute = $_REQUEST['zinute'];
try {
    $db = new
    PDO('mysql:host=localhost;dbname='.$dbName.';charset=utf8mb4', $user, $password);
    $sql = "INSERT INTO zinutes(vardas, elpastas, zinute) VALUES('" . $vardas . "', '" . $elpastas . "', '" . $zinute . "')";
    $db->exec($sql);
    echo "Sekmingai issaugota";
} catch(PDOException $ex) {
    echo "Kilo klaida! " . $ex->getMessage();
}
