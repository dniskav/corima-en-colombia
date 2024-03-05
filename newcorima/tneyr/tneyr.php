<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/base.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin t&iacute;tulo</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
<title>base NW</title>
<!-- InstanceEndEditable -->
<link href="../../templates/corimadiv/css/main.css"  rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="js" -->
<script language="javascript" src="../../Templates/corimadiv/js/corima.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="robots" -->
<title>Documento sin t&iacute;tulo</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="keywords" -->
<title>Documento sin t&iacute;tulo</title>
<!-- InstanceEndEditable -->
</head>
<body>
<!-- InstanceBeginEditable name="Titulo" --> Resultado<!-- InstanceEndEditable -->
<div id="contenido"> <!-- InstanceBeginEditable name="Contenido" -->
<script language="JavaScript" type="text/javascript">

function imprimir_var(){
	window.open("print_tneyr.php"+document.location.search);
	return;
}

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
</script> 

<?php 
include('palabra.php'); 
function elimina_acentos($cadena){
	$tofind = "";
	$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuy";
	return(strtr($cadena,$tofind,$replac));
}
?>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div align="center">
  <table width="200" border="8" bgcolor="#0000FF" class="tabla_fondo">
    <!--DWLayoutTable-->
    <tr>
      <td width="190" height="49" valign="top"><p align="center"><a href="metodo_nombre.htm">Quieres Otra Consulta ??? </a></p>
          <p align="center">
            <input type="button" name="Submit" value="Versi&oacute;n Imprimible " onclick="imprimir_var()" />
        </p></td>
    </tr>
  </table>
</div>
<h3 align="center">Hola:</h3>
<table height="262" border="1" align="center">
  <!--DWLayoutTable-->

  <tr>
    <th height="67" colspan="9" valign="top" scope="col"><?php echo $nom->palabra  ?>
      <h3>Tu Nombre Tiene:</h3></th>
  </tr>
  <tr>
    <td height="45" valign="top"><div align="center"></div>
    <div align="center"><strong>Letras</strong></div>    </td>
    <td colspan="7" valign="middle"> <p>&oacute; Xinonos </p></td>
  </tr>
  <tr>
    <td height="45" valign="top"><div align="center"></div>
    <div align="center"><strong>Rayos</strong></div>    </td>
    <td colspan="7" valign="middle">Diferentes clases de letras sin importar la frecuencia con que se repiten.</td>
  </tr>
  <tr>
    <td height="66" colspan="9" valign="top"><div align="center">
        <p align="center">

<strong>Cantidad de Rayos. (Conos de Luz) </strong></p>
<p align="center"><strong>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" name="estrellaFlash" width="339" height="331" id="estrellaFlash">
  <param name="movie" value="../../imagenes/estrella.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="transparent" />
  <embed src="/estrella.swf" width="339" height="331" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="estrellaFlash" name="estrellaFlash"  swLiveConnect="true"></embed>
</object>
</strong></p>
<p align="center"><strong>
  </strong>
</p>
    </div></td>
  </tr>
