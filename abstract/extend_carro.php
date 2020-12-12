<?php  

	class Carro extends Veiculo {

		public function Andar(){
			echo "Estou dando partida no carro. <br>";
		}

		public function Caracteristicas(){
			echo "O carro é um {$this->getModelo()} de cor {$this->getCor()} fabricado em {$this->getAno()}. <br>";
		}
	}
	
?>