var txt="   Corima en Colombia   ";
var refresco=null;
var Tletras=new Array();
var capaAnterior;
var d, s, diasXmes=0;
var meses= new Array();
var capaAnterior;
// ancho
var marqueewidth=150
// alto
var marqueeheight=80
// velocidad
var speed=1
// contenido
var marqueecontents='<font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Trata de adaptarte al sistema que te rodea, pero si no es adecuado a tu manera de pensar, eres t&uacute; quien debe trasladarse y buscar otro sistema al cual puedas ajustarte, no culpes a nadie por tus errores, eres t&uacute; quien elige y dirige suerte y vida. Con amor de </font><font color="#FF0000" face="Arial, Helvetica, sans-serif">Corima Lumen</font>'

//----------------------consulta a jesus----------------------------------------

function CnstryMatrx(camino,cantidad,ext)
{
  cartas=new Array();
  for(i=1;i<cantidad;i++){
  	cartas[i]=camino+i+ext;
  }
  return cartas;
}

function cjesus(){
	cjesus_Imagenes=CnstryMatrx("../imagenes/cjesus/",54,".jpg");
	LanzaCarta('cjesus1',cjesus_Imagenes);
	LanzaCarta('cjesus2',cjesus_Imagenes);
	LanzaCarta('cjesus3',cjesus_Imagenes);
}

//------------------------------------------------------------------------------
//-------------------------generales--------------------------------------------
	function LanzaCarta(id,baraja){
	aleatorio=Math.floor(Math.random() * baraja.length);
	dato = baraja[aleatorio];
	if(baraja[aleatorio]!=null){
		document.getElementById(id).src=dato;
		baraja[aleatorio]=null;
	}else{
		LanzaCarta(id,baraja);
	}
}
function carga_menu(){
cadena='<ul>';
cadena+='  <li><a href=\"http://miarroba.com/libros/leer.php?id=144582\">Lee mi libro de visitas </a></li>';
cadena+='  <li><a href=\"http://miarroba.com/libros/firmar.php?id=144582\">Firma mi libro de visitas</a></li>';
cadena+='</ul>';
cadena+='<br />';
cadena+='<ul>';
cadena+='  <li><a href=\"../cjesus/cjesus.htm\">Consulta a Jes&uacute;s</a></li>';
cadena+='  <li><a href=\"../fcol/fcol.htm\">F&aacute;bulas de Colombia</a></li>';
cadena+='  <li><a href=\"../tneyr/nombre.html\">Metodo Corima</a></li>';
cadena+='  <li><a href=\"../taff/arbol.html\">Arbol</a></li>';
cadena+='  <li><a href=\"../taff/florero.html\">Flor</a></li>';
cadena+='  <li><a href=\"../taff/fruto.html\">Fruto</a></li>';
cadena+='  <li><a href=\"../ep/ep.html\" >Estrellas Peque&ntilde;as</a></li>';
cadena+='  <li><a href=\"../ntradame/ntradame-INTRO.html\">Nostradamus</a></li>';
cadena+='  <li><a href=\"../rsol/la_ruta_del_sol.html\">La Ruta del Sol</a></li>';
cadena+='  <li><a href=\"../fcor/fcor.html\">Fabula de Corima</a></li>';
cadena+='  <li><a href=\"../pys/pys.html\">Productos y Servicios</a></li>';
cadena+='  <li><a href=\"../mc/mc.html\">Mensajeros Celestiales</a></li>';
cadena+='  <li><a href=\"../ludo/">Juguemos</a></li>';
cadena+='  <li><a href=\"../articulos/Articulos.html\">Articulos</a></li>';
cadena+='  <li><a href=\"http://groups.msn.com/estrellashumanas\">Estrellas Humanas</a></li>';/*
cadena+='  <li><a href=\"../tools/tools.html\">Herramientas</a></li>';*/
cadena+='  <li><a href=\"../plantasM/plantasm.html\">Plantas Milagrosas </a></li>';
cadena+='  <li><a href=\"../adfechas/adfechas.html\">Adorables Fechas </a></li>';
cadena+='  <li><a href=\"../videos/videos.html\">Videos</a></li>';
cadena+='</ul>';
cadena+='<br />';
cadena+='<ul>';
cadena+='  <li><a href=\"mailto:corima937@hotmail.com\">Escribele a Corima</a></li>';
cadena+='  <li><a href=\"http://corimatecuenta.blogspot.com/\">Lee mi blog</a></li>';
cadena+='</ul>';
	document.getElementById('menu_bas').innerHTML=cadena;	
}
//-------------------------------------------------------------------------------