</table>

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
    <td height="23" align="center" valign="top"><?php echo $nom->sumLetras ?></td>
    <td align="center" valign="top"><?php echo $nMision->sumaNum ?></td>
    <td align="center" valign="top"><?php echo $totdia->sumaNum ?></td>
    <td align="center" valign="top"><?php echo $totmes->sumaNum ?></td>
    <td align="center" valign="top"><?php echo $ciudad->sumLetras  ?></td>
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
     <td><p><font size="1" face="Arial, Helvetica, sans-serif">N</font></p>     </td>
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
 
 <p align="center">&nbsp;</p>
  
    <h5 align="center">Para saber  que significa cada letra, solo hazle click al boton de la letra. </h5>
    <h5 align="center">Por ejemplo: A= intesidad Electrica, una persona con muchas &quot;A&quot; es una persona muy intensa y asi con todo. </h5>
    <p align="center">&nbsp;</p>
  <table border="1" align="center" cellpadding="1" cellspacing="1">
    <!--DWLayoutTable-->
    <tr>
      <td align="center" > <h3><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td align="center" >
      <h3 align="center"><b>Letra</b></h3></td>
      <td align="center" > <h3><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td align="center" >
      <h3 align="center"><b>Cantidad de Xinonos</b></h3></td>
      <td align="center" >
      <h3><b>Letra</b></h3></td>
      <td align="center" ><h3><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td align="center" >
      <h3 align="center"><b>Cantidad de Xinonos</b></h3></td>
      <td align="center" >
      <h3><b>Letra</b></h3></td>
      <td align="center" > <h3><font face="Arial, Helvetica, sans-serif">&nbsp;</font></h3></td>
      <td><h3><b>Cantidad de Xinonos</b></h3></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#FF0000" face="Arial, Helvetica, sans-serif">1</font></b></td>
      <td align="center" >
        <div align="center"><b>A</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="A" type="button" id="A" value="<? For ($i=1;$i<=$_GET['_a'];$i++){echo"A";}?>"  onclick="mira(IA,IAI)" alt="amperios" />
      </div></td>
      <td align="center" > <b>J</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="J" type="button" id="J" value="<? For ($i=1;$i<=$_GET['_j'];$i++){echo"J";}?>"  onclick="mira(IJ,IJI)" />
      </div></td>
      <td align="center" > <b>R</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="R" type="button" id="R" value="<? For ($i=1;$i<=$_GET['_r'];$i++){echo"R";}?>"  onclick="mira(IR,IRI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#FF8000" face="Arial, Helvetica, sans-serif">2</font></b></td>
      <td align="center" >
        <div align="center"><b>B</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="B" type="button" value="<? For ($i=1;$i<=$_GET['_b'];$i++){echo"B";}?>"   onclick="mira(IB,IBI)" />
      </div></td>
      <td align="center" > <b>K</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="K" type="button" id="K" value="<? For ($i=1;$i<=$_GET['_k'];$i++){echo"K";}?>"  onclick="mira(IK,IKI)" />
      </div></td>
      <td align="center" > <b>S</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="S" type="button" id="S" value="<? For ($i=1;$i<=$_GET['_s'];$i++){echo"S";}?>"  onclick="mira(IS,ISI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#FFCC00" face="Arial, Helvetica, sans-serif">3</font></b></td>
      <td align="center" >
        <div align="center"><b>C</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="C" type="button" value="<? For ($i=1;$i<=$_GET['_c'];$i++){echo"C";}?>"  onclick="mira(IC,ICI)" />
      </div></td>
      <td align="center" > <b>L</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="l" type="button" id="L" value="<? For ($i=1;$i<=$_GET['_l'];$i++){echo"L";}?>"  onclick="mira(IL,ILI)" />
      </div></td>
      <td align="center" > <b>T</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="T" type="button" id="T" value="<? For ($i=1;$i<=$_GET['_t'];$i++){echo"T";}?>"  onclick="mira(IT,ITI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#008000" face="Arial, Helvetica, sans-serif">4</font></b></td>
      <td align="center" >
        <div align="center"><b>D</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="D" type="button" value="<? For ($i=1;$i<=$_GET['_d'];$i++){echo"D";}?>"  onclick="mira(ID,IDI)" />
      </div></td>
      <td align="center" > <b>M</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="M" type="button" id="M2" value="<? For ($i=1;$i<=$_GET['_m'];$i++){echo"M";}?>"  onclick="mira(IM,IMI)" />
</div></td>
      <td align="center" > <b>U</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="U" type="button" id="U" value="<? For ($i=1;$i<=$_GET['_u'];$i++){echo"U";}?>"  onclick="mira(IU,IUI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#00FFFF" face="Arial, Helvetica, sans-serif">5</font></b></td>
      <td align="center" >
        <div align="center"><b>E</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="E" type="button" value="<? For ($i=1;$i<=$_GET['_e'];$i++){echo"E";}?>"  onclick="mira(IE,IEI)" />
      </div></td>
      <td align="center" > <b>N</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="N" type="button" id="N" value="<? For ($i=1;$i<=$_GET['_n'];$i++){echo"N";}?>"  onclick="mira(IN,INI)" />
      </div></td>
      <td align="center" > <b>V</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="V" type="button" id="V" value="<? For ($i=1;$i<=$_GET['_v'];$i++){echo"V";}?>"  onclick="mira(IVD,IVI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#0000FF" face="Arial, Helvetica, sans-serif">6</font></b></td>
      <td align="center" >
        <div align="center"><b>F</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="F" type="button" value="<? For ($i=1;$i<=$_GET['_f'];$i++){echo"F";}?>"  onclick="mira(IF,IFI)" />
