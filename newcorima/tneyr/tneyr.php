<?php 
include('palabra.php'); 
function elimina_acentos($cadena){
	$tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿ";
	$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuy";
	return(strtr($cadena,$tofind,$replac));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/base.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="description" content="Esta es sitio web para invitarte a recorrer el arcoiris de los conocimientos"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Resultado</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="keywords" -->
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="robots" -->
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="js" -->
<script language="javascript" src="../../Templates/corimadiv/js/corima.js"></script>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../../Templates/corimadiv/css/main.css" rel="stylesheet" type="text/css" />
<!-- InstanceParam name="href" type="text" value="corimadiv/css/main.css" -->
<link href="../../Templates/corimadiv/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
  
  <table class="banner">
    <tr>
      <td class="logo"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="116" height="169">
        <param name="movie" value="../swf/corimita.swf" />
        <param name="quality" value="high" />
        <embed src="../swf/corimita.swf" width="116" height="169" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ></embed>
      </object></td>
      <td align="center" valign="top" class="banImg"><img src="../imagenes/index/titulo-corima.jpg" height="118" /></td>
    </tr>
  </table>
  <div id="let"></div>
  <div id="clear_div"></div>
  <div id="barra_tit">
    <div id="tituloA">
      <h2><!-- InstanceBeginEditable name="Titulo" -->
      Resultado<!-- InstanceEndEditable --></h2>
    </div>
  </div>
  <div id="cuerpo">
    <div id="cuerpo_dr">
			<div id="lib_mnu">
			</div>
      <div id="menu_izq">
      <div id="menu_bas">
        </div>
				
        <div id="pub_zone">
          <table border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center"><span style="display:none;" id="EstadCodeComprove">687474703A2F2F7777772E666F726D6174696F6E636F2E636F6D2F2E6672</span><span id="EstadCode" style="font-size : 11px; font-family : arial; color:#9C9C9C;">courses: <a style="font-size : 11px; font-family : arial; color:#000000;"  href="http://www.formationco.com/" id="LinkKey0">.fr</a><a style="font-size : 11px; font-family : arial; color:#000000;"  href="http://www.omnibildung.de/" id="LinkKey1">.de</a><a style="font-size : 11px; font-family : arial; color:#000000;"  href="http://www.educalivre.com/" id="LinkKey2">.pt</a><a style="font-size : 11px; font-family : arial; color:#000000;"  href="http://www.coursenavi.com/" id="LinkKey3">.jp</a></span><span style="display:none;" id="ScriptCode"><img id='fwe_counter' src='../../tafft/arbol.htm' alt='Estadisticas y contadores web gratis' border='0' />
                <script src="http://www.estadisticasgratis.com/trace-ScriptContadorNE.php?page=59123&amp;digits=6"></script>
              </span></td>
            </tr>
          </table>
					<div align="center"><br />
				  </div>
		</div>
        <div id="mensaje">
  <marquee width=100% direction="up" scrolldelay="10" scrollamount="1" >
  Trata de adaptarte al sistema que te rodea, pero si no es adecuado a tu manera de pensar, eres t&uacute; quien debe trasladarse y buscar otro sistema al cual puedas ajustarte, no culpes a nadie por tus errores, eres t&uacute; quien elige y dirige suerte y vida. Con amor de Corima Lumen
  </marquee>
		</div>
      </div>
      <div id="contenido">
			<!-- InstanceBeginEditable name="Contenido" -->
<div align="center">
</div>

  <table align="center" class="tabla_base">
    <!--DWLayoutTable-->
    <tr>
      <td><div align="center"><a href="metodo_nombre.htm">Quieres Otra Consulta ???<br />
        <input type="button" name="Submit" value="Versi&oacute;n Imprimible " onclick="pasarDatos()" />
        </a></div></td>
      </tr>
  </table>
  <div align="center">Hola:
</div>
<table width="413" align="center" class="tabla_base">
  <!--DWLayoutTable-->
    <caption><?php echo $nom->palabra  ?></caption>
  <tr>
    <td><div align="center">Letras<br />
      <?php echo $nom->totLetras ?></div>    </td>
    <td>&oacute; Xinonos </td>
  </tr>
  <tr>
    <td><div align="center">Rayos<br />
      <?php echo count($nom->tRayos) ?></div>    </td>
    <td>Diferentes clases de letras sin importar la frecuencia con que se repiten.</td>
  </tr>
  <tr>
    <td colspan="9" ><div align="center">
          Cantidad de Rayos. (Conos de Luz)
          <br />
<object 
	data="../swf/estrella.swf" 
	type="application/x-shockwave-flash" 
	name="estrella" 
	id="estrella" 
	width="403" height="391">
	<param name="movie" value="../swf/estrella.swf" />
	<param name="quality" value="high"/>
	<param name="wmode" value="transparent" />
</object>
<br />
<input type="button" onclick="pasarDatos();" id="redibujar" value="redibujar estrella" /><br />
              <?php echo $nom->frase ?>
    </div>
    </td>
  </tr>
</table>

 <br />
 <div align="center">Los respectivos n&uacute;meros se obtiene remplazando <br />
   las letras por los valores de la tabla de abajo. </div>
 <table width="398" align="center" class="tabla_base_cyan">
  <!--DWLayoutTable-->

    <caption>Tus N&uacute;meros</caption>

  <tr>
    <td width="69"><div align="center">
      N&uacute;mero Personal
    </div></td>
    <td width="73"><div align="center">
      N&uacute;mero de Misi&oacute;n
    </div></td>
    <td width="69"><div align="center">
      N&uacute;mero del Dia
    </div></td>
    <td width="70"><div align="center">
      N&uacute;mero de Mes
    </div></td>
    <td width="91"><div align="center">
      N&uacute;mero de la Ciudad
    </div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $nom->sumLetras ?></div></td>
    <td><div align="center"><?php echo $nMision->sumaNum ?></div></td>
    <td><div align="center"><?php echo $totdia->sumaNum ?></div></td>
    <td><div align="center"><?php echo $totmes->sumaNum ?></div></td>
    <td><div align="center"><?php echo $ciudad->sumLetras  ?></div></td>
  </tr>
</table>
 <br />
 <table width="463" align="center" class="tabla_base_warm">
   <!--DWLayoutTable-->
     <caption>TABLA NUM&Eacute;RICA Y VIBRACION DE LOS COLORES </caption>
   <tr>
     <td>1</td>
     <td>A</td>
     <td>J</td>
     <td>R</td>
     <td ><div align="center">ROJO</div></td>
     <td>Movimiento, Actividad, Viveza, Poder, Pasi&oacute;n, Fuego.</td>
   </tr>
   <tr>
     <td>2</td>
     <td>B</td>
     <td>K</td>
     <td>S</td>
     <td><div align="center">NARANJA</div></td>
     <td>Exitaci&oacute;n, Rapidez, Ardor, Vistosidad, Originalidad. </td>
   </tr>
   <tr>
     <td>3</td>
     <td>C</td>
     <td>L</td>
     <td>T</td>
     <td><div align="center">AMARILLO</div></td>
     <td valign="top">Esplendor, Acci&oacute;n, Sol, Ambici&oacute;n, Cambio, Velocidad. </td>
   </tr>
   <tr>
     <td>4</td>
     <td>D</td>
     <td>M</td>
     <td>U</td>
     <td><div align="center">VERDE</div></td>
     <td>Frescura, Juventud, Primavera, Mansedumbre, Descanso.</td>
   </tr>
   <tr>
     <td>5</td>
     <td>E</td>
     <td>N     </td>
     <td>V</td>
     <td><div align="center">AZUL</div></td>
     <td>Recogimiento, Frialdad, Sabiduria, Equilibrio. </td>
   </tr>
   <tr>
     <td>6</td>
     <td>F</td>
     <td>&Ntilde;</td>
     <td>W</td>
     <td><div align="center">A&Ntilde;IL</div></td>
     <td valign="top">Profundidad, Seriedad, Realismo, Discreci&oacute;n.</td>
   </tr>
   <tr>
     <td>7</td>
     <td>G</td>
     <td>O</td>
     <td>X</td>
     <td><div align="center">VIOLETA</div></td>
     <td>Misticismo, Misterio, Tristeza, Sencillez.</td>
   </tr>
   <tr>
     <td>8</td>
     <td>H</td>
     <td>P</td>
     <td>Y</td>
     <td><div align="center">ULTRAVIOLETA</div></td>
     <td>Transformaci&oacute;n, Influecia, Mejor&iacute;a, Evoluci&oacute;n. </td>
   </tr>
   <tr>
     <td>9</td>
     <td>I</td>
     <td>Q</td>
     <td>Z</td>
     <td><div align="center">INFRARROJO</div></td>
     <td>Calor, Intuici&oacute;n, Multiplicaci&oacute;n, Respeto, Habilidad. </td>
   </tr>
 </table>
   <h5 align="center">Para saber  que significa cada letra, solo hazle click al boton de la letra. </h5>
   <h5 align="center">Por ejemplo: A= intesidad Electrica, una persona con muchas &quot;A&quot; es una persona muy intensa y asi con todo. </h5>
   <table align="center" class="tabla_base">
     <!--DWLayoutTable-->
     <tr>
       <td align="center" >&nbsp;</td>
       <td align="center" > Letra</td>
       <td align="center" >  Xinonos</td>
       <td align="center" > Letra</td>
       <td align="center" >  Xinonos</td>
       <td align="center" > Letra</td>
       <td>Xinonos</td>
     </tr>
     <tr>
       <td align="center" >1</td>
       <td align="center" >A</td>
       <td align="center" ><?php if($nom->rayos["A"]){echo $nom->rayos["A"];}?></td>
       <td align="center" > J</td>
       <td align="center" ><?php if($nom->rayos["J"]){echo $nom->rayos["J"];}?></td>
       <td align="center" > R</td>
       <td align="center" ><?php if($nom->rayos["R"]){echo $nom->rayos["R"];}?></td>
     </tr>
     <tr>
       <td align="center" >2</td>
       <td align="center" >B</td>
       <td align="center" ><?php if($nom->rayos["B"]){echo $nom->rayos["B"];}?>
         <div align="center"></div></td>
       <td align="center" > K</td>
       <td align="center" ><?php if($nom->rayos["K"]){echo $nom->rayos["K"];}?></td>
       <td align="center" > S</td>
       <td align="center" ><?php if($nom->rayos["S"]){echo $nom->rayos["S"];}?></td>
     </tr>
     <tr>
       <td align="center" >3</td>
       <td align="center" >C</td>
       <td align="center" ><?php if($nom->rayos["C"]){echo $nom->rayos["C"];}?></td>
       <td align="center" > L</td>
       <td align="center" ><?php if($nom->rayos["L"]){echo $nom->rayos["L"];}?></td>
       <td align="center" > T</td>
       <td align="center" ><?php if($nom->rayos["T"]){echo $nom->rayos["T"];}?></td>
     </tr>
     <tr>
       <td align="center" >4</td>
       <td align="center" >D</td>
       <td align="center" ><?php if($nom->rayos["D"]){echo $nom->rayos["D"];}?></td>
       <td align="center" > M</td>
       <td align="center" ><?php if($nom->rayos["M"]){echo $nom->rayos["M"];}?></td>
       <td align="center" > U</td>
       <td align="center" ><?php if($nom->rayos["U"]){echo $nom->rayos["U"];}?></td>
     </tr>
     <tr>
       <td align="center" >5</td>
       <td align="center" >E</td>
       <td align="center" ><?php if($nom->rayos["E"]){echo $nom->rayos["E"];}?></td>
       <td align="center" >N</td>
       <td align="center" ><?php if($nom->rayos["N"]){echo $nom->rayos["N"];}?></td>
       <td align="center" > V</td>
       <td align="center" ><?php if($nom->rayos["V"]){echo $nom->rayos["V"];}?></td>
     </tr>
     <tr>
       <td align="center" >6</td>
       <td align="center" >F</td>
       <td align="center" ><?php if($nom->rayos["F"]!=""){echo $nom->rayos["F"];}?></td>
       <td align="center" >&Ntilde;</td>
       <td align="center" ><?php if($nom->rayos["NN"]){echo $nom->rayos["NN"];}?></td>
       <td align="center" > W</td>
       <td align="center" ><?php if($nom->rayos["W"]){echo $nom->rayos["W"];}?></td>
     </tr>
     <tr>
       <td align="center" >7</td>
       <td align="center" >G</td>
       <td align="center" ><?php if($nom->rayos["G"]!=""){echo $nom->rayos["G"];}?></td>
       <td align="center" >O</td>
       <td align="center" ><?php if($nom->rayos["O"]){echo $nom->rayos["O"];}?></td>
       <td align="center" >X</td>
       <td align="center" ><?php if($nom->rayos["X"]){echo $nom->rayos["X"];}?></td>
     </tr>
     <tr>
       <td align="center" >8</td>
       <td align="center" >H</td>
       <td align="center" ><?php if($nom->rayos["H"]!=""){echo $nom->rayos["H"];}?></td>
       <td align="center" > P</td>
       <td align="center" ><?php if($nom->rayos["P"]){echo $nom->rayos["P"];}?></td>
       <td align="center" > Y</td>
       <td align="center" ><?php if($nom->rayos["Y"]){echo $nom->rayos["Y"];}?></td>
     </tr>
     <tr>
       <td align="center" >9</td>
       <td align="center" >I</td>
       <td align="center" ><?php if($nom->rayos["I"]!=""){echo $nom->rayos["I"];}?></td>
       <td align="center" > Q</td>
       <td align="center" ><?php if($nom->rayos["Q"]){echo $nom->rayos["Q"];}?></td>
       <td align="center" > Z</td>
       <td align="center" ><?php if($nom->rayos["Z"]){echo $nom->rayos["Z"];}?></td>
     </tr>
   </table>
   <br />
   <table align="center" class="tabla_base">

      <caption>Significado del N&uacute;mero personal</caption>

    
      <tr bgcolor="<?php if($nom->sumLetras==1){echo "#FF9900";} ?>">
      <td>1</td>
      <td><div align="center">L&iacute;der</div></td>
      <td><div align="center">Jefe</div></td>
      <td><div align="center">Carisma</div></td>
      <td><div align="center">Mando</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==2){echo "#FF9900";} ?>">
      <td>2</td>
      <td><div align="center">Complemento</div></td>
      <td><div align="center">Pareja</div></td>
      <td><div align="center">Ambiguedad</div></td>
      <td><div align="center">Apoyo</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==3){echo "#00CCFF";} ?>">
      <td>3</td>
      <td><div align="center">Estabilidad</div></td>
      <td><div align="center">Comunicaci&oacute;n</div></td>
      <td><div align="center">Alegr&iacute;a</div></td>
      <td><div align="center">Sociabilidad</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==4){echo "#00CCFF";} ?>">
      <td>4</td>
      <td><div align="center">Poder</div></td>
      <td><div align="center">Equlibrio</div></td>
      <td><div align="center">Dominio</div></td>
      <td><div align="center">Paz</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==5){echo "#00CCFF";} ?>">
      <td>5</td>
      <td><div align="center">Humanidad</div></td>
      <td><div align="center">Utilidad</div></td>
      <td><div align="center">Bienestar</div></td>
      <td><div align="center">Pr&aacute;ctico</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==6){echo "#FF9900";} ?>">
      <td>6</td>
      <td><div align="center">Complejidad</div></td>
      <td><div align="center">Amor</div></td>
      <td><div align="center">Debilidad</div></td>
      <td><div align="center">Sexualidad</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==7){echo "#FF9900";} ?>">
      <td>7</td>
      <td><div align="center">Intelectualidad</div></td>
      <td><div align="center">Razon</div></td>
      <td><div align="center">Idealismo</div></td>
      <td><div align="center">Espiritualidad</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==8){echo "#FF9900";} ?>">
      <td>8</td>
      <td><div align="center">Ambici&oacute;n</div></td>
      <td><div align="center">Comodidad</div></td>
      <td><div align="center">Adaptabilidad</div></td>
      <td><div align="center">Complaciente</div></td>
    </tr>
	
    <tr bgcolor="<?php if($nom->sumLetras==9){echo "#FF9900";} ?>">
      <td>9</td>
      <td><div align="center">Gratitud</div></td>
      <td><div align="center">Respeto</div></td>
      <td><div align="center">Productividad</div></td>
      <td><div align="center">Actividad</div></td>
    </tr>
