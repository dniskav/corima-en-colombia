<?php
function Dot2LongIP ($IPaddr)
{
    if ($IPaddr == "") {
        return 0;
    } else {
        $ips = split ("\.", "$IPaddr");
        return ($ips[3] + $ips[2] * 256 + $ips[1] * 256 * 256 + $ips[0] * 256 * 256 * 256);
    }
}

function leeIP($archivo,$largo,$ipcliente){
   $i=0;
   $fd = fopen ($archivo, "r");
   while (!feof($fd)){
	   $data = fgetcsv ($fd, 100);
	   if($ipcliente<$data[1]){
            break;
	   }
   }
   fclose ($fd);
   return $data;
}
?>

<style type="text/css">
<!--
body {
	background-color: transparent;
}
.Estilo2 {
	font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFF00;
}
-->
</style>
<?php
	$ip=$REMOTE_ADDR;
	$numero=Dot2LongIP($ip);
	$tuIP=leeIP("ipdatabase.csv",65,$numero);
	
?></p>
<div class="Estilo2">
  <p align="center">Bienvenida Gente  de: <img src="http://ip-to-country.webhosting.info/flag/?type=3&cc2=<?php echo $tuIP[2];?>"> <?php echo $tuIP[4];?></p>
</div>
