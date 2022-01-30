<html>

<head>
    <title>Yapılacaklar Listesi</title>
</head>

<body>
    
    <?php
    $db = new PDO('mysql:host=localhost;dbname=database_name', 'root', 'password');
    $gorevler = $db->query("select * from table_name ");
    ?>
    Yeni Görev Ekle <br>
    <form action="save.php" method="POST">
        <input type="text" name="gorev">
        <input type="submit" value="KAYDET">
    </form>
    <hr />
    <table>
        <tr>
            <td>ID</td>
            <td>Görev</td>
            <td>Sil</td>
            <td>Düzenle</td>
        </tr>
        <?php
        foreach ($gorevler as $gorev) {
            echo "<tr><td>" . $gorev["id"] . "</td> <td>" . $gorev["yapilacak_gorev"] . "</td>";
            echo "<td><a href='delete.php?id=" . $gorev["id"] . "'>Sil</a></td>";
            echo "<td><a href='edit.php?id=" . $gorev["id"] . "'>Düzenle</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>