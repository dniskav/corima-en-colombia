<?php
//------------------------------------------------------------------------------------
class palabraCl {
	public $palabra;
	public $sumLetras;
	private $tablaNum;

	public function palabra($pal)
	{
		$this->tablaNum["A"]=$this->tablaNum["J"]=$this->tablaNum["R"]=1;
		$this->tablaNum["B"]=$this->tablaNum["K"]=$this->tablaNum["S"]=2;
		$this->tablaNum["C"]=$this->tablaNum["L"]=$this->tablaNum["T"]=3;
		$this->tablaNum["D"]=$this->tablaNum["M"]=$this->tablaNum["U"]=4;
		$this->tablaNum["E"]=$this->tablaNum["N"]=$this->tablaNum["V"]=5;
		$this->tablaNum["F"]=$this->tablaNum["Ñ"]=$this->tablaNum["W"]=6;
		$this->tablaNum["G"]=$this->tablaNum["O"]=$this->tablaNum["X"]=7;
		$this->tablaNum["H"]=$this->tablaNum["P"]=$this->tablaNum["Y"]=8;
		$this->tablaNum["I"]=$this->tablaNum["Q"]=$this->tablaNum["Z"]=9;
		$this->palabra=$pal;
		$tmp=elimina_acentos($pal);
		$this->sumLT(strtoupper($tmp));
	}

	private function sumLT($pl)
	{
		$dato=0;
		for($i=0;$i<strlen($pl);$i++)
		{
			$dat= substr($pl,$i,1);
			if($dat!=" "){$dato+= $this->tablaNum[$dat];}
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