</div></td>
      <td align="center" > <b>&Ntilde;</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="&Ntilde;" type="button" id="&Ntilde;" value="<? For ($i=1;$i<=$_GET['_nn'];$i++){echo"";}?>"  onclick="mira(INN,INNI)" />
      </div></td>
      <td align="center" > <b>W</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="W" type="button" id="W" value="<? For ($i=1;$i<=$_GET['_w'];$i++){echo"W";}?>"  onclick="mira(IW,IWI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#993366" face="Arial, Helvetica, sans-serif">7</font></b></td>
      <td align="center" >
        <div align="center"><b>G</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="G" type="button" id="G" value="<? For ($i=1;$i<=$_GET['_g'];$i++){echo"G";}?>"   onclick="mira(IG,IGI)" />
      </div></td>
      <td align="center" > <b>O</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="O" type="button" id="O" value="<? For ($i=1;$i<=$_GET['_o'];$i++){echo"O";}?>" onclick="mira(IO,IOI)" />
      </div></td>
      <td align="center" > <b>X</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="X" type="button" id="X" value="<? For ($i=1;$i<=$_GET['_x'];$i++){echo"X";}?>"  onclick="mira(IX,IXI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="#800080" face="Arial, Helvetica, sans-serif">8</font></b></td>
      <td align="center" >
        <div align="center"><b>H</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="H" type="button" id="H" value="<? For ($i=1;$i<=$_GET['_h'];$i++){echo"H";}?>"   onclick="mira(IHD,IHHI)" />
</div></td>
      <td align="center" > <b>P</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left"></div></td>
      <td align="center" > <b>Y</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
          <input name="Y" type="button" id="Y" value="<? For ($i=1;$i<=$_GET['_y'];$i++){echo"Y";}?>"  onclick="mira(IY,IYI)" />
      </div></td>
    </tr>
    <tr>
      <td align="center" > <b><font color="pink" face="Arial, Helvetica, sans-serif">9</font></b></td>
      <td align="center" >
        <div align="center"><b>I</b></div></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="I" type="button" id="I" value="<? For ($i=1;$i<=$_GET['_i'];$i++){echo"I ";}?>"  onclick="mira(II,III)" />
</div></td>
      <td align="center" > <b>Q</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" >
        <div align="left">
          <input name="Q" type="button" id="Q" value="<? For ($i=1;$i<=$_GET['_q'];$i++){echo"Q";}?>" onclick="mira(IQD,IQI)" />
      </div></td>
      <td align="center" > <b>Z</b></td>
      <td align="center" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td align="center" ><div align="left">
        <input name="Z" type="button" id="Z3" value="<? For ($i=1;$i<=$_GET['_z'];$i++){echo"Z";}?>"  onclick="mira(IZ,IZI)" />
</div></td>
    </tr>
