<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include('palabra.php'); 
function elimina_acentos($cadena){
	$tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿ";
	$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuy";
	return(strtr($cadena,$tofind,$replac));
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<p>

Tus N&uacute;meros
Los respectivos n&uacute;meros se obtiene remplazando las letras por los valores de la tabla de abajo.</p>
<table align="center">
  <tr>
    <td>N&uacute;mero Personal</td>
    <td>N&uacute;mero de Misi&oacute;n</td>
    <td>N&uacute;mero del Dia</td>
    <td>N&uacute;mero de Mes</td>
    <td>N&uacute;mero de la Ciudad</td>
  </tr>
  <tr>
    <td><?php echo $nom->sumLetras ?></td>
    <td><?php echo $nMision->sumaNum ?></td>
    <td><?php echo $totdia->sumaNum ?></td>
    <td><?php echo $totmes->sumaNum ?></td>
    <td><?php echo $ciudad->sumLetras  ?></td>
  </tr>
</table>
<p>&nbsp; </p>
</body>
</html>
