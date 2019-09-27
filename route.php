<?php
    require_once "index.php";
    require_once "menu.php";
    require_once "list_desayunos.php";
    require_once "menuAdmin.php";

    if($_GET['action'] == ''){
        home();
    }else{
        $partesURL = explode('/',$_GET['action']);

        if($partesURL[0] === 'menu'){
            menu();
        }else{
            if($_GET['action'] == 'admin'){
                menuAdmin();
            }elseif($_GET['action'] == 'agregar'){
                InsertRow();
            }
        }
    }
?>