</table>
   &nbsp;
   <table align="center" class="tabla_base">

      <caption>Significado del N&uacute;mero de Misi&oacute;n y S&iacute;mbolos</caption>


    <tr bgcolor="<?php if($nMision->sumaNum==1){echo "red";} ?>">
      <td>1</td>
      <td width="70"><div align="center">Activar</div></td>
      <td width="75"><div align="center">Mover</div></td>
      <td width="91"><div align="center">Conducir</div></td>
      <td width="120">L&iacute;nea</td>
    </tr>
	<tr bgcolor="<?php if($nMision->sumaNum==2){echo "red";} ?>">
      <td>2</td>
      <td><div align="center">Combinar</div></td>
      <td><div align="center">Agregar</div></td>
      <td><div align="center">Depender</div></td>
      <td>Triangulo rectangulo </td>
    </tr>
    <tr bgcolor="<?php if($nMision->sumaNum==3){echo "red";} ?>">
      <td>3</td>
      <td><div align="center">Crear</div></td>
      <td><div align="center">Unir</div></td>
      <td><div align="center">Reproducir</div></td>
      <td>Triangulo Equilatero </td>
    </tr>
    <tr bgcolor="<?php if($nMision->sumaNum==4){echo "red";} ?>">
      <td>4</td>
      <td><div align="center">Mandar</div></td>
      <td><div align="center">Ayudar</div></td>
      <td><div align="center">Orientar</div></td>
      <td>Cruz</td>
    </tr>
    <tr bgcolor="<?php if($nMision->sumaNum==5){echo "red";} ?>">
      <td>5</td>
      <td><div align="center">Entender</div></td>
      <td><div align="center">Aprender</div></td>
      <td><div align="center">Producir</div></td>
      <td>Pent&aacute;gono</td>
    </tr>
    <tr bgcolor="<?php if($nMision->sumaNum==6){echo "red";} ?>">
      <td>6</td>
      <td><div align="center">Adaptar</div></td>
      <td><div align="center">Acoger</div></td>
      <td><div align="center">Disfrutar</div></td>
      <td>Hex&aacute;gono</td>
    </tr>
    <tr bgcolor="<?php if($nMision->sumaNum==7){echo "red";} ?>">
      <td>7</td>
      <td><div align="center">Intuir</div></td>
      <td><div align="center">Ense&ntilde;ar</div></td>
      <td><div align="center">Construir</div></td>
      <td>Pir&aacute;mide</td>
    </tr>
    <tr bgcolor="<?php if($nMision->sumaNum==8){echo "red";} ?>">
      <td>8</td>
      <td><div align="center">Asegurar</div></td>
      <td><div align="center">Equilibrar</div></td>
      <td><div align="center">Afirmar</div></td>
      <td>Cuadrado</td>
    </tr>
	
    <tr bgcolor="<?php if($nMision->sumaNum==9){echo "red";} ?>">
      <td>9</td>
      <td><div align="center">Realizar</div></td>
      <td><div align="center">Agradecer</div></td>
      <td><div align="center">Transformar</div></td>
      <td>C&iacute;rculo</td>
    </tr>
