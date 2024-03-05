<html>
<head>
<title>El Analisis de tu Nombre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {font-weight: bold}
.Estilo3 {font-size: 9px}
.Estilo5 {
	color: #000000;
	font-weight: bold;
}
.Estilo6 {color: #000000}
.Estilo7 {font-size: 10px}
-->
</style>
</head>

<body onLoad="window.print();">
<center>
  <p>
    <script language="javascript" src="../../templates/corimadiv/js/corima.js"></script>
    <SCRIPT LANGUAGE=JavaScript>
function pasarDatos(){
	window.document.estrellaFlash.SetVariable("A.num.text", <?php echo $_GET['_a']; ?>);
	window.document.estrellaFlash.SetVariable("B.num.text", <?php echo $_GET['_b']; ?>);
	window.document.estrellaFlash.SetVariable("C.num.text", <?php echo $_GET['_c']; ?>);
	window.document.estrellaFlash.SetVariable("D.num.text", <?php echo $_GET['_d']; ?>);
	window.document.estrellaFlash.SetVariable("E.num.text", <?php echo $_GET['_e']; ?>);
	window.document.estrellaFlash.SetVariable("F.num.text", <?php echo $_GET['_f']; ?>);
	window.document.estrellaFlash.SetVariable("G.num.text", <?php echo $_GET['_g']; ?>);
	window.document.estrellaFlash.SetVariable("H.num.text", <?php echo $_GET['_h']; ?>);
	window.document.estrellaFlash.SetVariable("I.num.text", <?php echo $_GET['_i']; ?>);
	window.document.estrellaFlash.SetVariable("J.num.text", <?php echo $_GET['_j']; ?>);
	window.document.estrellaFlash.SetVariable("K.num.text", <?php echo $_GET['_k']; ?>);
	window.document.estrellaFlash.SetVariable("L.num.text", <?php echo $_GET['_l']; ?>);
	window.document.estrellaFlash.SetVariable("M.num.text", <?php echo $_GET['_m']; ?>);
	window.document.estrellaFlash.SetVariable("N.num.text", <?php echo $_GET['_n']; ?>);
	window.document.estrellaFlash.SetVariable("NN.num.text", <?php echo $_GET['_nn']; ?>);
	window.document.estrellaFlash.SetVariable("O.num.text", <?php echo $_GET['_o']; ?>);
	window.document.estrellaFlash.SetVariable("P.num.text", <?php echo $_GET['_p']; ?>);
	window.document.estrellaFlash.SetVariable("Q.num.text", <?php echo $_GET['_q']; ?>);
	window.document.estrellaFlash.SetVariable("R.num.text", <?php echo $_GET['_r']; ?>);
	window.document.estrellaFlash.SetVariable("S.num.text", <?php echo $_GET['_s']; ?>);
	window.document.estrellaFlash.SetVariable("T.num.text", <?php echo $_GET['_t']; ?>);
	window.document.estrellaFlash.SetVariable("U.num.text", <?php echo $_GET['_u']; ?>);
	window.document.estrellaFlash.SetVariable("V.num.text", <?php echo $_GET['_v']; ?>);
	window.document.estrellaFlash.SetVariable("W.num.text", <?php echo $_GET['_w']; ?>);
	window.document.estrellaFlash.SetVariable("X.num.text", <?php echo $_GET['_x']; ?>);
	window.document.estrellaFlash.SetVariable("Y.num.text", <?php echo $_GET['_y']; ?>);
	window.document.estrellaFlash.SetVariable("Z.num.text", <?php echo $_GET['_z']; ?>);
	setTimeout("pasarDatos()", 200);
return;
}
  </SCRIPT> 
    
  <?php
function leefrase($archivo,$largo,$linea,$linicio){
   $i=$linicio;
   $fd = fopen ($archivo, "r");
   while (!feof($fd)) {
      $buffer[$i] = fgets($fd, $largo);
      $i++;
   }
   fclose ($fd);
   $dato=$buffer[$linea];
   return $dato;
}

function extencion($nombre,$ext){     
   	$dato[0]=$nombre;
	$dato[1]=$ext;
	$datof=implode(".",$dato);
	return $datof;
}
?>
  </p>
  <p>    <style type="text/css">
<!--
.Estilo3 {	color: #FF0000;
	text-decoration: underline;
}
.Estilo1 {color: #0000FF}
-->
    </style>
    </head>
  </p>
</center>
<div align="center"></div>
<h3 align="center">Hola:</h3>
<table height="262" border="1" align="center">
  <!--DWLayoutTable-->

  <tr>
    <th height="67" colspan="9" valign="top" scope="col"><?php echo "<h3>".$_GET['Tnombre']."</h3>"; ?>
      <h3>Tu Nombre Tiene:</h3></th>
  </tr>
  <tr>
    <td height="45" valign="top"> <?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['Tletras'] ."</font></strong></font>"; ?>
      <div align="center"></div>
    <div align="center"><strong>Letras</strong></div>    </td>
    <td colspan="7" valign="middle"> <p>&oacute; Xinonos </p></td>
  </tr>
  <tr>
    <td height="45" valign="top"><?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['Trayos'] ."</font></strong></font>"; ?>
      <div align="center"></div>
    <div align="center"><strong>Rayos</strong></div>    </td>
    <td colspan="7" valign="middle">Diferentes clases de letras sin importar la frecuencia con que se repiten.</td>
  </tr>
  <tr>
    <td height="66" colspan="9" valign="top"><div align="center">
        <p align="center">

<strong>Cantidad de Rayos. (Conos de Luz) </strong></p>
<p align="center"><strong>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" name="estrellaFlash" width="330" height="339" id="estrellaFlash">
  <param name="movie" value="../../imagenes/estrella.swf">
  <param name="quality" value="high">
  <param name="wmode" value="transparent">
  <embed src="/estrella.swf" width="339" height="331" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="estrellaFlash" name="estrellaFlash"  swLiveConnect="true"></embed>
</object>
</strong></p>
<p align="center">
  <script language="javascript" type="text/javascript">
	pasarDatos();
	fraserayo(<?php echo $_GET['Trayos']; ?>);
  </script>		
</p>
    </div></td>
  </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="1" align="center">
  <!--DWLayoutTable-->
  <tr>
    <th height="23" colspan="5" valign="top" scope="col"><h3>Tus N&uacute;meros</h3>
    <p>Los respectivos n&uacute;meros se obtiene remplazando las letras por los valores de la tabla de abajo.</p></th>
  </tr>
  <tr>
    <td><div align="center">
      <h3>N&uacute;mero Personal</h3>
    </div></td>
    <td><div align="center">
      <h3>N&uacute;mero de Misi&oacute;n</h3>
    </div></td>
    <td><div align="center">
      <h3>N&uacute;mero del Dia</h3>
    </div></td>
    <td><div align="center">
      <h3>N&uacute;mero de Mes</h3>
    </div></td>
    <td><div align="center">
      <h3>N&uacute;mero de la Ciudad</h3>
    </div></td>
  </tr>
  <tr>
    <td height="23" align="center" valign="top"><?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['nper'] ."</font></strong></font>"; ?></td>
    <td align="center" valign="top"><?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['nmis'] ."</font></strong></font>"; ?></td>
    <td align="center" valign="top"><?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['totdia'] ."</font></strong></font>"; ?></td>
    <td align="center" valign="top"><?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['totmes'] ."</font></strong></font>"; ?></td>
    <td align="center" valign="top"><?php echo "<p align='center'><font size='+2'><strong><font color='#FF0000'>" . $_GET['tottown'] ."</font></strong></font>"; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="509" border="1" align="center">
  <!--DWLayoutTable-->
  <tr>
    <th height="23" colspan="7" valign="top" scope="col"><strong>TABLA NUM&Eacute;RICA Y VIBRACION DE LOS COLORES </strong></th>
  </tr>
  <tr bgcolor="#FFDFDF">
    <td width="11" height="23"><font face="Arial, Helvetica, sans-serif"><strong>1</strong></font></td>
    <td width="9"><font size="1" face="Arial, Helvetica, sans-serif">A</font></td>
    <td width="9"><font size="1" face="Arial, Helvetica, sans-serif">J</font></td>
    <td width="11"><font size="1" face="Arial, Helvetica, sans-serif">R</font></td>
    <td width="82"><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">ROJO</font></strong></div></td>
    <td width="284" valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Movimiento, Actividad, Viveza, Poder, Pasi&oacute;n, Fuego.</font></td>
    <td width="57" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFE1D2">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>2</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">B</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">K</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">S</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">NARANJA</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Exitaci&oacute;n, Rapidez, Ardor, Vistosidad, Originalidad. </font></td>
    <td bgcolor="#FF9900">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFCE">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>3</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">C</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">L</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">T</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">AMARILLO</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Esplendor, Acci&oacute;n, Sol, Ambici&oacute;n, Cambio, Velocidad. </font></td>
    <td bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr bgcolor="#D2FFE9">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>4</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">D</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">M</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">U</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">VERDE</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Frescura, Juventud, Primavera, Mansedumbre, Descanso.</font></td>
    <td bgcolor="#00FF00">&nbsp;</td>
  </tr>
  <tr bgcolor="#AEFFFF">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>5</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">E</font></td>
    <td><p><font size="1" face="Arial, Helvetica, sans-serif">N</font></p></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">V</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">AZUL</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Recogimiento, Frialdad, Sabiduria, Equilibrio. </font></td>
    <td bgcolor="#00CCFF">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCE6FF">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>6</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">F</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">&Ntilde;</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">W</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">A&Ntilde;IL</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Profundidad, Seriedad, Realismo, Discreci&oacute;n.</font></td>
    <td bgcolor="#0000FF">&nbsp;</td>
  </tr>
  <tr bgcolor="#F7E8EF">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>7</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">G</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">O</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">X</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">VIOLETA</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Misticismo, Misterio, Tristeza, Sencillez.</font></td>
    <td bgcolor="#FF00FF">&nbsp;</td>
  </tr>
  <tr bgcolor="#F2ECF1">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>8</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">H</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">P</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">Y</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">ULTRAVIOLETA</font></strong></div></td>
    <td valign="top"><font size="1" face="Arial, Helvetica, sans-serif">Transformaci&oacute;n, Influecia, Mejor&iacute;a, Evoluci&oacute;n. </font></td>
    <td bgcolor="#F4F0F4">&nbsp;</td>
  </tr>
  <tr bgcolor="#EDE7E8">
    <td height="23"><font face="Arial, Helvetica, sans-serif"><strong>9</strong></font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">I</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">Q</font></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">Z</font></td>
    <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">INFRARROJO</font></strong></div></td>
    <td valign="top" bgcolor="#EDE7E8"><font size="1" face="Arial, Helvetica, sans-serif">Calor, Intuici&oacute;n, Multiplicaci&oacute;n, Respeto, Habilidad. </font></td>
    <td bgcolor="#EDE7E8">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#000000">
    <!--DWLayoutTable-->
    <tr>
      <td align="center" >
        <h3><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td align="center" >
        <h3 align="center" class="Estilo5">Letra</h3></td>
      <td align="center" >
        <h3 class="Estilo6"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td align="center" >
        <h3 align="center" class="Estilo6"><strong>Cantidad de Xinonos</strong></h3></td>
      <td align="center" >
        <h3 class="Estilo6"><b>Letra</b></h3></td>
      <td align="center" ><h3 class="Estilo6"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td align="center" >
        <h3 align="center" class="Estilo5">Cantidad de Xinonos</h3></td>
      <td align="center" >
        <h3 class="Estilo6"><b>Letra</b></h3></td>
      <td align="center" >
        <h3 class="Estilo6"><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td><h3 align="center" class="Estilo6"><strong>Cantidad de Xinonos</strong></h3></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#FF0000" face="Arial, Helvetica, sans-serif">1</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>A</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"> <b> .<?php echo $_GET['_a']; ?> </b> </font> </span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong> .
                <? For ($i=1;$i<=$_GET['_a'];$i++){echo"A";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>J</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_j']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5"> 
          <center>
          .
            <? For ($i=1;$i<=$_GET['_j'];$i++){echo"J";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>R</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_r']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong> .
              <? For ($i=1;$i<=$_GET['_r'];$i++){echo"R";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#FF8000" face="Arial, Helvetica, sans-serif">2</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>B</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_b']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong> .
                <? For ($i=1;$i<=$_GET['_b'];$i++){echo"B";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>K</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_k']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_k'];$i++){echo"K";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>S</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_s']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_s'];$i++){echo"S";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#FFCC00" face="Arial, Helvetica, sans-serif">3</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>C</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_c']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_c'];$i++){echo"C";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>L</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_l']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_l'];$i++){echo"L";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>T</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_t']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_t'];$i++){echo"T";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#008000" face="Arial, Helvetica, sans-serif">4</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>D</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_d']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_d'];$i++){echo"D";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>M</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_m']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_m'];$i++){echo"M";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>U</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_u']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_u'];$i++){echo"U";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#00FFFF" face="Arial, Helvetica, sans-serif">5</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>E</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_e']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_e'];$i++){echo"E";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>N</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_m']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_n'];$i++){echo"N";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>V</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_v']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_v'];$i++){echo"V";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#0000FF" face="Arial, Helvetica, sans-serif">6</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>F</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_f']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_f'];$i++){echo"F";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>&Ntilde;</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_nn']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_nn'];$i++){echo"Ñ";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>W</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_w']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_w'];$i++){echo"W";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#993366" face="Arial, Helvetica, sans-serif">7</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>G</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_g']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_g'];$i++){echo"G";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>O</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_o']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_o'];$i++){echo"O";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>X</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_x']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_x'];$i++){echo"X";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#800080" face="Arial, Helvetica, sans-serif">8</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>H</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_h']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_h'];$i++){echo"H";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>P</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_p']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_p'];$i++){echo"P";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>Y</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_y']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_y'];$i++){echo"Y";}?>
        </strong>
      </center></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="pink" face="Arial, Helvetica, sans-serif">9</font></b></td>
      <td align="center" >
        <div align="center" class="Estilo6"><b>I</b></div></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_i']; ?> </b></font></span></td>
      <td align="center" >
        <center class="Estilo6">
          <strong>.
                <? For ($i=1;$i<=$_GET['_i'];$i++){echo"I ";}?>
          </strong>
      </center></td>
      <td align="center" > <span class="Estilo6"><b>Q</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> .<?php echo $_GET['_q']; ?> </b></font></span></td>
      <td align="center" >
        <div align="left" class="Estilo5">
          <center>
          .
            <? For ($i=1;$i<=$_GET['_q'];$i++){echo"Q";}?>
          </center>
      </div></td>
      <td align="center" > <span class="Estilo6"><b>Z</b></span></td>
      <td align="center" > <span class="Estilo6"><font face="Arial, Helvetica, sans-serif"><b> <?php echo $_GET['_z']; ?> </b></font></span></td>
      <td align="center" ><center class="Estilo6">
        <strong>.
              <? For ($i=1;$i<=$_GET['_z'];$i++){echo"Z";}?>
        </strong>
      </center></td>
    </tr>
</table>
  <p align="center">
  <table border="3" align="center">
    <!--DWLayoutTable-->
    <tr style="display:none" id="IA" >
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IA,IAI)"></div></td>
      <td><div align="center">
        <h3><b>1-&nbsp;</b></h3>
      </div></td>
    </tr>
    <tr id="IAI"  style="display:none ">
      <td align="center" valign="middle"><div align="center">
        <h3><b>A</b> =</h3>
      </div></td>
      <td valign="top"><h3 align="center"> <b><u><span class="Estilo3">Intensidad</span></u> que utilizas para vivir.</b></h3>        
      <p align="center">En honor<b> </b>a<b>&nbsp;: Andr&eacute; Marie Amp&egrave;re = 1.775-1836,</b></p>        <p align="center">Se utiliza en todos los aparatos el&eacute;ctricos</p>                <p align="center">Intensidad El&eacute;ctrica<b>, </b>S&iacute;mbolo <b class="Estilo3">A</b><b> -&nbsp; </b>Unidad de<b> </b>medida <b>Amperio.</b></p></td>
    </tr>
    <tr style="display:none" id="IB">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IB,IBI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>2-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IBI">
      <td valign="middle"><div align="center">
        <h3><b>B =</b></h3>
      </div></td>
    <td valign="top"><h3 align="center"><b><u><span class="Estilo3">Brillo</span></u> y reflejo en actos y realizaciones.</b></h3>        <p align="center">En honor<b> </b>a:<b> Sim&oacute;n Bol&iacute;var Palacios- 1783- 1830.</b></p>        <p align="center" class="Estilo1">Libertador de Colombia y otras Naciones.&nbsp;&nbsp;&nbsp;&nbsp; <b>&nbsp;&nbsp;&nbsp;</b>Su brillo.</p></td>
    </tr>
    <tr style="display:none" id="IC">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IC,ICI)"></div></td>

      <td valign="middle"><div align="center">
        <h3><b>3-&nbsp;</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ICI">
      <td valign="middle"><div align="center">
        <h3><b>C =</b></h3>
      </div></td>
    <td valign="top"><h3 align="center"><b><u class="Estilo3">Cantidad</u> de fuerza en la actitud para obrar.</b></h3>        <p align="center">En honor a:<b> Charles de Coulomb = 1.736- 1806.</b></p>        
      <p align="center">Cantidad de electricidad, s&iacute;mbolo <b class="Estilo3">C </b><b>&nbsp;&nbsp;&nbsp;- </b>Unidad de<b>&nbsp; </b>medida <b>Culombio.</b></p></td>
    </tr>
    <tr style="display:none" id="ID">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(ID,IDI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>4-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IDI">
      <td valign="middle"><div align="center">
        <h3><b>D =</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u class="Estilo3">Disfrutar</u>&nbsp; y compartir para crear y transformar.</b></h3>
        <p>En honor a: <b>Walter El&iacute;as Disney Call = 1901 -1966.</b></p>
        <p><b><span class="Estilo1"> </span></b><span class="Estilo1">Transform&oacute; lo inanimado en im&aacute;genes reales para disfrutar</span>.</p>
      </div></td>
    </tr>
    <tr style="display:none" id="IE">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IE,IEI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>5</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IEI">
      <td><div align="center">
        <h3><b>E=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u class="Estilo3">Energ&iacute;a</u> que impulsan acciones.</b></h3>
        <p>En honor a<b>: Albert Einstein Koch. 1879-1955. E = MC<sup>2 </sup></b></p>
        <p><b>Su&nbsp; f&oacute;rmula de Energ&iacute;a, cambi&oacute; hasta los conceptos.</b></p>
        <p><sup>No.&nbsp;&nbsp; 99=</sup><sup> S&Iacute;MBOLO = </sup><b><sup>ES</sup></b><sup>&nbsp; </sup><sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</sup><sup> Elemento</sup><sup>&nbsp;&nbsp; qu&iacute;mico </sup><b><sup>Einstenio.</sup></b><sup></sup></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IF">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IF,IFI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>6-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IFI">
      <td><div align="center">
        <h3><b>F=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u class="Estilo3">Capacidad</u> maravillosa para actuar.</b></h3>
        <p>En Honor a<b>: Michael Faraday - 1791-1867.</b></p>
        <p>Capacidad El&eacute;ctrica<b> </b>s&iacute;mbolo<b> <span class="Estilo3">F</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp; </b>Unidad de<b> </b>medida <b>Faradio.</b></p>
        </div></td>
    </tr>
    <tr style="display:none" id="IG">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IG,IGI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>7-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IGI">
      <td><div align="center">
        <h3><b>G=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u class="Estilo3">Magnetismo</u> que posees ante los dem&aacute;s.</b></h3>
        <p>En honor a: <b>Carl Friederich Gauss - 1777- 1855.</b></p>
        <p>Inducci&oacute;n&nbsp; magn&eacute;tica, s&iacute;mbolo Gs <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</b>Unidad de<b> </b>medida <b>Gauss</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IHD">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IHD,IHHI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>8-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IHHI">
      <td><div align="center">
        <h3><b>H=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u class="Estilo3">Inducir</u></b> <b>a otros para tomar decisiones.</b></h3>
        <p>En honor a<b>: Joseph Henry - 1797 - 1878.</b></p>
        <p>Inductancia el&eacute;ctrica s&iacute;mbolo<b> </b><b class="Estilo3">H</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Unidad de medida <b>Henrio</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="II">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(II,III)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>9-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="III">
      <td><div align="center">
        <h3><b>I=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b class="Estilo3"><u>Huella</u></b><b>&nbsp;</b><b>que imprimes en lo que emprendes.</b></h3>
        <p>En honor a<b>:&nbsp; Johannes Gutenberg -1400- 1468</b></p>
        <p><span class="Estilo1">Imprime La Biblia su primer Libro<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>Invenci&oacute;n la Imprenta</span></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IJ">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IJ,IJI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>10-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IJI">
      <td><div align="center">
        <h3><b>J= </b><b><u></u></b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b class="Estilo3"><u>Trabajo</u></b> <b>actividad</b> <b>en tus acciones</b></h3>
        <p>En honor a<b>: James Prescott Joule - 1818-1889.</b></p>
        <p>Cantidad de calor y trabajo s&iacute;mbolo <b class="Estilo3">J</b><b> -</b> Unidad de<b> </b>medida Julio</p>
      </div></td>
    </tr>
    <tr style="display:none" id="IK">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IK,IKI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>11-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IKI">
      <td><div align="center">
        <h3><b>K=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><span class="Estilo3"><b><u>Temperatura</u></b><b></b></span><b>&nbsp; especial equilibrio al actuar</b></h3>
        <p>En honor a<b>:&nbsp;&nbsp; William Thomson - Lord Kelvin- 1824- 1907.</b></p>
        <p>Temperatura termodin&aacute;mica <b>- </b>s&iacute;mbolo <b class="Estilo3">K</b> -&nbsp; Unidad de medida <b>Kelvin</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IL">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IL,ILI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>12-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ILI">
      <td><div align="center">
        <h3><b>L=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b class="Estilo3"><u>Transformaci&oacute;n</u></b> <b>luminosidad imaginaci&oacute;n</b></h3>
        <p>En honor a<b>: Louis y Auguste Lumi&egrave;re - 1862- 1954.</b></p>
        <p><span class="Estilo1">Con 24 im&aacute;genes crean las pel&iacute;culas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Inventan el&nbsp; Cine</span></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IM">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IM,IMI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>13-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IMI">
      <td valign="middle"><div align="center">
        <h3><b>M=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b class="Estilo3"><u>Abundancia</u></b><b> habilidad y generosidad</b></h3>
        <p>En honor a<b>: James Clerk Maxwell -1831-1879.</b></p>
        <p>Leyes campo electromagn&eacute;tico - s&iacute;mbolo <b class="Estilo3">M</b> -Unidad medida&nbsp; <b>Maxwell</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IN">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IN,INI)"></div></td>
      <td><div align="center">
        <h3><b>14-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="INI">
      <td><h3 align="center"><b>N=</b></h3></td>
      <td valign="top"><div align="center">
        <h3><span class="Estilo3"><b>Fuerza y tes&oacute;n</b></span><b> para producir y realizar</b></h3>
        <p>En honor a<b>:&nbsp; Isaac Newton Ayscough- 1642-1727.</b></p>
        <p>Ley gravitaci&oacute;n<b>, </b>telescopio<b>- </b>s&iacute;mbolo<b>&nbsp; </b><b class="Estilo3">N </b><b>- </b>Unidad de fuerza <b>Newton</b><b>.</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="INN">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(INN,INNI)"></div></td>
      <td><div align="center">
        <h3><b>15-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="INNI">
      <td><h3 align="center"><b>&Ntilde;=</b></h3></td>
      <td><h3 align="center"><b class="Estilo3"><u>Especialidad</u></b><b> e importancia al relacionarse.</b></h3>
        <p align="center">En honor a<b>: Idioma Espa&ntilde;ol - cualidad del Alfabeto.</b></p>
      <p align="center"><span class="Estilo1">Determina palabras del Idioma.<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b>Especialidad</span></p></td>
    </tr>
    <tr style="display:none" id="IO">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IO,IOI)"></div></td>
      <td><div align="center">
        <h3><b>16-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IOI">
      <td><h3 align="center"><b>O=</b></h3></td>
      <td><h3 align="center"><b class="Estilo3"><u>Resistencia</u></b><b> fortaleza al actuar y decidir.</b></h3>
        <p align="center">En honor a<b>: Georg Simon Ohm- 1789-1854</b></p>
      <p align="center">Resistencia el&eacute;ctrica<b> - </b>s&iacute;mbolo<b> </b><b class="Estilo3">OHM</b><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>Unidad de<b> </b>medida <b>Ohmio</b></p></td>
    </tr>
    <tr style="display:none" id="IP">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IP,IPI)"></div></td>
      <td><div align="center">
        <h3><b>17-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IPI">
      <td><h3 align="center"><b>P=</b></h3></td>
      <td><h3 align="center"><b>&nbsp; </b><b class="Estilo3"><u>Presi&oacute;n</u></b><b>&nbsp; persistencia y tolerancia. </b></h3>
        <p align="center">En honor a<b>: Blaise Pascal- 1623- 1662&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">Presi&oacute;n uniforme<b> - </b>s&iacute;mbolo<b> </b><b class="Estilo3">Pa</b><b> - </b>Unidad de<b> </b>medida <b>Pascal</b></p></td>
    </tr>
    <tr style="display:none" id="IQD">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IQD,IQI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>18-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IQI">
      <td><h3 align="center"><b>Q=</b></h3></td>
      <td><h3 align="center"><b class="Estilo3"><u>Discreci&oacute;n</u></b><b>&nbsp;y gran prudencia para obrar.</b></h3>
        <p align="center">En honor a<b>: Max Planck- 1858- 1947&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">Cantidad m&iacute;nima de energ&iacute;a&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Medida <b>Quanto</b></p></td>
    </tr>
    <tr style="display:none" id="IR">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IR,IRI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>19-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IRI">
      <td><h3 align="center"><b>R=</b></h3></td>
      <td><h3 align="center"><b>&nbsp; </b><b class="Estilo3"><u>Radiaci&oacute;n</u></b><b> cualidad extensiva a los dem&aacute;s.</b></h3>
        <p align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>En honor a<b>: Pierre Curie- Marie Sklodoswka 1867-1934&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pareja que descubri&oacute; la radioactividad.&nbsp; Medida Curie -&nbsp; Radiactividad</p></td>
    </tr>
    <tr style="display:none" id="IS">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IS,ISI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>20-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ISI">
      <td><div align="center">
        <h3><b>S=</b></h3>
      </div></td>
      <td><h3 align="center"><b> </b><b class="Estilo3"><u>Conducir</u></b><b> facilidad para orientar a otros.</b></h3>
        <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En honor a<b>: S- Hermanos Siemens- 1816-..1904&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conductancia el&eacute;ctrica - s&iacute;mbolo <b class="Estilo3">S</b>&nbsp; Unidad de medida <b>Siemens</b></p></td>
    </tr>
    <tr style="display:none" id="IT">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IT,ITI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>21-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ITI">
      <td><div align="center">
        <h3><b>T=</b></h3>
      </div></td>
      <td><h3 align="center"><b class="Estilo3">Atracci&oacute;n</b><b> inter&eacute;s investigativo personal.</b></h3>
        <p align="center">En honor a<b>: Nikola Tesla - 1856-1943</b></p>
      <p align="center">Inducci&oacute;n magn&eacute;tica&nbsp; s&iacute;mbolo<b> </b><b class="Estilo3">T</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad de medida <b>Tesla</b></p></td>
    </tr>
    <tr style="display:none" id="IU">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IU,IUI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>22-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IUI">
      <td><div align="center">
        <h3><b>U=</b></h3>
      </div></td>
      <td><h3 align="center"><b class="Estilo3"><u>Cambio</u></b><b> cualidad para efectuar reacciones.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></h3>
        <p align="center">En honor a<b>: Johann Wilhelm Ritter. </b><b>1776-1810</b></p>
      <p align="center" class="Estilo1">Radiaci&oacute;n qu&iacute;mica&nbsp; luminosa invisible<b>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>Rayo Ultra violeta</p></td>
    </tr>
    <tr style="display:none" id="IVD">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IVD,IVI)"></div></td>
      <td valign="top" ><div align="center">
        <h3><b>23-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IVI">
      <td><div align="center">
        <h3><b>V=</b></h3>
      </div></td>
      <td><h3 align="center"><b class="Estilo3"><u>Potencial</u></b><b>&nbsp; </b><b>facilidad para&nbsp; desarrollar habilidades.</b></h3>
        <p align="center">En honor a<b>: Alejandro Volta -1745-1827</b></p>
      <p align="center"> Fuerza electromotriz s&iacute;mbolo <b class="Estilo3">V</b>&nbsp;&nbsp;&nbsp;&nbsp; Unidad de medida <b>Voltio</b></p></td>
    </tr>
    <tr style="display:none" id="IW">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IW,IWI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>24-</b><b></b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IWI">
      <td><h3 align="center"><b>W=</b></h3></td>
      <td><h3 align="center"><b class="Estilo3"><u>Potencia</u></b><b> </b><b>poder para mandar e imponer.</b></h3>
        <p align="center">En honor a<b>: James Watt - 1736-1819</b></p>
      <p align="center">Flujo energ&eacute;tico y t&eacute;rmico -s&iacute;mbolo <b class="Estilo3">W</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Unidad de medida <b>Wat</b></p></td>
    </tr>
    <tr style="display:none" id="IX">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IX,IXI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>25-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IXI">
      <td><h3 align="center"><b>X=</b></h3></td>
      <td><h3 align="center"><b class="Estilo3">Reacci&oacute;n </b><b>facilidad para desentra&ntilde;ar positivamente.</b></h3>
        <p align="center">En honor a<b>:&nbsp; Wilhelm Conrad Roentgen-1845-1923</b></p>
      <p align="center" class="Estilo1">Descubri&oacute; los rayos&nbsp; <b>X</b> -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rayos X</p></td>
    </tr>
    <tr style="display:none" id="IY">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IY,IYI)"></div></td>
      <td valign="top"><div align="center">
        <h3><b>26-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IYI">
      <td><div align="center">
        <h3><b>Y=</b></h3>
      </div></td>
      <td><h3 align="center"> <span class="Estilo3"><b><u>Interferencia</u></b><b></b></span><b> personalidad</b> <b>para inspirar e influir a otros.</b></h3>
        <p align="center">En honor a<b>: Young Thomas- 1773-1829</b></p>
      <p align="center" class="Estilo1">En &Oacute;ptica<b> - </b>fen&oacute;meno de la Interferencia de los rayos luminosos.</p></td>
    </tr>
    <tr style="display:none" id="IZ">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onClick="mira(IZ,IZI)"></div></td>
      <td><div align="center">
        <h3><b>27-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IZI">
      <td><div align="center">
        <h3><b>Z=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b> </b><b class="Estilo3"><u>Multiplicaci&oacute;n</u></b><b> </b><b>&nbsp;cualidad para colaborar y mejorar.</b></h3>
        <p>En honor a<b>: Vladimir Zworykin-1889-1982</b></p>
        <p class="Estilo1">Los tubos electr&oacute;nicos para la televisi&oacute;n creador del&nbsp; Iconoscopio.</p>
      </div></td>
    </tr>