//-------------------------------juegos--------------------------------------------
//---------------------------amo el amazonas---------------------------------------
function imprimir_var(){
	window.open("print_ama.html"+document.location.search);
	return;
}
//----------------------------------------------------------------------------------

//---------------------------------------nostradamus--------------------------------
function ntradame(){
	ntradame_Imagenes=CnstryMatrx("../imagenes/ntradame/ntrdm",36,".gif");
	for(i=1;i<=22;i++){
		LanzaCarta('ntradame'+i,ntradame_Imagenes);
	}
}

//----------------------------------------------------------------------------------
function diasx(){
	resultado.value=restaFecha(dIni.value,mIni.value,aIni.value,dFin.value,mFin.value,aFin.value);
	numer='t'+nueve.value;
	numer=eval(numer);
	numDia(numer);
}
function numDia(capa){
	if(capaAnterior){
		capaAnterior.style.display="none";
	}
	capa.style.display="";
	capaAnterior=capa;
}


meses[0] = "12";
meses[1] = "enero 31 1";
meses[2] = "febrero 28 2";
meses[3] = "marzo 31 3";
meses[4] = "abril 30 4";
meses[5] = "mayo 31 5";
meses[6] = "junio 30 6";
meses[7] = "julio 31 7";
meses[8] = "agosto 31 8";
meses[9] = "septiembre 30 9";
meses[10] = "octubre 31 10";
meses[11] = "noviembre 30 11";
meses[12] = "diciembre 31 12";
	
var bisiestos= new Array();
var j=0;
for (i=1900;i<=2050;i+=4){
	bisiestos[j]=i;
	j+=1;
}

function restaFecha(diaIni, mesIni, annoIni, diaFin, mesFin, annoFin){
var totalDias=0,diaMes=0;
	diaIni=parseInt(diaIni);
	mesIni=parseInt(mesIni);
	annoIni=parseInt(annoIni);
	diaFin=parseInt(diaFin);
	mesFin=parseInt(mesFin);
	annoFin=parseInt(annoFin);
	diaMes=diaIni;
	cuentaMes=mesIni;
	mesActual=meses[cuentaMes].split(" ");
	
	do{
		for(i=0;i<=37;i++){
			if(annoIni==bisiestos[i]){
				meses[2] = "febrero 29 2";
				break;
			}else{
				meses[2] = "febrero 28 2";
			}
		}
		while(cuentaMes<=12){
			while(diaMes<=mesActual[1]){
				if(diaMes>=diaFin && cuentaMes>=mesFin && annoIni>=annoFin){
					nueve.value=sumanum(totalDias);
					return totalDias;
				}
				totalDias+=1;
				diaMes+=1;
			}
			diaMes=1;
			cuentaMes+=1;
			if(mesActual[2]<=12){
				if(cuentaMes<=12){
					mesActual=meses[cuentaMes].split(" ");
				}
			}
		}
		cuentaMes=1;
		mesActual=meses[cuentaMes].split(" ");
		annoIni+=1;
	}while(annoIni<=annoFin)
}

function sumanum(numeros){
	var suma=numeros, j=0;

	while(suma>9){
		base=0;
		suma= new String(suma);

		while(suma.charAt(j)){
			base+=parseInt(suma.charAt(j));
			j+=1;
		}
		suma=base;
		j=0;
	}
	return suma;
}
	

function arbol(capa){
	if(capaAnterior){
		capaAnterior.style.display="none";
	}
	capa.style.display="";
	capaAnterior=capa;
}


function musica_page(){
	musica=window.open("musica.htm","musica", "directories=no,  menubar=no,status=no,toolbar=no,location=no,scrollbars=no,fullscreen=no,height=162,width=118");
	musica.focus();
	
}

fch = new Date();
elMes = fch.getMonth()+1;
elDia = fch.getDate();