</table>

  <p align="center">  </p>
  <table border="3" align="center">
    <!--DWLayoutTable-->
    <tr style="display:none" id="IA" >
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IA,IAI)" /></div></td>
      <td><div align="center">
        <h3><b>1-&nbsp;</b></h3>
      </div></td>
    </tr>
    <tr id="IAI"  style="display:none ">
      <td align="center" valign="middle"><div align="center">
        <h3><b>A</b> =</h3>
      </div></td>
      <td valign="top"><h3 align="center"> <b><u>Intensidad</u> que utilizas para vivir.</b></h3>        
      <p align="center">En honor<b> </b>a<b>&nbsp;: Andr&eacute; Marie Amp&egrave;re = 1.775-1836,</b></p>        <p align="center">Se utiliza en todos los aparatos el&eacute;ctricos</p>                <p align="center">Intensidad El&eacute;ctrica<b>, </b>S&iacute;mbolo <b class="Estilo3">A</b><b> -&nbsp; </b>Unidad de<b> </b>medida <b>Amperio.</b></p></td>
    </tr>
    <tr style="display:none" id="IB">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IB,IBI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>2-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IBI">
      <td valign="middle"><div align="center">
        <h3><b>B =</b></h3>
      </div></td>
    <td valign="top"><h3 align="center"><b><u>Brillo</u> y reflejo en actos y realizaciones.</b></h3>
    <p align="center">En honor<b> </b>a:<b> Sim&oacute;n Bol&iacute;var Palacios- 1783- 1830.</b></p>        <p align="center" class="Estilo1">Libertador de Colombia y otras Naciones.&nbsp;&nbsp;&nbsp;&nbsp; <b>&nbsp;&nbsp;&nbsp;</b>Su brillo.</p></td>
    </tr>
    <tr style="display:none" id="IC">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IC,ICI)" /></div></td>

      <td valign="middle"><div align="center">
        <h3><b>3-&nbsp;</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ICI">
      <td valign="middle"><div align="center">
        <h3><b>C =</b></h3>
      </div></td>
    <td valign="top"><h3 align="center"><b><u>Cantidad</u> de fuerza en la actitud para obrar.</b></h3>        
    <p align="center">En honor a:<b> Charles de Coulomb = 1.736- 1806.</b></p>        
      <p align="center">Cantidad de electricidad, s&iacute;mbolo <b class="Estilo3">C </b><b>&nbsp;&nbsp;&nbsp;- </b>Unidad de<b>&nbsp; </b>medida <b>Culombio.</b></p></td>
    </tr>
    <tr style="display:none" id="ID">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(ID,IDI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>4-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IDI">
      <td valign="middle"><div align="center">
        <h3><b>D =</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Disfrutar</u>&nbsp; y compartir para crear y transformar.</b></h3>
        <p>En honor a: <b>Walter El&iacute;as Disney Call = 1901 -1966.</b></p>
        <p><b><span class="Estilo1"> </span></b><span class="Estilo1">Transform&oacute; lo inanimado en im&aacute;genes reales para disfrutar</span>.</p>
      </div></td>
    </tr>
    <tr style="display:none" id="IE">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IE,IEI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>5</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IEI">
      <td><div align="center">
        <h3><b>E=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Energ&iacute;a</u> que impulsan acciones.</b></h3>
        <p>En honor a<b>: Albert Einstein Koch. 1879-1955. E = MC<sup>2 </sup></b></p>
        <p><b>Su&nbsp; f&oacute;rmula de Energ&iacute;a, cambi&oacute; hasta los conceptos.</b></p>
        <p><sup>No.&nbsp;&nbsp; 99=</sup><sup> S&Iacute;MBOLO = </sup><b><sup>ES</sup></b><sup>&nbsp; </sup><sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</sup><sup> Elemento</sup><sup>&nbsp;&nbsp; qu&iacute;mico </sup><b><sup>Einstenio.</sup></b><sup></sup></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IF">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IF,IFI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>6-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IFI">
      <td><div align="center">
        <h3><b>F=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Capacidad</u> maravillosa para actuar.</b></h3>
        <p>En Honor a<b>: Michael Faraday - 1791-1867.</b></p>
        <p>Capacidad El&eacute;ctrica<b> </b>s&iacute;mbolo<b> <span class="Estilo3">F</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp; </b>Unidad de<b> </b>medida <b>Faradio.</b></p>
        </div></td>
    </tr>
    <tr style="display:none" id="IG">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IG,IGI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>7-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IGI">
      <td><div align="center">
        <h3><b>G=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Magnetismo</u> que posees ante los dem&aacute;s.</b></h3>
        <p>En honor a: <b>Carl Friederich Gauss - 1777- 1855.</b></p>
        <p>Inducci&oacute;n&nbsp; magn&eacute;tica, s&iacute;mbolo Gs <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</b>Unidad de<b> </b>medida <b>Gauss</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IHD">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IHD,IHHI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>8-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IHHI">
      <td><div align="center">
        <h3><b>H=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Inducir</u></b> <b>a otros para tomar decisiones.</b></h3>
        <p>En honor a<b>: Joseph Henry - 1797 - 1878.</b></p>
        <p>Inductancia el&eacute;ctrica s&iacute;mbolo<b> </b><b class="Estilo3">H</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Unidad de medida <b>Henrio</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="II">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(II,III)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>9-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="III">
      <td><div align="center">
        <h3><b>I=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Huella</u></b><b>&nbsp;</b><b>que imprimes en lo que emprendes.</b></h3>
        <p>En honor a<b>:&nbsp; Johannes Gutenberg -1400- 1468</b></p>
        <p><span class="Estilo1">Imprime La Biblia su primer Libro<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>Invenci&oacute;n la Imprenta</span></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IJ">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IJ,IJI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>10-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IJI">
      <td><div align="center">
        <h3><b>J= </b><b><u></u></b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Trabajo</u></b> <b>actividad</b> <b>en tus acciones</b></h3>
        <p>En honor a<b>: James Prescott Joule - 1818-1889.</b></p>
        <p>Cantidad de calor y trabajo s&iacute;mbolo <b class="Estilo3">J</b><b> -</b> Unidad de<b> </b>medida Julio</p>
      </div></td>
    </tr>
    <tr style="display:none" id="IK">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IK,IKI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>11-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IKI">
      <td><div align="center">
        <h3><b>K=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Temperatura</u></b><b>&nbsp; especial equilibrio al actuar</b></h3>
        <p>En honor a<b>:&nbsp;&nbsp; William Thomson - Lord Kelvin- 1824- 1907.</b></p>
        <p>Temperatura termodin&aacute;mica <b>- </b>s&iacute;mbolo <b class="Estilo3">K</b> -&nbsp; Unidad de medida <b>Kelvin</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IL">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IL,ILI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>12-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ILI">
      <td><div align="center">
        <h3><b>L=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Transformaci&oacute;n</u></b> <b>luminosidad imaginaci&oacute;n</b></h3>
        <p>En honor a<b>: Louis y Auguste Lumi&egrave;re - 1862- 1954.</b></p>
        <p><span class="Estilo1">Con 24 im&aacute;genes crean las pel&iacute;culas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Inventan el&nbsp; Cine</span></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IM">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IM,IMI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>13-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IMI">
      <td valign="middle"><div align="center">
        <h3><b>M=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b><u>Abundancia</u></b><b> habilidad y generosidad</b></h3>
        <p>En honor a<b>: James Clerk Maxwell -1831-1879.</b></p>
        <p>Leyes campo electromagn&eacute;tico - s&iacute;mbolo <b class="Estilo3">M</b> -Unidad medida&nbsp; <b>Maxwell</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="IN">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IN,INI)" /></div></td>
      <td><div align="center">
        <h3><b>14-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="INI">
      <td><h3 align="center"><b>N=</b></h3></td>
      <td valign="top"><div align="center">
        <h3><b>Fuerza y tes&oacute;n</b><b> para producir y realizar</b></h3>
        <p>En honor a<b>:&nbsp; Isaac Newton Ayscough- 1642-1727.</b></p>
        <p>Ley gravitaci&oacute;n<b>, </b>telescopio<b>- </b>s&iacute;mbolo<b>&nbsp; </b><b class="Estilo3">N </b><b>- </b>Unidad de fuerza <b>Newton</b><b>.</b></p>
      </div></td>
    </tr>
    <tr style="display:none" id="INN">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(INN,INNI)" /></div></td>
      <td><div align="center">
        <h3><b>15-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="INNI">
      <td><h3 align="center"><b>&Ntilde;=</b></h3></td>
      <td><h3 align="center"><u>Especialidad</u><b> e importancia al relacionarse.</b></h3>
        <p align="center">En honor a<b>: Idioma Espa&ntilde;ol - cualidad del Alfabeto.</b></p>
      <p align="center"><span class="Estilo1">Determina palabras del Idioma.<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b>Especialidad</span></p></td>
    </tr>
    <tr style="display:none" id="IO">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IO,IOI)" /></div></td>
      <td><div align="center">
        <h3><b>16-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IOI">
      <td><h3 align="center"><b>O=</b></h3></td>
      <td><h3 align="center"><u>Resistencia</u><b> fortaleza al actuar y decidir.</b></h3>
        <p align="center">En honor a<b>: Georg Simon Ohm- 1789-1854</b></p>
      <p align="center">Resistencia el&eacute;ctrica<b> - </b>s&iacute;mbolo<b> </b><b class="Estilo3">OHM</b><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>Unidad de<b> </b>medida <b>Ohmio</b></p></td>
    </tr>
    <tr style="display:none" id="IP">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IP,IPI)" /></div></td>
      <td><div align="center">
        <h3><b>17-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IPI">
      <td><h3 align="center"><b>P=</b></h3></td>
      <td><h3 align="center"><b>&nbsp; </b><u>Presi&oacute;n</u><b>&nbsp; persistencia y tolerancia. </b></h3>
        <p align="center">En honor a<b>: Blaise Pascal- 1623- 1662&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">Presi&oacute;n uniforme<b> - </b>s&iacute;mbolo<b> </b><b class="Estilo3">Pa</b><b> - </b>Unidad de<b> </b>medida <b>Pascal</b></p></td>
    </tr>
    <tr style="display:none" id="IQD">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IQD,IQI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>18-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IQI">
      <td><h3 align="center"><b>Q=</b></h3></td>
      <td><h3 align="center"><u>Discreci&oacute;n</u><b>&nbsp;y gran prudencia para obrar.</b></h3>
        <p align="center">En honor a<b>: Max Planck- 1858- 1947&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">Cantidad m&iacute;nima de energ&iacute;a&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Medida <b>Quanto</b></p></td>
    </tr>
    <tr style="display:none" id="IR">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IR,IRI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>19-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IRI">
      <td><h3 align="center"><b>R=</b></h3></td>
      <td><h3 align="center"><b>&nbsp; </b><u>Radiaci&oacute;n</u><b> cualidad extensiva a los dem&aacute;s.</b></h3>
        <p align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>En honor a<b>: Pierre Curie- Marie Sklodoswka 1867-1934&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pareja que descubri&oacute; la radioactividad.&nbsp; Medida Curie -&nbsp; Radiactividad</p></td>
    </tr>
    <tr style="display:none" id="IS">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IS,ISI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>20-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ISI">
      <td><div align="center">
        <h3><b>S=</b></h3>
      </div></td>
      <td><h3 align="center"><b> </b><u>Conducir</u><b> facilidad para orientar a otros.</b></h3>
        <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En honor a<b>: S- Hermanos Siemens- 1816-..1904&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></p>
      <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conductancia el&eacute;ctrica - s&iacute;mbolo <b class="Estilo3">S</b>&nbsp; Unidad de medida <b>Siemens</b></p></td>
    </tr>
    <tr style="display:none" id="IT">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IT,ITI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>21-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="ITI">
      <td><div align="center">
        <h3><b>T=</b></h3>
      </div></td>
      <td><h3 align="center">Atracci&oacute;n<b> inter&eacute;s investigativo personal.</b></h3>
        <p align="center">En honor a<b>: Nikola Tesla - 1856-1943</b></p>
      <p align="center">Inducci&oacute;n magn&eacute;tica&nbsp; s&iacute;mbolo<b> </b><b class="Estilo3">T</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad de medida <b>Tesla</b></p></td>
    </tr>
    <tr style="display:none" id="IU">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IU,IUI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>22-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IUI">
      <td><div align="center">
        <h3><b>U=</b></h3>
      </div></td>
      <td><h3 align="center"><u>Cambio</u><b> cualidad para efectuar reacciones.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></h3>
        <p align="center">En honor a<b>: Johann Wilhelm Ritter. </b><b>1776-1810</b></p>
      <p align="center" class="Estilo1">Radiaci&oacute;n qu&iacute;mica&nbsp; luminosa invisible<b>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>Rayo Ultra violeta</p></td>
    </tr>
    <tr style="display:none" id="IVD">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IVD,IVI)" /></div></td>
      <td valign="top" ><div align="center">
        <h3><b>23-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IVI">
      <td><div align="center">
        <h3><b>V=</b></h3>
      </div></td>
      <td><h3 align="center"><u>Potencial</u><b>&nbsp; </b><b>facilidad para&nbsp; desarrollar habilidades.</b></h3>
        <p align="center">En honor a<b>: Alejandro Volta -1745-1827</b></p>
      <p align="center"> Fuerza electromotriz s&iacute;mbolo <b class="Estilo3">V</b>&nbsp;&nbsp;&nbsp;&nbsp; Unidad de medida <b>Voltio</b></p></td>
    </tr>
    <tr style="display:none" id="IW">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IW,IWI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>24-</b><b></b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IWI">
      <td><h3 align="center"><b>W=</b></h3></td>
      <td><h3 align="center"><u>Potencia</u><b> </b><b>poder para mandar e imponer.</b></h3>
        <p align="center">En honor a<b>: James Watt - 1736-1819</b></p>
      <p align="center">Flujo energ&eacute;tico y t&eacute;rmico -s&iacute;mbolo <b class="Estilo3">W</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Unidad de medida <b>Wat</b></p></td>
    </tr>
    <tr style="display:none" id="IX">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IX,IXI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>25-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IXI">
      <td><h3 align="center"><b>X=</b></h3></td>
      <td><h3 align="center">Reacci&oacute;n <b>facilidad para desentra&ntilde;ar positivamente.</b></h3>
        <p align="center">En honor a<b>:&nbsp; Wilhelm Conrad Roentgen-1845-1923</b></p>
      <p align="center" class="Estilo1">Descubri&oacute; los rayos&nbsp; <b>X</b> -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rayos X</p></td>
    </tr>
    <tr style="display:none" id="IY">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IY,IYI)" /></div></td>
      <td valign="top"><div align="center">
        <h3><b>26-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IYI">
      <td><div align="center">
        <h3><b>Y=</b></h3>
      </div></td>
      <td><h3 align="center"> <b><u>Interferencia</u></b><b></b><b> personalidad</b> <b>para inspirar e influir a otros.</b></h3>
        <p align="center">En honor a<b>: Young Thomas- 1773-1829</b></p>
      <p align="center" class="Estilo1">En &Oacute;ptica<b> - </b>fen&oacute;meno de la Interferencia de los rayos luminosos.</p></td>
    </tr>
    <tr style="display:none" id="IZ">
      <td><div align="center"><img src="/imagenes/cerrar.gif" width="21" height="21" onclick="mira(IZ,IZI)" /></div></td>
      <td><div align="center">
        <h3><b>27-</b></h3>
      </div></td>
    </tr>
    <tr style="display:none" id="IZI">
      <td><div align="center">
        <h3><b>Z=</b></h3>
      </div></td>
      <td valign="top"><div align="center">
        <h3><b> </b><u>Multiplicaci&oacute;n</u><b> </b><b>&nbsp;cualidad para colaborar y mejorar.</b></h3>
        <p>En honor a<b>: Vladimir Zworykin-1889-1982</b></p>
        <p class="Estilo1">Los tubos electr&oacute;nicos para la televisi&oacute;n creador del&nbsp; Iconoscopio.</p>
      </div></td>
    </tr>
