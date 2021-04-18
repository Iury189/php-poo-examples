<?php  
	
	class Veiculo {

		private $modelo, $cor, $ano;

		public function getModelo() {return $this->$modelo; }

		public function getCor() {return $this->$cor; }

		public function getAno() {return $this->$ano; }

		public function setModelo($modelo) { $this->$modelo = $modelo; }

		public function setCor($cor) { $this->$cor = $cor; }

		public function setAno($ano) { $this->$ano = $ano; }

		public function __construct($modelo,$cor,$ano){ $this->setModelo($modelo); $this->setCor($cor); $this->setAno($ano); }

		public function Andar() { echo "Em movimento. <br>"; }

		public function Parar() { echo "Parado. <br>"; }
	}

?>