function frasearbol(frase){
var arboles=new Array()

arboles[1]="1 -	Árbol de Manzana";
arboles[2]="2 -	Árbol del Cacao";
arboles[3]="3 -	Árbol del Ciprés";
arboles[4]="4 -	Árbol del Almendro";
arboles[5]="5 -	Árbol del Cedro";
arboles[6]="6 -	Árbol del Durazno";
arboles[7]="7 -	Árbol Jazmín del Cabo";
arboles[8]="8 -	Árbol del Nogal";
arboles[9]="9 -	Árbol de la Acacia";
arboles[10]="10 -	Árbol de Pino";
arboles[11]="11 -	Árbol del Olivo";
arboles[12]="12 -	Árbol del Caucho";
arboles[13]="13 -	Árbol del Ciruelo";
arboles[14]="14 -	Árbol del Sauce";
arboles[15]="15 -	Árbol de Alcaparro";
arboles[16]="16 -	Árbol de Roble";
arboles[17]="17 -	Árbol del Cerezo";
arboles[18]="18 -	Árbol de la Guayaba";
arboles[19]="19 -	Árbol de Sauco";
arboles[20]="20 -	Árbol de Madroño";
arboles[21]="21 -	Árbol de Zapote";
arboles[22]="22 -	Árbol de Aguacate";
arboles[23]="23 -	Árbol de la Guama";
arboles[24]="24 -	Árbol del Guayacán";
arboles[25]="25 -	Árbol de Lima";
arboles[26]="26 -	Árbol del Eucalipto";
arboles[27]="27 -	Árbol del Limón";
arboles[28]="28 -	Árbol de Naranja";
arboles[29]="29 -	Árbol del Mango";
arboles[30]="30 -	Árbol de Mandarina";
arboles[31]="31 -	Árbol de Breva";

document.write(" "+arboles[frase]+" ")

return;
}
function frasefruto(frase){
var frutos=new Array()

frutos[1]="1º =	Enero las uvas";
frutos[2]="2º =	Febrero el banano";
frutos[3]="3º =	Marzo las fresas";
frutos[4]="4º =	Abril las moras";
frutos[5]="5º =	Mayo la guanábana";
frutos[6]="6º =	Junio la pera";
frutos[7]="7º =	Julio la sandia";
frutos[8]="8º =	Agosto el lulo";
frutos[9]="9º =	Septiembre el coco";
frutos[10]="10º =	Octubre la piña";
frutos[11]="11º =	Noviembre el Kiwi";
frutos[12]="12º = Diciembre  las cerezas";

document.write(" "+frutos[frase]+" ")

return;
}

function mira(objeto,proximo){
	if(objeto.style.display=="none"){
		objeto.style.display="";
		proximo.style.display="";
		return;
	}else{
		objeto.style.display="none";
		proximo.style.display="none";
	return;
	}
}


function numerology(cadena){
	control=cadena.length
	cadena=cadena.toLowerCase()
	var total=0;
	corrije=-1
	for(i=-1;i<control;i++){
		opc=cadena.charAt(i+1);
		switch(opc){
		
			case "&aacute;":
				total=total+7;
				break;
			case "a":
				total=total+1;
				break;
			case "j":
				total=total+1;
				break;
			case "r":
				total=total+1;
				break;
				
			case "b":
				total=total+2;
				break;
			case "k":
				total=total+2;
				break;
			case "s":
				total=total+2;
				break;
				
			case "c":
				total=total+3;
				break;
			case "l":
				total=total+3;
				break;
			case "t":
				total=total+3;
				break;

			case "d":
				total=total+4;
				break;
			case "m":
				total=total+4;
				break;
			case "u":
				total=total+4;
				break;
			case "&uacute;":
				total=total+7;
				break;

			case "e":
				total=total+5;
				break;
			case "&eacute;":
				total=total+7;
				break;
			case "n":
				total=total+5;
				break;
			case "v":
				total=total+5;
				break;

			case "f":
				total=total+6;
				break;
			case "ñ":
				total=total+6;
				break;
			case "w":
				total=total+6;
				break;

			case "g":
				total=total+7;
				break;
			case "&oacute;":
				total=total+7;
				break;
			case "o":
				total=total+7;
				break;
			case "x":
				total=total+7;
				break;

			case "h":
				total=total+8;
				break;
			case "p":
				total=total+8;
				break;
			case "y":
				total=total+8;
				break;

			case "i":
				total=total+9;
				break;
			case "&iacute;":
				total=total+9;
				break;
			case "q":
				total=total+9;
				break;
			case "z":
				total=total+9;
				break;
			}
		}
		total=numeronueve(total);
		return total;
}

