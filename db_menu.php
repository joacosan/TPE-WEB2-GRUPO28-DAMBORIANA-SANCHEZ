<?php
    function getMenu(){
        $db = new PDO('mysql:host=localhost;'
        .'dbname=db_menu;charset=utf8', 'root', '');

        $sentencia = $db ->prepare( "select * from desayunos");
        $sentencia->execute();
        $menu = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $menu;
    }
?>

