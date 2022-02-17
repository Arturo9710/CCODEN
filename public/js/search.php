<?php  
 $connect = mysqli_connect("localhost", "root", "", "ccoden");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM agendas WHERE nombre LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<dl class="ulCLass" style="margin-bottom: 0px;">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<dt data-id="'.$row["id_agenda"].'"  data-nom="'.$row["nombre"].'"  data-alias="'.$row["alias"].'" data-edad="'.$row["edad"].'" data-hora="'.$row["hora"].'" data-publi="'.$row["publicidad"].'">'.utf8_encode($row["nombre"]).'</dt>';  
           }  
      }else{
        $output .= 'No existe clave del diagnóstico';
      }  
     
      $output .= '</dl>';  
      echo $output;  
 }  
 ?>  