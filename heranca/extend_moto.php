<?php  

	class Moto extends Veiculo {

		private function DarGrau(){
			echo 'Dando grau na moba. <br>';
		}

		public function ViewDarGrau(){
			$this->DarGrau();
		}
	}

?>
