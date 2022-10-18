<HTML>

<HEAD>
 <TITLE>Ejemplo 03: Aplicacion de control quimico</TITLE>
</HEAD>


<BODY>

<CENTER>
<H1>Sugerencia de control</H1>
</CENTER>

<CENTER>
<HR WIDTH="90%" SIZE="2">
</CENTER>
<BR>

<?php
  
  $temp = $_GET["T"];
  $humedad = $_GET["HR"];

  echo "<FONT COLOR='#777700' SIZE=4 FACE='Times roman'>";
  echo "En base a la Temperatura de <B>$temp °C</B> y Humedad Relativa ";
  echo "del <B>$humedad %</B>, se determino lo siguiente:";
  echo "</FONT>";
  echo "<BR><BR>";


  // el hongo Phragmidium sp. para infectar requiere de
  // temperaturas entre 18 y 21°C, y HR mayor del 80%
 
  if (($temp>=18 && $temp<=21)&&($humedad>80))
     {
      echo "<FONT COLOR='#CC0000' SIZE=5 FACE='arial'>";
      echo "<CENTER>";
      echo "<IMG SRC='./phragmidium.jpg'><BR><BR>";
      echo "Aplicar medidas de control químico.<BR>";
      echo "Ya que existen las condiciones para que el hongo ataque al rosal.";
      echo "</CENTER>";
      echo "</FONT>";     
     }
     else
     {
      echo "<FONT COLOR='#008800' SIZE=5 FACE='arial'>";
      echo "<CENTER>";
      echo "<IMG SRC='./hoja_rosal.jpg'><BR><BR>";
      echo "No aplicar medidas de control químico.<BR>";
      echo "Ya que no existen las condiciones para que el hongo ataque al rosal.";
      echo "</CENTER>";
      echo "</FONT>";      
     }
?>


</BODY>

</HTML>