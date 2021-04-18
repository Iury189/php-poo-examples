<?php  

	class Moto extends Veiculo {

		public function Andar() { echo "Estou dando partida na motoclicleta. <br>"; }

		public function Caracteristicas() { echo "A moto é uma {$this->getModelo()} de cor {$this->getCor()} fabricada em {$this->getAno()}. <br>"; }
	}
	
?>
