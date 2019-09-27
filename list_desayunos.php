<?php
   include_once ('db_menu.php');
   
   function Connect(){
      return new PDO('mysql:host=localhost;'
        .'dbname=db_menu;charset=utf8', 'root', '');
   }
   function getDesayunos(){
        $menuDesayunos = getMenu();
              
        foreach($menuDesayunos as $fila) {
              echo "<tr>";
              echo '<td scope="col">'.$fila['nombre'].'</td>';
              echo '<td scope="col">'.$fila['descripcion'].'<a href="borrarTarea/'.$fila['id'].'"'.'</a></td>';
              echo '<td scope="col">'.$fila['precio'].'<a href="borrarTarea/'.$fila['id'].'"'.'</a></td>';
              echo '<td scope="col">'.'<a href="borrarTarea/'.$fila['id'].'"'.'Borrar'.'</a></td>';
              echo "</tr>";
            }
   }
   
   function InsertRow(){

      $titulo = $_POST["Nombre"];
      $descripcion = $_POST["Descripcion"];
      $precio = $_POST["Precio"];
      

      $db = Connect();
      $sentencia = $db->prepare("INSERT INTO desayunos(nombre, descripcion, precio) VALUES(?,?,?)");
      $sentencia->execute(array($titulo,$descripcion,$precio)); 
      header("Location: http://localhost/listbd/admin");
      
   }
?>