<?php require 'db.php';
$db = getDb();

if (empty($_POST)) {
   echo 'Nincs űrlap adat.';
}

else if (!isset($_POST['nev'])) {
    echo "Nincs név mező megadva!";
}

else if (!isset($_POST['szam'])) {
    echo "Nincs szám mező megadva!";
}

else if (filter_var($_POST['szam'], FILTER_VALIDATE_INT) === false) {
    echo "Érvénytelen szám!";
}
else{
    $nev = $_POST['nev'];
    $szam = $_POST['szam'];
    $id = $_POST['id'];



    $stmt = $db->prepare("insert into hallgatas (nev, szam, zene_id) values(:nev, :szam, :zene_id)");
    $stmt->bindParam(':nev', $nev, PDO::PARAM_STR);
    $stmt->bindParam(':szam', $szam, PDO::PARAM_INT);
    $stmt->bindParam(':zene_id', $id, PDO::PARAM_INT);
    $stmt->execute();
    header("Location: index.php");
    exit;
}