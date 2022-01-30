<?php
    if($_POST){
        $gorev=$_POST["gorev"];
        $db=new PDO("mysql:host=localhost;dbname=database_name","root","password");
        $query=$db->prepare("INSERT INTO table_name set yapilacak_gorev = ?");
        $ekle=$query->execute(array($gorev));
        header("Location: index.php");
    }
