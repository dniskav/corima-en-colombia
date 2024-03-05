<?php
//------------------------------------------------------------------------------------
class palabraCl {
	public $palabra;
	public $sumLetras;
	private $tablaNum;
	public $totLetras;
	public $rayos;
	public $tRayos;
	private $frases;
	public $frase;

	public function palabra($pal)
	{
		$this->tablaNum["A"]=$this->tablaNum["J"]=$this->tablaNum["R"]=1;
		$this->tablaNum["B"]=$this->tablaNum["K"]=$this->tablaNum["S"]=2;
		$this->tablaNum["C"]=$this->tablaNum["L"]=$this->tablaNum["T"]=3;
		$this->tablaNum["D"]=$this->tablaNum["M"]=$this->tablaNum["U"]=4;
		$this->tablaNum["E"]=$this->tablaNum["N"]=$this->tablaNum["V"]=5;
		$this->tablaNum["F"]=$this->tablaNum["NN"]=$this->tablaNum["W"]=6;
		$this->tablaNum["G"]=$this->tablaNum["O"]=$this->tablaNum["X"]=7;
		$this->tablaNum["H"]=$this->tablaNum["P"]=$this->tablaNum["Y"]=8;
		$this->tablaNum["I"]=$this->tablaNum["Q"]=$this->tablaNum["Z"]=9;
		$this->totLetras=0;
		$this->rayos=array();
		$this->tRayos=array();
		for($i=65;$i<=90;$i++){
			$this->rayos[chr($i)]=0;
		}
		$this->rayos["NN"]=0;
		//print_r($this->rayos);
		$this->frases=array();
		$this->frases[4]="Poder Total, Norte, Sur, Oriente, Occidente.";
		$this->frases[5]="Poder Humano, Pr&aacute;ctico y Terrenal";
		$this->frases[6]="Evoluci&oacute;n, Inestabilidad, Emotividad.";
		$this->frases[7]="Pensamiento Metaf&iacute;sico, Intelectualidad.";
		$this->frases[8]="Espiritu Sedante, Comodidad Inata, Mente Pr&aacute;ctica.";
		$this->frases[9]="Poder Multiplicador, Contiene todos los Rayos.";
		$this->frases[10]="Potencial que Debe ser Activado, Escasa Energ&iacute;a.";
		$this->frases[11]="Potencial Influenciable, Energ&iacute;a Manejable.";
		$this->frases[12]="Energ&iacute;a Pasiva, Decisi&oacute;n Calculada.";
		$this->frases[13]="Energ&iacute;a Activa, Sensibilidad Dominante.";
		$this->frases[14]="Energ&iacute;a muy Activa, Poder Independiente.";
		$this->frases[15]="Energ&iacute;a Poderosa, Fortaleza de Esp&iacute;ritu.";
		$this->frases[16]="Energ&iacute;a M&uacute;ltiple, Actividad Constante.";
		$this->frases[17]="Energ&iacute;a Extraordinaria no se Detiene ante Obstaculos.";
		$this->frases[18]="S&uacute;per Energ&iacute;a Hiperactividad";
		$this->palabra=$pal;
		$tmp=elimina_acentos($pal);
		$this->sumLT(strtoupper($tmp));
		$tmp=count($this->tRayos);
		$this->frase=$this->frases[$tmp];
	}

	private function sumLT($pl)
	{
		$dato=0;
		for($i=0;$i<strlen($pl);$i++)
		{
			$dat= substr($pl,$i,1);
			if($dat!=" "){
				$dato+= $this->tablaNum[$dat];
				$this->totLetras=$this->totLetras+1;
				$this->rayos[$dat]=$this->rayos[$dat]+1;
				if(!isset($this->tRayos[$dat])){
					$this->tRayos[$dat]=0;
				}
				$this->tRayos[$dat]=$this->tRayos[$dat]+1;
			}
		}
		$this->totNum($dato);
	}
	private function totNum($LetNum)
	{
		$cNum=new numeroCl();
		$cNum->valor($LetNum);
		$this->sumLetras=$cNum->sumaNum;
	}
}
//----------------------------------------------------------------------------
class numeroCl {
  public $numero;
  private $largo;
  public $sumaNum;
	public function valor($num)
	{
		$this->numero=$num;
		$this->largo=strlen($this->numero);
		$this->totNum();
	}
	private function totNum()
	{
		$acum=$this->numero;
		$tmpLr=$this->largo;
		$tmpStr=$this->numero;
		while(strlen($acum)>=2){
			$acum=0;
			for($i=0;$i <= $tmpLr ;$i++){
				$acum+=substr($tmpStr,$i,1);
			}
			$tmpLr=strlen($acum);
			$tmpStr=$acum;
		}
		$this->sumaNum=$acum;
	}
}
$totdia=new numeroCl();
$totdia->valor($_POST['tDia']);
$totmes=new numeroCl();
$totmes->valor($_POST['tMes']);
$ciudad=new palabraCl();
$ciudad->palabra($_POST['tCiudad']);
$nom= new palabraCl();
$nom->palabra(elimina_acentos($_POST['tNombre']));
$mTmp=$totdia->sumaNum . $totmes->sumaNum . $ciudad->sumLetras . $_POST['tAnno'];
$nMision= new numeroCl();
$nMision->valor($mTmp);

//-------------------------------------------------------------------------------------------
?>