/**
 * SWFObject v1.4.4: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 *
 * SWFObject is (c) 2006 Geoff Stearns and is released under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * **SWFObject is the SWF embed script formerly known as FlashObject. The name was changed for
 *   legal reasons.
 */
 function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
 
 
if(typeof deconcept=="undefined"){var deconcept=new Object();}
if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}
if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}
deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a,_b){if(!document.getElementById){return;}
this.DETECT_KEY=_b?_b:"detectflash";
this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);
this.params=new Object();
this.variables=new Object();
this.attributes=new Array();
if(_1){this.setAttribute("swf",_1);}
if(id){this.setAttribute("id",id);}
if(w){this.setAttribute("width",w);}
if(h){this.setAttribute("height",h);}
if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}
this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();
if(c){this.addParam("bgcolor",c);}
var q=_8?_8:"high";
this.addParam("quality",q);
this.setAttribute("useExpressInstall",_7);
this.setAttribute("doExpressInstall",false);
var _d=(_9)?_9:window.location;
this.setAttribute("xiRedirectUrl",_d);
this.setAttribute("redirectUrl","");
if(_a){this.setAttribute("redirectUrl",_a);}};
deconcept.SWFObject.prototype={setAttribute:function(_e,_f){
this.attributes[_e]=_f;
},getAttribute:function(_10){
return this.attributes[_10];
},addParam:function(_11,_12){
this.params[_11]=_12;
},getParams:function(){
return this.params;
},addVariable:function(_13,_14){
this.variables[_13]=_14;
},getVariable:function(_15){
return this.variables[_15];
},getVariables:function(){
return this.variables;
},getVariablePairs:function(){
var _16=new Array();
var key;
var _18=this.getVariables();
for(key in _18){_16.push(key+"="+_18[key]);}
return _16;},getSWFHTML:function(){var _19="";
if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){
if(this.getAttribute("doExpressInstall")){
this.addVariable("MMplayerType","PlugIn");}
_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\"";
_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";
var _1a=this.getParams();
for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}
var _1c=this.getVariablePairs().join("&");
if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";
}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");}
_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\">";
_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";
var _1d=this.getParams();
for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}
var _1f=this.getVariablePairs().join("&");
if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}
return _19;
},write:function(_20){
if(this.getAttribute("useExpressInstall")){
var _21=new deconcept.PlayerVersion([6,0,65]);
if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){
this.setAttribute("doExpressInstall",true);
this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));
document.title=document.title.slice(0,47)+" - Flash Player Installation";
this.addVariable("MMdoctitle",document.title);}}
if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){
var n=(typeof _20=="string")?document.getElementById(_20):_20;
n.innerHTML=this.getSWFHTML();return true;
}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}
return false;}};
deconcept.SWFObjectUtil.getPlayerVersion=function(){
var _23=new deconcept.PlayerVersion([0,0,0]);
if(navigator.plugins&&navigator.mimeTypes.length){
var x=navigator.plugins["Shockwave Flash"];
if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}
}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}
catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}
catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}
catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}
return _23;};
deconcept.PlayerVersion=function(_27){
this.major=_27[0]!=null?parseInt(_27[0]):0;
this.minor=_27[1]!=null?parseInt(_27[1]):0;
this.rev=_27[2]!=null?parseInt(_27[2]):0;
};
deconcept.PlayerVersion.prototype.versionIsValid=function(fv){
if(this.major<fv.major){return false;}
if(this.major>fv.major){return true;}
if(this.minor<fv.minor){return false;}
if(this.minor>fv.minor){return true;}
if(this.rev<fv.rev){
return false;
}return true;};
deconcept.util={getRequestParameter:function(_29){
var q=document.location.search||document.location.hash;
if(q){var _2b=q.substring(1).split("&");
for(var i=0;i<_2b.length;i++){
if(_2b[i].substring(0,_2b[i].indexOf("="))==_29){
return _2b[i].substring((_2b[i].indexOf("=")+1));}}}
return "";}};
deconcept.SWFObjectUtil.cleanupSWFs=function(){if(window.opera||!document.all){return;}
var _2d=document.getElementsByTagName("OBJECT");
for(var i=0;i<_2d.length;i++){_2d[i].style.display="none";for(var x in _2d[i]){
if(typeof _2d[i][x]=="function"){_2d[i][x]=function(){};}}}};
deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};
__flash_savedUnloadHandler=function(){};
if(typeof window.onunload=="function"){
var _30=window.onunload;
window.onunload=function(){
deconcept.SWFObjectUtil.cleanupSWFs();_30();};
}else{window.onunload=deconcept.SWFObjectUtil.cleanupSWFs;}};
if(typeof window.onbeforeunload=="function"){
var oldBeforeUnload=window.onbeforeunload;
window.onbeforeunload=function(){
deconcept.SWFObjectUtil.prepUnload();
oldBeforeUnload();};
}else{window.onbeforeunload=deconcept.SWFObjectUtil.prepUnload;}
if(Array.prototype.push==null){
Array.prototype.push=function(_31){
this[this.length]=_31;
return this.length;};}
var getQueryParamValue=deconcept.util.getRequestParameter;
var FlashObject=deconcept.SWFObject;
var SWFObject=deconcept.SWFObject;