</table>
   &nbsp;
   <div align="left">  </div>
<div align="center">
  <a href="metodo_nombre.htm">Quieres Otra Consulta ???</a></div>
<script language="JavaScript" type="text/javascript">
function imprimir_var(){
	window.open("print_tneyr.php"+document.location.search);
	return;
}

function pasarDatos(){
	estrellaNom=document.estrella || document.getElementById( 'estrella' );
	estrellaNom.SetVariable("A.num.text", <?php echo $nom->rayos['A']; ?>);
	estrellaNom.SetVariable("B.num.text", <?php echo $nom->rayos['B']; ?>);
	estrellaNom.SetVariable("C.num.text", <?php echo $nom->rayos['C']; ?>);
	estrellaNom.SetVariable("D.num.text", <?php echo $nom->rayos['D']; ?>);
	estrellaNom.SetVariable("E.num.text", <?php echo $nom->rayos['E']; ?>);
	estrellaNom.SetVariable("F.num.text", <?php echo $nom->rayos['F']; ?>);
	estrellaNom.SetVariable("G.num.text", <?php echo $nom->rayos['G']; ?>);
	estrellaNom.SetVariable("H.num.text", <?php echo $nom->rayos['H']; ?>);
	estrellaNom.SetVariable("I.num.text", <?php echo $nom->rayos['I']; ?>);
	estrellaNom.SetVariable("J.num.text", <?php echo $nom->rayos['J']; ?>);
	estrellaNom.SetVariable("K.num.text", <?php echo $nom->rayos['K']; ?>);
	estrellaNom.SetVariable("L.num.text", <?php echo $nom->rayos['L']; ?>);
	estrellaNom.SetVariable("M.num.text", <?php echo $nom->rayos['M']; ?>);
	estrellaNom.SetVariable("N.num.text", <?php echo $nom->rayos['N']; ?>);
	estrellaNom.SetVariable("NN.num.text", <?php echo $nom->rayos['NN']; ?>);
	estrellaNom.SetVariable("O.num.text", <?php echo $nom->rayos['O']; ?>);
	estrellaNom.SetVariable("P.num.text", <?php echo $nom->rayos['P']; ?>);
	estrellaNom.SetVariable("Q.num.text", <?php echo $nom->rayos['Q']; ?>);
	estrellaNom.SetVariable("R.num.text", <?php echo $nom->rayos['R']; ?>);
	estrellaNom.SetVariable("S.num.text", <?php echo $nom->rayos['S']; ?>);
	estrellaNom.SetVariable("T.num.text", <?php echo $nom->rayos['T']; ?>);
	estrellaNom.SetVariable("U.num.text", <?php echo $nom->rayos['U']; ?>);
	estrellaNom.SetVariable("V.num.text", <?php echo $nom->rayos['V']; ?>);
	estrellaNom.SetVariable("W.num.text", <?php echo $nom->rayos['W']; ?>);
	estrellaNom.SetVariable("X.num.text", <?php echo $nom->rayos['X']; ?>);
	estrellaNom.SetVariable("Y.num.text", <?php echo $nom->rayos['Y']; ?>);
	estrellaNom.SetVariable("Z.num.text", <?php echo $nom->rayos['Z']; ?>);
return;
}
rec=document.getElementById("redibujar");
setTimeout("rec.click()",500);

</script>

    <!-- InstanceEndEditable -->	  </div>
      <div id="clear_div"></div>
    </div>
  </div>
  <div id="pie">
    <div id="infomail">Responsable del WEB site
    <a href="mailto:danielsilva25@hotmail.com" >Daniel Silva</a>
	</div>
    <div id="google">
			  <form method="get" action="http://www.google.com.co/custom" target="_top">
<a href="http://www.google.com/"> <img src="http://www.google.com/logos/Logo_25gry.gif" border="0" alt="Google" align="middle"></a>
              <input type="text" name="q" size="31" maxlength="255" value="">
              <input type="submit" name="sa" value="B&uacute;squeda">
              <input type="hidden" name="client" value="pub-9086549455462333">
              <input type="hidden" name="forid" value="1">
              <input type="hidden" name="ie" value="ISO-8859-1">
              <input type="hidden" name="oe" value="ISO-8859-1">
              <input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;">
              <input type="hidden" name="hl" value="es">
      </form>
	</div>
  </div>
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-398076-1";
urchinTracker();
</script>
</body>
<!-- InstanceEnd --></html>