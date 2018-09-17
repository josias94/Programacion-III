<?php
	function suma($num1,$num2){
		return $num1+$num2;
	}

	function potencia($num)
	{
		return pow($num, 2);
	}

	function Invertir($str)
	{
		$retorno;
		var_dump($str);
		
		for($i=strlen($str)-1; $i>=0; $i--)
		{
			$retorno .= $str[$i];
		}
		return $retorno;
	}

	function nose($str,$max)
	{
		if(strlen($str)<=$max)
		{
			$retorno;
			switch ($str)
			 {
				case 'recuperatorio':
				case 'parcial':
				case 'programacion':
					$retorno = 1; 
					break;
				default:
					$retorno = 0; 
					break;
			}
		}
		else
		{
			return "el string es mayor al maximo";
		}
		return $retorno;
	}

	function EsPar($num)
	{
		return !($num%2)?"TRUE":"FALSE";
	}

	function EsImpar($num)
	{
		return EsPar($num);
	}

	function MoverArchivo($origen,$destino)
	{
		copy($origen,$destino);
	}	
?>