function numeronueve(cadenan){
	var control="";
	while(cadenan>9){
	control= new String(cadenan);
	alfa=control;	
	control=control.length;
	dato=0;
	acum=0;
		for(i=0;i<control;i++){
			dato=parseInt(alfa.charAt(i));
			acum=acum+dato;
			}
		cadenan=acum;
		}
	return cadenan;
}

function flor(){
	inicio.Tletras.value=buscar(inicio.Tnombre.value);
	inicio.Tflores.value=inicio.Tletras.value;
	return;
	
}

function high(which2)
{
theobject=which2;
highlighting=setInterval("highlightit(theobject)",50);
	
}
function low(which2)
{
clearInterval(highlighting);
which2.filters.alpha.opacity=20;
}
function highlightit(cur2)
{
if(cur2.filters.alpha.opacity<100)
cur2.filters.alpha.opacity+=5
else if(window.highlighting)
clearInterval(highlighting)
}

		acum="c1"
		function muestra(capa){
		document.all[acum].style.visibility='hidden'		
	if	(document.all[capa].style.visibility=='visible'){
		document.all[capa].style.visibility='hidden'}
		else{document.all[capa].style.visibility='visible'}
		acum=capa
	}


	function genera(control, capa, Letra){
	if(control!=""&&control>0){
		document.all[capa].style.visibility='visible';
		cadena=" "
		for(i=0;i<control;i++){
			cadena=cadena+Letra
		}
		cadena=cadena+" "
	return cadena	
	} else{
		document.all[capa].style.visibility='hidden';
	return ""
	}

	}


		acum="c1"
		function muestra(capa){
		document.all[acum].style.visibility='hidden'		
	if	(document.all[capa].style.visibility=='visible'){
		document.all[capa].style.visibility='hidden'}
		else{document.all[capa].style.visibility='visible'}
		acum=capa
	}


var barajaNtradame=new CnstryMatrxNtrdame("../imagenes/ntradame/");

function CnstryMatrxNtrdame(camino){
	arreglo=0;
	this[arreglo++]=camino+"ntrdm1.gif";
	this[arreglo++]=camino+"ntrdm2.gif";
	this[arreglo++]=camino+"ntrdm3.gif";
	this[arreglo++]=camino+"ntrdm4.gif";
	this[arreglo++]=camino+"ntrdm5.gif";
	this[arreglo++]=camino+"ntrdm6.gif";
	this[arreglo++]=camino+"ntrdm7.gif";
	this[arreglo++]=camino+"ntrdm8.gif";
	this[arreglo++]=camino+"ntrdm9.gif";
	this[arreglo++]=camino+"ntrdm10.gif";
	this[arreglo++]=camino+"ntrdm11.gif";
	this[arreglo++]=camino+"ntrdm12.gif";
	this[arreglo++]=camino+"ntrdm13.gif";
	this[arreglo++]=camino+"ntrdm14.gif";
	this[arreglo++]=camino+"ntrdm15.gif";
	this[arreglo++]=camino+"ntrdm16.gif";
	this[arreglo++]=camino+"ntrdm17.gif";
	this[arreglo++]=camino+"ntrdm18.gif";
	this[arreglo++]=camino+"ntrdm19.gif";
	this[arreglo++]=camino+"ntrdm20.gif";
	this[arreglo++]=camino+"ntrdm21.gif";
	this[arreglo++]=camino+"ntrdm22.gif";
	this[arreglo++]=camino+"ntrdm23.gif";
	this[arreglo++]=camino+"ntrdm24.gif";
	this[arreglo++]=camino+"ntrdm25.gif";
	this[arreglo++]=camino+"ntrdm26.gif";
	this[arreglo++]=camino+"ntrdm27.gif";
	this[arreglo++]=camino+"ntrdm28.gif";
	this[arreglo++]=camino+"ntrdm29.gif";
	this[arreglo++]=camino+"ntrdm30.gif";
	this[arreglo++]=camino+"ntrdm31.gif";
	this[arreglo++]=camino+"ntrdm32.gif";
	this[arreglo++]=camino+"ntrdm33.gif";
	this[arreglo++]=camino+"ntrdm34.gif";
	this[arreglo++]=camino+"ntrdm35.gif";
	this[arreglo++]=camino+"ntrdm36.gif";
	this.N=arreglo;
}

	
	var ant_capa="lr4";
