<?php  

	class Dante extends DevilHunter{

		public function Falar() { echo "Let's rock!!! <br>"; }

		private function Armory() { echo "My sword is {$this->getSword()} and my weapons are {$this->getGun()}. <br>"; }

		protected function Legacy(){ echo "My Legacy. <br>"; }

		public function View() { $this->Armory(); $this->Legacy(); }
	}

?>
