<html>

<body>

    <?php

    if ($_POST) {
        $yeni_gorev_degeri = $_POST["gorev"];
        $guncellenecek_gorev_id = $_POST["hdnid"];
        $db = new PDO("mysql:host=localhost;dbname=database_name", "root", "password");
        $query = $db->prepare("update table_name set yapilacak_gorev = ? where id = ? ");
        $update = $query->execute(array($yeni_gorev_degeri, $guncellenecek_gorev_id));
        header("Location: index.php");
    }


    if ($_GET) {
        $id = $_GET["id"];
        $db = new PDO("mysql:host=localhost;dbname=database_name", "root", "password");
        $query = $db->query("select * from table_name where id= '{$id}'")->fetch(PDO::FETCH_ASSOC);
        if ($query) {
            $gorev = $query["yapilacak_gorev"];
        }
    }
    ?>

    <hr />
    Görev Düzenle <br>
    <form action="edit.php" method="POST">
        <input type="hidden" name="hdnid" value="<?php echo $id ?>">
        <input type="text" name="gorev" value="<?php echo $gorev ?>">
        <input type="submit" value="Kaydet">
    </form>
</body>

</html>