//



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

function mensaje_corima(){
	if (document.all){
		document.write('<marquee direction="up" scrollAmount='+speed+' style="width:'+marqueewidth+';height:'+marqueeheight+'">'+marqueecontents+'</marquee>');
	}
	
}

function regenerate(){
	window.location.reload()
}

function regenerate2(){
	if (document.layers){
		setTimeout("window.onresize=regenerate",450)
		intializemarquee()
	}
}

function intializemarquee(){
	document.cmarquee01.document.cmarquee02.document.write(marqueecontents)
	document.cmarquee01.document.cmarquee02.document.close()
	thelength=document.cmarquee01.document.cmarquee02.document.height
	scrollit()
}

function scrollit(){
	if (document.cmarquee01.document.cmarquee02.top>=thelength*(-1)){
		document.cmarquee01.document.cmarquee02.top-=speed
		setTimeout("scrollit()",100)
	}
	else{
		document.cmarquee01.document.cmarquee02.top=marqueeheight
		scrollit()
	}
}



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

function titulo() {
document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0); 
refresco=setTimeout("titulo()",200);}
titulo();

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

function mcor(){
	inicio.nmis.value=numeronueve(inicio.totdia.value+inicio.totmes.value+inicio.tottown.value+inicio.Tanno.value);
	inicio.nper.value=numerology(inicio.Tnombre.value);
	inicio.Tletras.value=buscar(inicio.Tnombre.value);
	inicio.Trayos.value=F_a +F_b +F_c +F_d +F_e +F_f +F_g +F_h +F_i +F_j +F_k +F_l +F_m +F_n + F_nn +F_o +F_p +F_q +F_r +F_s +F_t +F_u +F_v +F_w +F_x +F_y +F_z;	
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

var cjesus_Imagenes=new CnstryMatrxCjesus("../imagenes/cjesus/");

function CnstryMatrxCjesus(camino)
{
  cartas=0;
  this[cartas++]=camino+"1.jpg";
  this[cartas++]=camino+"2.jpg";
  this[cartas++]=camino+"3.jpg";
  this[cartas++]=camino+"4.jpg";
  this[cartas++]=camino+"5.jpg";
  this[cartas++]=camino+"6.jpg";
  this[cartas++]=camino+"7.jpg";
  this[cartas++]=camino+"8.jpg";
  this[cartas++]=camino+"9.jpg";
  this[cartas++]=camino+"10.jpg";
  this[cartas++]=camino+"11.jpg";
  this[cartas++]=camino+"12.jpg";
  this[cartas++]=camino+"13.jpg";
  this[cartas++]=camino+"14.jpg";
  this[cartas++]=camino+"15.jpg";
  this[cartas++]=camino+"16.jpg";
  this[cartas++]=camino+"17.jpg";
  this[cartas++]=camino+"18.jpg";
  this[cartas++]=camino+"19.jpg";
  this[cartas++]=camino+"20.jpg";
  this[cartas++]=camino+"21.jpg";
  this[cartas++]=camino+"22.jpg";
  this[cartas++]=camino+"23.jpg";
  this[cartas++]=camino+"24.jpg";
  this[cartas++]=camino+"25.jpg";
  this[cartas++]=camino+"26.jpg";
  this[cartas++]=camino+"27.jpg";
  this[cartas++]=camino+"28.jpg";
  this[cartas++]=camino+"29.jpg";
  this[cartas++]=camino+"30.jpg";
  this[cartas++]=camino+"31.jpg";
  this[cartas++]=camino+"32.jpg";
  this[cartas++]=camino+"33.jpg";
  this[cartas++]=camino+"34.jpg";
  this[cartas++]=camino+"35.jpg";
  this[cartas++]=camino+"36.jpg";
  this[cartas++]=camino+"37.jpg";
  this[cartas++]=camino+"38.jpg";
  this[cartas++]=camino+"39.jpg";
  this[cartas++]=camino+"40.jpg";
  this[cartas++]=camino+"41.jpg";
  this[cartas++]=camino+"42.jpg";
  this[cartas++]=camino+"43.jpg";
  this[cartas++]=camino+"44.jpg";
  this[cartas++]=camino+"45.jpg";
  this[cartas++]=camino+"46.jpg";
  this[cartas++]=camino+"47.jpg";
  this[cartas++]=camino+"48.jpg";
  this[cartas++]=camino+"49.jpg";
  this[cartas++]=camino+"50.jpg";
  this[cartas++]=camino+"51.jpg";
  this[cartas++]=camino+"52.jpg";
  this[cartas++]=camino+"53.jpg";
  this[cartas++]=camino+"54.jpg";
  this.N=cartas;
  
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

	function LanzaCarta(baraja){
	do{
	aleatorio=Math.floor(Math.random() * baraja.N);
	dato = baraja[aleatorio];
	}while(dato==0);
	baraja[aleatorio]=0;
	document.write("<img src="+dato+">");
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

function ini_gramas(){
		anagrama=document.getElementById("anagrama");
		tablero=document.getElementById("tablero");
		T1=document.getElementById("T1");
		finalgrap=document.getElementById("finalgrap");
		totalgrap=document.getElementById("totalgrap");
 
			TA=document.getElementById("TA");
			TB=document.getElementById("TB");
			TC=document.getElementById("TC");
			TD=document.getElementById("TD");
			TE=document.getElementById("TE");
			TF=document.getElementById("TF");
			TG=document.getElementById("TG");
			TH=document.getElementById("TH");
			TI=document.getElementById("TI");
			TJ=document.getElementById("TJ");
			TK=document.getElementById("TK");
			TL=document.getElementById("TL");
			TM=document.getElementById("TM");
			TN=document.getElementById("TN");
			TNN=document.getElementById("TNN");
			TO=document.getElementById("TO");
			TP=document.getElementById("TP");
			TQ=document.getElementById("TQ");
			TR=document.getElementById("TR");
			TS=document.getElementById("TS");
			TT=document.getElementById("TT");
			TU=document.getElementById("TU");
			TV=document.getElementById("TV");
			TW=document.getElementById("TW");
			TX=document.getElementById("TX");
			TY=document.getElementById("TY");
			TZ=document.getElementById("TZ");
}
function xgrama(codigo){
	ini_gramas();
	bgrama(T1.value);
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
				TA.value--;
				xcodigo=xcodigo+opc;
				if(TA.value<=0){_a=0;}
				}
				break;
			case "b":
				if(_b==1){
				;
				TB.value--;
				xcodigo=xcodigo+opc;
				if(TB.value<=0){_b=0;}
				}
				break;
			case "c":
				if(_c==1){
				;
				TC.value--;
				xcodigo=xcodigo+opc;
				if(TC.value<=0){_c=0;}
				}
				break;
			case "d":
				if(_d==1){
				;
				TD.value--;
				xcodigo=xcodigo+opc;
				if(TD.value<=0){_d=0;}
				}
				break;
			case "é":
			case "è":
			case "ê":
			case "ë":
			case "e":			
				if(_e==1){
				;
				TE.value--;
				xcodigo=xcodigo+opc;
				if(TE.value<=0){_e=0;}
				}
				break;
			case "f":
				if(_f==1){
				;
				TF.value--;
				xcodigo=xcodigo+opc;
				if(TF.value<=0){_f=0;}
				}
				break;
			case "g":
				if(_g==1){
				;
				TG.value--;
				xcodigo=xcodigo+opc;
				if(TG.value<=0){_g=0;}
				}
				break;
			case "h":
				if(_h==1){
				;
				TH.value--;
				xcodigo=xcodigo+opc;
				if(TH.value<=0){_h=0;}
				}
				break;
			case "í":
			case "ì":
			case "ï":
			case "î":
			case "i":
				if(_i==1){
				;
				TI.value--;
				xcodigo=xcodigo+opc;
				if(TI.value<=0){_i=0;}
				}
				break;
			case "j":
				if(_j==1){
				;
				TJ.value--;
				xcodigo=xcodigo+opc;
				if(TJ.value<=0){_j=0;}
				}
				break;
			case "k":
				if(_k==1){
				;
				TK.value--;
				xcodigo=xcodigo+opc;
				if(TK.value<=0){_k=0;}
				}
				break;
			case "l":
				if(_l==1){
				;
				TL.value--;
				xcodigo=xcodigo+opc;
				if(TL.value<=0){_l=0;}
				}
				break;
			case "m":
				if(_m==1){
				;
				TM.value--;
				xcodigo=xcodigo+opc;
				if(TM.value<=0){_m=0;}
				}
				break;
			case "n":
				if(_n==1){
				;
				TN.value--;
				xcodigo=xcodigo+opc;
				if(TN.value<=0){_n=0;}
				}
				break;
			case "ñ":
				if(_nn==1){
				;
				TNN.value--;
				xcodigo=xcodigo+opc;
				if(TNN.value<=0){_n=0;}
				}
				break;
			case "ó":
			case "ò":
			case "ö":
			case "ô":
			case "o":
				if(_o==1){
				;
				TO.value--;
				xcodigo=xcodigo+opc;
				if(TO.value<=0){_o=0;}
				}
				break;
			case "p":
				if(_p==1){
				;
				TP.value--;
				xcodigo=xcodigo+opc;
				if(TP.value<=0){_p=0;}
				}
				break;
			case "q":
				if(_q==1){
				;
				TQ.value--;
				xcodigo=xcodigo+opc;
				if(TQ.value<=0){_q=0;}
				}
				break;
			case "r":
				if(_r==1){
				;
				TR.value--;
				xcodigo=xcodigo+opc;
				if(TR.value<=0){_r=0;}
				}
				break;
			case "s":
				if(_s==1){
				;
				TS.value--;
				xcodigo=xcodigo+opc;
				if(TS.value<=0){_s=0;}
				}
				break;
			case "t":
				if(_t==1){
				;
				TT.value--;
				xcodigo=xcodigo+opc;
				if(TT.value<=0){_t=0;}
				}
				break;
			case "ú":
			case "ù":
			case "ü":
			case "û":
			case "u":
				if(_u==1){
				;
				TU.value--;
				xcodigo=xcodigo+opc;
				if(TU.value<=0){_u=0;}
				}
				break;
			case "v":
				if(_v==1){
				;
				TV.value--;
				xcodigo=xcodigo+opc;
				if(TV.value<=0){_v=0;}
				}
				break;
			case "w":
				if(_w==1){
				;
				TW.value--;
				xcodigo=xcodigo+opc;
				if(TW.value<=0){_w=0;}
				}
				break;
			case "x":
				if(_x==1){
				;
				TX.value--;
				xcodigo=xcodigo+opc;
				if(TX.value<=0){_x=0;}
				}
				break;
			case "y":
				if(_y==1){
				;
				TY.value--;
				xcodigo=xcodigo+opc;
				if(TY.value<=0){_y=0;}
				}
				break;
			case "z":
				if(_z==1){
				;
				TZ.value--;
				xcodigo=xcodigo+opc;
				if(TZ.value<=0){_z=0;}
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
		ini_gramas();
		anagrama.value="";
		_a =_b =_c =_d =_e =_f =_g =_h =_i =_j =_k =_l =_m =_n =_nn =_o =_p =_q =_r =_s =_t =_u =_v =_w =_x =_y =_z=0		
			TA.value=TB.value=TC.value=TD.value=TE.value=TF.value=TG.value=TH.value=TI.value=TJ.value=TK.value=TL.value=TM.value=TN.value=TNN.value=TO.value=TP.value=TQ.value=TR.value=TS.value=TT.value=TU.value=TV.value=TW.value=TX.value=TY.value=TZ.value=0;

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
				TA.value++;
				_a=1;
				break;
			case "b":
				;
				TB.value++;
				_b=1;
				break;
			case "c":
				;
				TC.value++;
				_c=1;
				break;
			case "d":
				;
				TD.value++;
				_d=1;
				break;
			case "é":
			case "è":
			case "ê":
			case "ë":
			case "e":			
				;
				TE.value++;
				_e=1;
				break;
			case "f":
				;
				TF.value++;
				_f=1;
				break;
			case "g":
				;
				TG.value++;
				_g=1;
				break;
			case "h":
				;
				TH.value++;
				_h=1;
				break;
			case "í":
			case "ì":
			case "ï":
			case "î":
			case "i":
				;
				TI.value++;
				_i=1;
				break;
			case "j":
				;
				TJ.value++;
				_j=1;
				break;
			case "k":
				;
				TK.value++;
				_k=1;
				break;
			case "l":
				;
				TL.value++;
				_l=1;
				break;
			case "m":
				;
				TM.value++;
				_m=1;
				break;
			case "n":
				;
				TN.value++;
				_n=1;
				break;
			case "ñ":
				;
				TNN.value++;
				_nn=1;
				break;
			case "ó":
			case "ò":
			case "ö":
			case "ô":
			case "o":
				;
				TO.value++;
				_o=1;
				break;
			case "p":
				;
				TP.value++;
				_p=1;
				break;
			case "q":
				;
				TQ.value++;
				_q=1;
				break;
			case "r":
				;
				TR.value++;
				_r=1;
				break;
			case "s":
				;
				TS.value++;
				_s=1;
				break;
			case "t":
				;
				TT.value++;
				_t=1;
				break;
			case "ú":
			case "ù":
			case "ü":
			case "û":
			case "u":
				;
				TU.value++;
				_u=1;
				break;
			case "v":
				;
				TV.value++;
				_v=1;
				break;
			case "w":
				;
				TW.value++;
				_w=1;
				break;
			case "x":
				;
				TX.value++;
				_x=1;
				break;
			case "y":
				;
				TY.value++;
				_y=1;
				break;
			case "z":
				;
				TZ.value++;
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
