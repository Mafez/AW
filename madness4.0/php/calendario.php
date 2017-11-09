<?php

echo '<div class="tabla">';
echo '<table class="table">';
echo'<tr >';
echo '<div class="fila2">';
        echo'<th>Lunes</th>';
        echo'<th>Martes</th>';
        echo'<th>Miercoles</th>';
        echo'<th>Jueves</th>';
        echo'<th>Viernes</th>';
        echo'<th>Sábado</th>';
        echo'<th>Domingo</th>';
echo'</tr>';
echo '</div>';

echo'<tbody>';

$year = date("Y");
$month = date("m");
$inicio_mes = date('Y-m-d', mktime(0,0,0, $month, 1, $year));
                            
                            
$ObjetoFecha = new DateTime($inicio_mes); 
//Ejemplo: Queremos mostrar Marzo 2017
$numeroDias = $ObjetoFecha->format('t'); 
$diaSemana = $ObjetoFecha->format('w');
$diaSemana = $diaSemana == 0 ? 7 : $diaSemana;
$semanaPrimerDia = $ObjetoFecha->format('n') == 1 ? 0 : $ObjetoFecha->format('W');
$intervalo = $numeroDias -1;
$ObjetoFecha->modify("+".$intervalo." days");
$semanaUltimoDia = $ObjetoFecha->format('W');
$numeroSemanas = $semanaUltimoDia-$semanaPrimerDia+1;

$day = date("d", mktime(0,0,0, $month+1, 0, $year));
 
      
$fin_mes =date('Y-m-d', mktime(0,0,0, $month, $day, $year));;
$query = "SELECT Nombre FROM contenido WHERE Fecha_inicio >= $inicio_mes and Fecha_fin <= $fin_mes";
                            

$result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
                            
                            
 for($i=1;$i<=$numeroSemanas;$i++)
 {
    
                                 echo'<tr>';
                                     //iniciamos una fila cada semana.
    for($d=1;$d<=7;$d++)
    {
      //Si estamos en la primera semana hay que detectar el dia
      // de comienzo del mes para inicializar el contador de días
      if($i == 1)
      {
        if($d >= $diaSemana)
        {
           $dia = isset($dia) ? $dia+1 : 1;
        }
      }
      elseif(isset($dia) && $dia < $numeroDias)
      {
        $dia++; 
      }
      else
      {
        //Se acabaron los días del mes. 
       //(estas celdas pertenecen al mes siguiente)
       unset($dia);
      }
 
      if(isset($dia))
      {
        //Pintamos los días del mes.
         /* $query = "SELECT Nombre FROM contenido WHERE Fecha_inicio >= $inicio_mes and Fecha_fin <= $fin_mes";*/
                                        
        echo'<td class="dianormal">';
            echo' <table width="100%" height="100%">';
                echo' <tbody>';
                    echo'<td class="dia">';
                            echo $dia;
                    echo'</td>';
                    $dia_del_mes = date("Y-m");
                    $query = "SELECT Nombre FROM contenido WHERE Fecha_inicio = '$dia_del_mes-$dia' or Fecha_fin = '$dia_del_mes-$dia' or (Fecha_inicio < '$dia_del_mes-$dia' and Fecha_fin > '$dia_del_mes-$dia')";

                  // echo '<script type="text/javascript">alert("'.$query.'");</script>';
                    $result=mysqli_query($link,$query) or die('Could not look up user information; '.mysqli_error($link));
                       while( $row = mysqli_fetch_row($result)){
                         //  echo '<script type="text/javascript">alert("'.$row[0].'");</script>';
                           echo "<ul>"; 
                            echo "<li class='dias'>"; 
                           echo "<a href='/contenido.php?id=$row[0]'>".$row[0]."</a>";
                           echo "</li>"; 
                           echo "</ul>";
                       }
                 echo'</tbody>';
            echo' </table>';
         echo'</td>';
                                     
     }
     else
     {
       //Pintamos celdas vacias
        echo'<td class="dianomes">&nbsp;</td>';                            
     } 
   }
    echo' </tr>';                             
 }
echo'</tbody>';
echo'</table>';
echo '</div>';
                            
?>