var capa="lr4";
function muestra_rayos(){
	ant_capa=capa;
	if(inicio.T2.value>3){
	switch(inicio.T2.value){
		case "4":
			capa="lr4";
			break;
		case "5":
			capa="lr5";
			break;
		case "6":
			capa="lr6";
			break;
		case "7":
			capa="lr7";
			break;
		case "8":
			capa="lr8";
			break;
		case "9":
			capa="lr9";
			break;
		case "10":
			capa="lr10";
			break;
		case "11":
			capa="lr11";
			break;
		case "12":
			capa="lr12";
			break;
		case "13":
			capa="lr13";
			break;
		case "14":
			capa="lr14";
			break;
		case "15":
			capa="lr15";
			break;
		case "16":
			capa="lr16";
			break;
		case "17":
			capa="lr17";
			break;
		case "18":
			capa="lr18";
		break;
		}
		}

	document.all[capa].style.visibility='visible';
	document.all[ant_capa].style.visibility='hidden';
	return;
	}



function genera(control,Letra){
	if(control!=""&&control>0){
		cadena=" "
		for(i=0;i<control;i++){
			cadena=cadena+Letra
		}
		cadena=cadena+" "
	return cadena	
	} else{return "";}

	}
	function delinicio(){
	inicio._a.value=0;
	inicio._b.value=0;
	inicio._c.value=0;
	inicio._d.value=0;
	inicio._e.value=0;
	inicio._f.value=0;
	inicio._g.value=0;
	inicio._h.value=0;
	inicio._i.value=0;
	inicio._j.value=0;
	inicio._k.value=0;
	inicio._l.value=0;
	inicio._m.value=0;
	inicio._n.value=0;
	inicio._nn.value=0;
	inicio._o.value=0;
	inicio._p.value=0;
	inicio._q.value=0;
	inicio._r.value=0;
	inicio._s.value=0;
	inicio._t.value=0;
	inicio._u.value=0;
	inicio._v.value=0;
	inicio._w.value=0;
	inicio._x.value=0;
	inicio._y.value=0;
	inicio._z.value=0;
	return;
	}

	
	function buscar(cadena){
		F_a =F_b =F_c =F_d =F_e =F_f =F_g =F_h =F_i =F_j =F_k =F_l =F_m =F_n =F_nn =F_o =F_p =F_q =F_r =F_s =F_t =F_u =F_v =F_w =F_x =F_y =F_z=0

	delinicio();
	control=cadena.length;
	cadena=cadena.toLowerCase();
	corrije=0;
	for(i=0;i<=control;i++){
		opc=cadena.charAt(i);
		switch(opc){
			
			case "á":
			case "à":
			case "â":
			case "ä":
			case "å":
			case "a":
				inicio._a.value=parseInt(inicio._a.value)+1;
				F_a=1;
				break;
				
			case "b":
				F_b=1;
				inicio._b.value=parseInt(inicio._b.value)+1;
				break;

			case "c":
				F_c=1;
				inicio._c.value=parseInt(inicio._c.value)+1;
				break;
				
			case "d":
				F_d=1;
				inicio._d.value=parseInt(inicio._d.value)+1;
				break;
				
			case "é":
			case "è":
			case "ê":
			case "ë":
			case "e":			
				F_e=1;
				inicio._e.value=parseInt(inicio._e.value)+1;
				break;
				
			case "f":
				F_f=1;
				inicio._f.value=parseInt(inicio._f.value)+1;
				break;
				
			case "g":
				F_g=1;
				inicio._g.value=parseInt(inicio._g.value)+1;
				break;
				
			case "h":
				F_h=1;
				inicio._h.value=parseInt(inicio._h.value)+1;
				break;
				
			case "í":
			case "ì":
			case "ï":
			case "î":
			case "i":
				F_i=1;
				inicio._i.value=parseInt(inicio._i.value)+1;
			break;
				
			case "j":
				F_j=1;
				inicio._j.value=parseInt(inicio._j.value)+1;
				break;
				
			case "k":
				F_k=1;
				inicio._k.value=parseInt(inicio._k.value)+1;
				break;
				
			case "l":
				F_l=1;
				inicio._l.value=parseInt(inicio._l.value)+1;
				break;
				
			case "m":
				F_m=1;
				inicio._m.value=parseInt(inicio._m.value)+1;
				break;
				
			case "n":
				F_n=1;
				inicio._n.value=parseInt(inicio._n.value)+1;
				break;
				
			case "ñ":
				F_nn=1;
				inicio._nn.value=parseInt(inicio._nn.value)+1;
				break;
				
			case "ó":
			case "ò":
			case "ö":
			case "ô":
			case "o":
				F_o=1;
				inicio._o.value=parseInt(inicio._o.value)+1;
			break;
				
			case "p":
				F_p=1;
				inicio._p.value=parseInt(inicio._p.value)+1;
				break;
				
			case "q":
				F_q=1;
				inicio._q.value=parseInt(inicio._q.value)+1;
				break;
				
			case "r":
				F_r=1;
				inicio._r.value=parseInt(inicio._r.value)+1;
				break;
				
			case "s":
				F_s=1;
				inicio._s.value=parseInt(inicio._s.value)+1;
				break;
				
			case "t":
				F_t=1;
				inicio._t.value=parseInt(inicio._t.value)+1;
				break;
				
			case "ú":
			case "ù":
			case "ü":
			case "û":
			case "u":
				F_u=1;
				inicio._u.value=parseInt(inicio._u.value)+1;
			break;
				
			case "v":
				F_v=1;
				inicio._v.value=parseInt(inicio._v.value)+1;
				break;
				
			case "w":
				F_w=1;
				inicio._w.value=parseInt(inicio._w.value)+1;
				break;
				
			case "x":
				F_x=1;
				inicio._x.value=parseInt(inicio._x.value)+1;
				break;
				
			case "y":
				F_y=1;
				inicio._y.value=parseInt(inicio._y.value)+1;
				break;
				
			case "z":
				F_z=1;
				inicio._z.value=parseInt(inicio._z.value)+1;
				break;
				
			default:
				corrije++;
				break;
			}
		}
	i-=corrije
	return i
	}

