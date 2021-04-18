<?php  
	
	class Veiculo {

		public $modelo, $cor, $ano;

		public function __construct($modelo,$cor,$ano){
			$this->modelo = $modelo;
			$this->cor = $cor;
			$this->ano = $ano;
		}

		public function Andar() { echo "Em movimento. <br>"; }

		public function Parar() { echo "Parado. <br>"; }
	}

?>