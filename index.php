<?php
  $url = "http://169.254.169.254/latest/meta-data/instance-id";
  $instance_id = file_get_contents($url);
  echo " <h1> <font color='black'>  Instance ID: <b>" . $instance_id . "</b><br/></font> </h1> ";
?>

<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
   <HEAD>
      <TITLE>
         Cloud Treinamentos
      </TITLE>
   </HEAD>
<BODY>
        <br>
        <H1>Cloud Treinamentos</H1>
        <span style="color:red;font-size:25px">Iniciar stress processador 100% </span>
        <a href="exec.php" target="_blank">AQUI</a>
        <br>
        <br>
        <span style="color:red;font-size:25px">Iniciar stress processador 30% </span>
       <a href="20.php" target="_blank" >AQUI</a>
        <br>
        <br>
        <span style="color:red;font-size:25px">Para stress precessador </span>
       <a href="para.php" >PARAR</a>
        <br>

</BODY>