</table>
  </p>
  <table border="8" align="center" cellpadding="1" cellspacing="3" bgcolor="#DBFEBC">
    <!--DWLayoutTable-->
    <tr>
      <td height="23" colspan="5" valign="top"><h3 align="center"><strong>Significado del N&uacute;mero personal</strong></h3></td>
    </tr>
	<tr bgcolor="<?php if($_GET['nper']==1){echo "#FF9900";} ?>">
      <td><strong>1</strong></td>
      <td><div align="center"><strong>L&iacute;der</strong></div></td>
      <td><div align="center"><strong>Jefe</strong></div></td>
      <td><div align="center"><strong>Carisma</strong></div></td>
      <td><div align="center"><strong>Mando</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==2){echo "#FF9900";} ?>">
      <td><strong>2</strong></td>
      <td><div align="center"><strong>Complemento</strong></div></td>
      <td><div align="center"><strong>Pareja</strong></div></td>
      <td><div align="center"><strong>Ambiguedad</strong></div></td>
      <td><div align="center"><strong>Apoyo</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==3){echo "#00CCFF";} ?>">
      <td><strong>3</strong></td>
      <td><div align="center"><strong>Estabilidad</strong></div></td>
      <td><div align="center"><strong>Comunicaci&oacute;n</strong></div></td>
      <td><div align="center"><strong>Alegr&iacute;a</strong></div></td>
      <td><div align="center"><strong>Sociabilidad</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==4){echo "#00CCFF";} ?>">
      <td><strong>4</strong></td>
      <td><div align="center"><strong>Poder</strong></div></td>
      <td><div align="center"><strong>Equlibrio</strong></div></td>
      <td><div align="center"><strong>Dominio</strong></div></td>
      <td><div align="center"><strong>Paz</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==5){echo "#00CCFF";} ?>">
      <td><strong>5</strong></td>
      <td><div align="center"><strong>Humanidad</strong></div></td>
      <td><div align="center"><strong>Utilidad</strong></div></td>
      <td><div align="center"><strong>Bienestar</strong></div></td>
      <td><div align="center"><strong>Pr&aacute;ctico</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==6){echo "#FF9900";} ?>">
      <td><strong>6</strong></td>
      <td><div align="center"><strong>Complejidad</strong></div></td>
      <td><div align="center"><strong>Amor</strong></div></td>
      <td><div align="center"><strong>Debilidad</strong></div></td>
      <td><div align="center"><strong>Sexualidad</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==7){echo "#FF9900";} ?>">
      <td><strong>7</strong></td>
      <td><div align="center"><strong>Intelectualidad</strong></div></td>
      <td><div align="center"><strong>Razon</strong></div></td>
      <td><div align="center"><strong>Idealismo</strong></div></td>
      <td><div align="center"><strong>Espiritualidad</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==8){echo "#FF9900";} ?>">
      <td><strong>8</strong></td>
      <td><div align="center"><strong>Ambici&oacute;n</strong></div></td>
      <td><div align="center"><strong>Comodidad</strong></div></td>
      <td><div align="center"><strong>Adaptabilidad</strong></div></td>
      <td><div align="center"><strong>Complaciente</strong></div></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nper']==9){echo "#FF9900";} ?>">
      <td><strong>9</strong></td>
      <td><div align="center"><strong>Gratitud</strong></div></td>
      <td><div align="center"><strong>Respeto</strong></div></td>
      <td><div align="center"><strong>Productividad</strong></div></td>
      <td><div align="center"><strong>Actividad</strong></div></td>
    </tr>
