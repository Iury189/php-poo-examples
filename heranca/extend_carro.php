<?php  
	
	class Carro extends Veiculo {
		
		private function Parabrisa(){
			echo 'Parabrisa do poçante funcionando. <br>';
		}

		public function ViewParabrisa(){
			$this->Parabrisa();
		}
	}

?>
