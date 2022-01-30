<?php
if ($_GET) {
    $id = $_GET["id"];
    $db = new PDO("mysql:host=localhost;dbname=database_name", "root", "password");
    $query = $db->prepare("delete from table_name where id = ?");
    $sonuc = $query->execute(array($id));
    header("Location: index.php");
}