</table>
  <p>&nbsp;</p>
  <table width="409" border="8" align="center" cellspacing="3" bgcolor="#CCFFFF">
    <!--DWLayoutTable-->
    <tr>
      <td colspan="5" valign="top"><h3 align="center">Significado del N&uacute;mero de Misi&oacute;n y S&iacute;mbolos</h3></td>
    </tr>

    <tr bgcolor="<?php if($_GET['nmis']==1){echo "red";} ?>">
      <td width="9"><strong>1</strong></td>
      <td width="70"><div align="center"><strong>Activar</strong></div></td>
      <td width="75"><div align="center"><strong>Mover</strong></div></td>
      <td width="91"><div align="center"><strong>Conducir</strong></div></td>
      <td width="120"><strong>L&iacute;nea</strong></td>
    </tr>
	<tr bgcolor="<?php if($_GET['nmis']==2){echo "red";} ?>">
      <td><strong>2</strong></td>
      <td><div align="center"><strong>Combinar</strong></div></td>
      <td><div align="center"><strong>Agregar</strong></div></td>
      <td><div align="center"><strong>Depender</strong></div></td>
      <td><strong>Triangulo rectangulo </strong></td>
    </tr>
    <tr bgcolor="<?php if($_GET['nmis']==3){echo "red";} ?>">
      <td><strong>3</strong></td>
      <td><div align="center"><strong>Crear</strong></div></td>
      <td><div align="center"><strong>Unir</strong></div></td>
      <td><div align="center"><strong>Reproducir</strong></div></td>
      <td><strong>Triangulo Equilatero </strong></td>
    </tr>
    <tr bgcolor="<?php if($_GET['nmis']==4){echo "red";} ?>">
      <td><strong>4</strong></td>
      <td><div align="center"><strong>Mandar</strong></div></td>
      <td><div align="center"><strong>Ayudar</strong></div></td>
      <td><div align="center"><strong>Orientar</strong></div></td>
      <td><strong>Cruz</strong></td>
    </tr>
    <tr bgcolor="<?php if($_GET['nmis']==5){echo "red";} ?>">
      <td><strong>5</strong></td>
      <td><div align="center"><strong>Entender</strong></div></td>
      <td><div align="center"><strong>Aprender</strong></div></td>
      <td><div align="center"><strong>Producir</strong></div></td>
      <td><strong>Pent&aacute;gono</strong></td>
    </tr>
    <tr bgcolor="<?php if($_GET['nmis']==6){echo "red";} ?>">
      <td><strong>6</strong></td>
      <td><div align="center"><strong>Adaptar</strong></div></td>
      <td><div align="center"><strong>Acoger</strong></div></td>
      <td><div align="center"><strong>Disfrutar</strong></div></td>
      <td><strong>Hex&aacute;gono</strong></td>
    </tr>
    <tr bgcolor="<?php if($_GET['nmis']==7){echo "red";} ?>">
      <td><strong>7</strong></td>
      <td><div align="center"><strong>Intuir</strong></div></td>
      <td><div align="center"><strong>Ense&ntilde;ar</strong></div></td>
      <td><div align="center"><strong>Construir</strong></div></td>
      <td><strong>Pir&aacute;mide</strong></td>
    </tr>
    <tr bgcolor="<?php if($_GET['nmis']==8){echo "red";} ?>">
      <td><strong>8</strong></td>
      <td><div align="center"><strong>Asegurar</strong></div></td>
      <td><div align="center"><strong>Equilibrar</strong></div></td>
      <td><div align="center"><strong>Afirmar</strong></div></td>
      <td><strong>Cuadrado</strong></td>
    </tr>
	
    <tr bgcolor="<?php if($_GET['nmis']==9){echo "red";} ?>">
      <td><strong>9</strong></td>
      <td><div align="center"><strong>Realizar</strong></div></td>
      <td><div align="center"><strong>Agradecer</strong></div></td>
      <td><div align="center"><strong>Transformar</strong></div></td>
      <td><strong>C&iacute;rculo</strong></td>
    </tr>
</table>
  <p>&nbsp;</p>
<div align="left">  </div>
<div align="center">
  <script language="JavaScript" type="text/javascript">
	pasarDatos();
</script>
  <a href="metodo_nombre.htm">Quieres Otra Consulta ???</a></div>
    <!-- InstanceEndEditable -->
  <div id="menu_izq">
    <div id="menu_bas"> </div>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
