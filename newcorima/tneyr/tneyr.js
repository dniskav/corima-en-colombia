// JavaScript Document
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


	
	function buscar(cadena){
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
			case "a":
				tablero.TA.value++;
				_a=1;
				break;
			case "b":
				tablero.TB.value++;
				_b=1;
				break;
			case "c":
				tablero.TC.value++;
				_c=1;
				break;
			case "d":
				tablero.TD.value++;
				_d=1;
				break;
			case "e":
				tablero.TE.value++;
				_e=1;
				break;
			case "f":
				tablero.TF.value++;
				_f=1;
				break;
			case "g":
				tablero.TG.value++;
				_g=1;
				break;
			case "h":
				tablero.TH.value++;
				_h=1;
				break;
			case "i":
				tablero.TI.value++;
				_i=1;
				break;
			case "j":
				tablero.TJ.value++;
				_j=1;
				break;
			case "k":
				tablero.TK.value++;
				_k=1;
				break;
			case "l":
				tablero.TL.value++;
				_l=1;
				break;
			case "m":
				tablero.TM.value++;
				_m=1;
				break;
			case "n":
				tablero.TN.value++;
				_n=1;
				break;
			case "ñ":
				tablero.TNN.value++;
				_nn=1;
				break;
			case "o":
				tablero.TO.value++;
				_o=1;
				break;
			case "p":
				tablero.TP.value++;
				_p=1;
				break;
			case "q":
				tablero.TQ.value++;
				_q=1;
				break;
			case "r":
				tablero.TR.value++;
				_r=1;
				break;
			case "s":
				tablero.TS.value++;
				_s=1;
				break;
			case "t":
				tablero.TT.value++;
				_t=1;
				break;
			case "u":
				tablero.TU.value++;
				_u=1;
				break;
			case "v":
				tablero.TV.value++;
				_v=1;
				break;
			case "w":
				tablero.TW.value++;
				_w=1;
				break;
			case "x":
				tablero.TX.value++;
				_x=1;
				break;
			case "y":
				tablero.TY.value++;
				_y=1;
				break;
			case "z":
				tablero.TZ.value++;
				_z=1;
				break;
			default:
				corrije++;
				break;
			}
			inicio.T2.value=_a +_b +_c +_d +_e +_f +_g +_h +_i +_j +_k +_l +_m +_n + _nn +_o +_p +_q +_r +_s +_t +_u +_v +_w +_x +_y +_z;	
		}
	i=i-corrije
	if (i<=0){
		alert("tu nombre no es válido. intentalo de nuevo "+ i )
		return ""
		}
	muestra_rayos();
	tablero.TA.focus()
	return i
	}