function fraserayo(frase){
var quotes=new Array()

//cambiar las frases
quotes[0]=0
quotes[1]=0
quotes[2]=0
quotes[3]=0
quotes[4]='Poder Total, Norte, Sur, Oriente, Occidente.'
quotes[5]='Poder Humano, Pr&aacute;ctico y Terrenal.'
quotes[6]='Evoluci&oacute;n, Inestabilidad, Emotividad.'
quotes[7]='Pensamiento Metaf&iacute;sico, Intelectualidad.'
quotes[8]='Espiritu Sedante, Comodidad Inata, Mente Pr&aacute;ctica.'
quotes[9]='Poder Multiplicador, Contiene todos los Rayos.'
quotes[10]='Potencial que Debe ser Activado, Escasa Energ&iacute;a.'
quotes[11]='Potencial Influenciable, Energ&iacute;a Manejable.'
quotes[12]='Energ&iacute;a Pasiva, Decisi&oacute;n Calculada.'
quotes[13]='Energ&iacute;a Activa, Sensibilidad Dominante.'
quotes[14]='Energ&iacute;a muy Activa, Poder Independiente.'
quotes[15]='Energ&iacute;a Poderosa, Fortaleza de Esp&iacute;ritu.'
quotes[16]='Energ&iacute;a M&uacute;ltiple, Actividad Constante.'
quotes[17]='Energ&iacute;a Extraordinaria no se Detiene ante Obstaculos.'
quotes[18]='S&uacute;per Energ&iacute;a Hiperactividad.'

document.write("<h3>",quotes[frase],"</h3>")
}

function submitfab(dept)
{
  fabulas.departamento.value=dept;
  document.fabulas.submit();
  return;
}