</table>
  <table width="200" border="0" align="center">
    <tr>
      <td><table border="1" align="center" bordercolor="#0000FF">
        <!--DWLayoutTable-->
        <tr>
          <td height="23" colspan="5" valign="top"><h3 align="center"><strong>Significado del N&uacute;mero personal</strong></h3></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==1){echo "#FF9900";} ?>">
          <td><span class="Estilo7">1</span></td>
          <td><div align="center" class="Estilo7">L&iacute;der</div></td>
          <td><div align="center" class="Estilo7">Jefe</div></td>
          <td><div align="center" class="Estilo7">Carisma</div></td>
          <td><div align="center" class="Estilo7">Mando</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==2){echo "#FF9900";} ?>">
          <td><span class="Estilo7">2</span></td>
          <td><div align="center" class="Estilo7">Complemento</div></td>
          <td><div align="center" class="Estilo7">Pareja</div></td>
          <td><div align="center" class="Estilo7">Ambiguedad</div></td>
          <td><div align="center" class="Estilo7">Apoyo</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==3){echo "#00CCFF";} ?>">
          <td><span class="Estilo7">3</span></td>
          <td><div align="center" class="Estilo7">Estabilidad</div></td>
          <td><div align="center" class="Estilo7">Comunicaci&oacute;n</div></td>
          <td><div align="center" class="Estilo7">Alegr&iacute;a</div></td>
          <td><div align="center" class="Estilo7">Sociabilidad</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==4){echo "#00CCFF";} ?>">
          <td><span class="Estilo7">4</span></td>
          <td><div align="center" class="Estilo7">Poder</div></td>
          <td><div align="center" class="Estilo7">Equlibrio</div></td>
          <td><div align="center" class="Estilo7">Dominio</div></td>
          <td><div align="center" class="Estilo7">Paz</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==5){echo "#00CCFF";} ?>">
          <td><span class="Estilo7">5</span></td>
          <td><div align="center" class="Estilo7">Humanidad</div></td>
          <td><div align="center" class="Estilo7">Utilidad</div></td>
          <td><div align="center" class="Estilo7">Bienestar</div></td>
          <td><div align="center" class="Estilo7">Pr&aacute;ctico</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==6){echo "#FF9900";} ?>">
          <td><span class="Estilo7">6</span></td>
          <td><div align="center" class="Estilo7">Complejidad</div></td>
          <td><div align="center" class="Estilo7">Amor</div></td>
          <td><div align="center" class="Estilo7">Debilidad</div></td>
          <td><div align="center" class="Estilo7">Sexualidad</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==7){echo "#FF9900";} ?>">
          <td><span class="Estilo7">7</span></td>
          <td><div align="center" class="Estilo7">Intelectualidad</div></td>
          <td><div align="center" class="Estilo7">Razon</div></td>
          <td><div align="center" class="Estilo7">Idealismo</div></td>
          <td><div align="center" class="Estilo7">Espiritualidad</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==8){echo "#FF9900";} ?>">
          <td><span class="Estilo7">8</span></td>
          <td><div align="center" class="Estilo7">Ambici&oacute;n</div></td>
          <td><div align="center" class="Estilo7">Comodidad</div></td>
          <td><div align="center" class="Estilo7">Adaptabilidad</div></td>
          <td><div align="center" class="Estilo7">Complaciente</div></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nper']==9){echo "#FF9900";} ?>">
          <td><span class="Estilo7">9</span></td>
          <td><div align="center" class="Estilo7">Gratitud</div></td>
          <td><div align="center" class="Estilo7">Respeto</div></td>
          <td><div align="center" class="Estilo7">Productividad</div></td>
          <td><div align="center" class="Estilo7">Actividad</div></td>
        </tr>
      </table></td>
      <td><div align="right"></div>        <table width="361" border="3" align="right" cellspacing="3" bordercolor="#00CCFF">
        <!--DWLayoutTable-->
        <tr>
          <td colspan="5" valign="top"><h3 align="center">Significado del N&uacute;mero de Misi&oacute;n y S&iacute;mbolos</h3></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==1){echo "red";} ?>">
          <td width="9"><span class="Estilo7">1</span></td>
          <td width="70"><div align="center" class="Estilo7">Activar</div></td>
          <td width="75"><div align="center" class="Estilo7">Mover</div></td>
          <td width="91"><div align="center" class="Estilo7">Conducir</div></td>
          <td width="103"><span class="Estilo7">L&iacute;nea</span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==2){echo "red";} ?>">
          <td><span class="Estilo7">2</span></td>
          <td><div align="center" class="Estilo7">Combinar</div></td>
          <td><div align="center" class="Estilo7">Agregar</div></td>
          <td><div align="center" class="Estilo7">Depender</div></td>
          <td><span class="Estilo7">Triangulo rectangulo </span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==3){echo "red";} ?>">
          <td><span class="Estilo7">3</span></td>
          <td><div align="center" class="Estilo7">Crear</div></td>
          <td><div align="center" class="Estilo7">Unir</div></td>
          <td><div align="center" class="Estilo7">Reproducir</div></td>
          <td><span class="Estilo7">Triangulo Equilatero </span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==4){echo "red";} ?>">
          <td><span class="Estilo7">4</span></td>
          <td><div align="center" class="Estilo7">Mandar</div></td>
          <td><div align="center" class="Estilo7">Ayudar</div></td>
          <td><div align="center" class="Estilo7">Orientar</div></td>
          <td><span class="Estilo7">Cruz</span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==5){echo "red";} ?>">
          <td><span class="Estilo7">5</span></td>
          <td><div align="center" class="Estilo7">Entender</div></td>
          <td><div align="center" class="Estilo7">Aprender</div></td>
          <td><div align="center" class="Estilo7">Producir</div></td>
          <td><span class="Estilo7">Pent&aacute;gono</span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==6){echo "red";} ?>">
          <td><span class="Estilo7">6</span></td>
          <td><div align="center" class="Estilo7">Adaptar</div></td>
          <td><div align="center" class="Estilo7">Acoger</div></td>
          <td><div align="center" class="Estilo7">Disfrutar</div></td>
          <td><span class="Estilo7">Hex&aacute;gono</span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==7){echo "red";} ?>">
          <td><span class="Estilo7">7</span></td>
          <td><div align="center" class="Estilo7">Intuir</div></td>
          <td><div align="center" class="Estilo7">Ense&ntilde;ar</div></td>
          <td><div align="center" class="Estilo7">Construir</div></td>
          <td><span class="Estilo7">Pir&aacute;mide</span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==8){echo "red";} ?>">
          <td><span class="Estilo7">8</span></td>
          <td><div align="center" class="Estilo7">Asegurar</div></td>
          <td><div align="center" class="Estilo7">Equilibrar</div></td>
          <td><div align="center" class="Estilo7">Afirmar</div></td>
          <td><span class="Estilo7">Cuadrado</span></td>
        </tr>
        <tr bgcolor="<?php if($_GET['nmis']==9){echo "red";} ?>">
          <td><span class="Estilo7">9</span></td>
          <td><div align="center" class="Estilo7">Realizar</div></td>
          <td><div align="center" class="Estilo7">Agradecer</div></td>
          <td><div align="center" class="Estilo7">Transformar</div></td>
          <td><span class="Estilo7">C&iacute;rculo</span></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</body>
</html>
