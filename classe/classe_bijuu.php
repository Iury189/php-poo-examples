<?php

	class Bijuu {
		
		public $raca, $tipo, $cor;

		public function __construct($raca,$tipo,$cor){
			$this->raca = $raca;
			$this->tipo = $tipo;
			$this->cor = $cor;
		}
		
		public function Caracteristicas(){
			echo "A bijuu é uma {$this->raca} de {$this->tipo} de cor {$this->cor}.<br>";
		}

	}

?>