function xgrama(codigo){
	finalgrap.value=totalgrap.value;
	control=codigo.length-1;
	codigo=codigo.toLowerCase();
	corrije=0;
	xcodigo="";
	for(j=0;j<=control;j++){
		opc=codigo.charAt(j);
		switch(opc){
			case " ":
				xcodigo=xcodigo+" ";
				corrije++;
				break;
			case "á":
			case "à":
			case "â":
			case "ä":
			case "å":
			case "a":
				if(_a==1){
				;
				tablero.TA.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TA.value<=0){_a=0;}
				}
				break;
			case "b":
				if(_b==1){
				;
				tablero.TB.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TB.value<=0){_b=0;}
				}
				break;
			case "c":
				if(_c==1){
				;
				tablero.TC.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TC.value<=0){_c=0;}
				}
				break;
			case "d":
				if(_d==1){
				;
				tablero.TD.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TD.value<=0){_d=0;}
				}
				break;
			case "é":
			case "è":
			case "ê":
			case "ë":
			case "e":			
				if(_e==1){
				;
				tablero.TE.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TE.value<=0){_e=0;}
				}
				break;
			case "f":
				if(_f==1){
				;
				tablero.TF.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TF.value<=0){_f=0;}
				}
				break;
			case "g":
				if(_g==1){
				;
				tablero.TG.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TG.value<=0){_g=0;}
				}
				break;
			case "h":
				if(_h==1){
				;
				tablero.TH.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TH.value<=0){_h=0;}
				}
				break;
			case "í":
			case "ì":
			case "ï":
			case "î":
			case "i":
				if(_i==1){
				;
				tablero.TI.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TI.value<=0){_i=0;}
				}
				break;
			case "j":
				if(_j==1){
				;
				tablero.TJ.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TJ.value<=0){_j=0;}
				}
				break;
			case "k":
				if(_k==1){
				;
				tablero.TK.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TK.value<=0){_k=0;}
				}
				break;
			case "l":
				if(_l==1){
				;
				tablero.TL.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TL.value<=0){_l=0;}
				}
				break;
			case "m":
				if(_m==1){
				;
				tablero.TM.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TM.value<=0){_m=0;}
				}
				break;
			case "n":
				if(_n==1){
				;
				tablero.TN.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TN.value<=0){_n=0;}
				}
				break;
			case "ñ":
				if(_nn==1){
				;
				tablero.TNN.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TNN.value<=0){_n=0;}
				}
				break;
			case "ó":
			case "ò":
			case "ö":
			case "ô":
			case "o":
				if(_o==1){
				;
				tablero.TO.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TO.value<=0){_o=0;}
				}
				break;
			case "p":
				if(_p==1){
				;
				tablero.TP.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TP.value<=0){_p=0;}
				}
				break;
			case "q":
				if(_q==1){
				;
				tablero.TQ.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TQ.value<=0){_q=0;}
				}
				break;
			case "r":
				if(_r==1){
				;
				tablero.TR.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TR.value<=0){_r=0;}
				}
				break;
			case "s":
				if(_s==1){
				;
				tablero.TS.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TS.value<=0){_s=0;}
				}
				break;
			case "t":
				if(_t==1){
				;
				tablero.TT.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TT.value<=0){_t=0;}
				}
				break;
			case "ú":
			case "ù":
			case "ü":
			case "û":
			case "u":
				if(_u==1){
				;
				tablero.TU.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TU.value<=0){_u=0;}
				}
				break;
			case "v":
				if(_v==1){
				;
				tablero.TV.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TV.value<=0){_v=0;}
				}
				break;
			case "w":
				if(_w==1){
				;
				tablero.TW.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TW.value<=0){_w=0;}
				}
				break;
			case "x":
				if(_x==1){
				;
				tablero.TX.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TX.value<=0){_x=0;}
				}
				break;
			case "y":
				if(_y==1){
				;
				tablero.TY.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TY.value<=0){_y=0;}
				}
				break;
			case "z":
				if(_z==1){
				;
				tablero.TZ.value--;
				xcodigo=xcodigo+opc;
				if(tablero.TZ.value<=0){_z=0;}
				}
				break;
			default:
				break;
			}
		}
	finalgrap.value=totalgrap.value-j+corrije;
	return xcodigo;
}

	function bgrama(cadena){
		_a =_b =_c =_d =_e =_f =_g =_h =_i =_j =_k =_l =_m =_n =_nn =_o =_p =_q =_r =_s =_t =_u =_v =_w =_x =_y =_z=0		


			tablero.TA.value="";
			tablero.TB.value="";
			tablero.TC.value="";
			tablero.TD.value="";
			tablero.TE.value="";
			tablero.TF.value="";
			tablero.TG.value="";
			tablero.TH.value="";
			tablero.TI.value="";
			tablero.TJ.value="";
			tablero.TK.value="";
			tablero.TL.value="";
			tablero.TM.value="";
			tablero.TN.value="";
			tablero.TNN.value="";
			tablero.TO.value="";
			tablero.TP.value="";
			tablero.TQ.value="";
			tablero.TR.value="";
			tablero.TS.value="";
			tablero.TT.value="";
			tablero.TU.value="";
			tablero.TV.value="";
			tablero.TW.value="";
			tablero.TX.value="";
			tablero.TY.value="";
			tablero.TZ.value="";

	control=cadena.length
	cadena=cadena.toLowerCase()
	corrije=-1
	for(i=-1;i<control;i++){
		opc=cadena.charAt(i+1);
		switch(opc){
			case "á":
			case "à":
			case "â":
			case "ä":
			case "å":
			case "a":
				;
				tablero.TA.value++;
				_a=1;
				break;
			case "b":
				;
				tablero.TB.value++;
				_b=1;
				break;
			case "c":
				;
				tablero.TC.value++;
				_c=1;
				break;
			case "d":
				;
				tablero.TD.value++;
				_d=1;
				break;
			case "é":
			case "è":
			case "ê":
			case "ë":
			case "e":			
				;
				tablero.TE.value++;
				_e=1;
				break;
			case "f":
				;
				tablero.TF.value++;
				_f=1;
				break;
			case "g":
				;
				tablero.TG.value++;
				_g=1;
				break;
			case "h":
				;
				tablero.TH.value++;
				_h=1;
				break;
			case "í":
			case "ì":
			case "ï":
			case "î":
			case "i":
				;
				tablero.TI.value++;
				_i=1;
				break;
			case "j":
				;
				tablero.TJ.value++;
				_j=1;
				break;
			case "k":
				;
				tablero.TK.value++;
				_k=1;
				break;
			case "l":
				;
				tablero.TL.value++;
				_l=1;
				break;
			case "m":
				;
				tablero.TM.value++;
				_m=1;
				break;
			case "n":
				;
				tablero.TN.value++;
				_n=1;
				break;
			case "ñ":
				;
				tablero.TNN.value++;
				_nn=1;
				break;
			case "ó":
			case "ò":
			case "ö":
			case "ô":
			case "o":
				;
				tablero.TO.value++;
				_o=1;
				break;
			case "p":
				;
				tablero.TP.value++;
				_p=1;
				break;
			case "q":
				;
				tablero.TQ.value++;
				_q=1;
				break;
			case "r":
				;
				tablero.TR.value++;
				_r=1;
				break;
			case "s":
				;
				tablero.TS.value++;
				_s=1;
				break;
			case "t":
				;
				tablero.TT.value++;
				_t=1;
				break;
			case "ú":
			case "ù":
			case "ü":
			case "û":
			case "u":
				;
				tablero.TU.value++;
				_u=1;
				break;
			case "v":
				;
				tablero.TV.value++;
				_v=1;
				break;
			case "w":
				;
				tablero.TW.value++;
				_w=1;
				break;
			case "x":
				;
				tablero.TX.value++;
				_x=1;
				break;
			case "y":
				;
				tablero.TY.value++;
				_y=1;
				break;
			case "z":
				;
				tablero.TZ.value++;
				_z=1;
				break;
			default:
				corrije++;
				break;
			}
		}
	i=i-corrije
	totalgrap.value=i;
	finalgrap.value=totalgrap.value;
	if (i<=0){
		alert("tu nombre no es válido. intentalo de nuevo "+ i )
		return ""
		}
	}
window.onload=function(){
	carga_menu();
}
