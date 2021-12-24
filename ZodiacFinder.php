<?php
class ZodiacFinder{
	public $day;
	public $month;
	public $zodiac;
	
	//constructor
	public function __construct($day, $month){
		$this->day = $day;
		$this->month = $month;
	}
	
	//takes $this->month and chooses appropriate comparison function 
	public function zodiacFinder(){	
		switch ($this->month){

			// Capricorn - Aquarius
			case 1:
				$this->capricornAquarius($this->day);
			break;
			
			//Aquarius - Pisces
			case 2:
				$this->aquariusPisces($this->day);
			break;
			
			//Pisces - Aries
			case 3:
				$this->piscesAries($this->day);
			break;
			
			//Aries - Taurus
			case 4:
				$this->ariesTaurus($this->day);
			break;
			
			//Taurus - Gemini 
			case 5:
				$this->taurusGemini($this->day);
			break;
			
			//Gemini - Cancer
			case 6:
				$this->geminiCancer($this->day);
			break;
			
			//Cancer - Leo
			case 7:
				$this->cancerLeo($this->day);
			break;
			
			//Leo - Virgo
			case 8:
				$this->leoVirgo($this->day);
			break;
			
			//Virgo - Libra
			case 9:
				$this->virgoLibra($this->day);
			break;
			
			//Libra - Scorpio
			case 10:
				$this->libraScorpio($this->day);
			break;
			
			//Scorpio - Sagittarius
			case 11:
				$this->scorpioSagittarius($this->day);
			break;
			
			//Sagittarius - Capricorn
			case 12:
				$this->sagittariusCapricorn($this->day);
			break;
		}
	}
	
	//useless getter because __get
	//but atleast the thought counts 
	/*
	public function getZodiac(){
		return $this->zodiac;
	}
	*/
	
	//proper toString
	public function __toString(){
		
		return $this->zodiac;
	}
	
	//zodiac determining functions by comparing the 
	//last day of one zodiac sign with the sign next to it.
	private function capricornAquarius($day){
		//Capricorn - Aquarius
		if($day<=19){
			//Capricorn
			$this->zodiac = "Capricorn";
		}
		else{
			//Aquarius
			$this->zodiac = "Aquarius";
		}
	}
	private function aquariusPisces($day){
		//Aquarius - Pisces
		if($day<=18){
			//Aquarius
			$this->zodiac = "Aquarius";
		}
		else{
			//Pisces
			$this->zodiac = "Pisces";
		}
	}
	private function piscesAries($day){
		//Pisces - Aries
		if($day<=20){
			//Pisces
			$this->zodiac = "Pisces";
		}
		else{
			//Aries
			$this->zodiac = "Aries";
		}
	}
	private function ariesTaurus($day){
		//Aries - Taurus
		if($day<=19){
			//Aries
			$this->zodiac = "Aries";
		}
		else{
			//Taurus
			$this->zodiac = "Taurus";
		}
	}
	private function taurusGemini($day){
		//Taurus - Gemini
		if($day<=20){
			//Taurus
			$this->zodiac = "Taurus";
		}
		else{
			//Gemini
			$this->zodiac = "Gemini";
		}
	}
	private function geminiCancer($day){
		//Gemini - Cancer
		if($day<=20){
			//Gemini
			$this->zodiac = "Gemini";
		}
		else{
			//Cancer
			$this->zodiac = "Cancer";
		}
	}
	private function cancerLeo($day){
		//Cancer - Leo
		if($day<=22){
			//Cancer
			$this->zodiac = "Cancer";
		}
		else{
			//Leo
			$this->zodiac = "Leo";
		}
	}
	private function leoVirgo($day){
		//Leo - Virgo
		if($day<=22){
			//Leo
			$this->zodiac = "Leo";
		}
		else{
			//Virgo
			$this->zodiac = "Virgo";
		}
	}
	private function virgoLibra($day){
		//Virgo - Libra
		if($day<=22){
			//Virgo
			$this->zodiac = "Virgo";
		}
		else{
			//Libra
			$this->zodiac = "Libra";
		}
	}
	private function libraScorpio($day){
		//Libra - Scorpio
		if($day<=22){
			//Libra
			$this->zodiac = "Libra";
		}
		else{
			//Scorpio
			$this->zodiac = "Scorpio";
		}
	}
	private function scorpioSagittarius($day){
		//Scorpio - Sagittarius
		if($day<=21){
			//Scorpio
			$this->zodiac = "Scorpio";
		}
		else{
			//Sagittarius
			$this->zodiac = "Sagittarius";
		}
	}
	private function sagittariusCapricorn($day){
		//Sagittarius - Capricorn
		if($day<=21){
			//Sagittarius
			$this->zodiac = "Sagittarius";
		}
		else{
			//Capricorn
			$this->zodiac = "Capricorn";
		}
	}

}

?>