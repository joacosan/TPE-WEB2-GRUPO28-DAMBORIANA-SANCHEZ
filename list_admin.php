<?php
   include_once ('db_menu.php');
   
   function getDesayunos(){
        $menuDesayunos = getMenu();
              
        foreach($menuDesayunos as $fila) {
            if($fila['guardar'] == 1){
                echo "<tr>";
                 echo '<td scope="col">'.$fila['nombre'].'</td>';
                 echo '<td scope="col">'.$fila['descripcion'].'</td>';
                 echo '<td scope="col">'.$fila['precio'].'</td>';
                echo "</tr>";
            }else{
                echo "<tr>";
                 echo '<td scope="col">'.$fila['nombre'].'</td>';
                 echo '<td scope="col">'.$fila['descripcion'].'</td>';
                 echo '<td scope="col">'.$fila['precio'].'</td>';
                echo "</tr>";
            }
              
            }
   }
   
?>