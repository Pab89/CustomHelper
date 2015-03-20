<?php

	namespace Milkwood\CustomHelper;

	class CustomHelper{

		public function getPercentFromTwoNumbers($number1,$number2,$decimalCount = 0){
		
			if($number2 == 0){
				return 0 . "%";
			}
			
			return $this->numberFormat($number1 / $number2 * 100, $decimalCount). '%';
		}

		public function getActionWithNamespace($action){
		
			return $this->addTextToStringIfNotFound('App\Http\Controllers\\',$action);

		
		}

		public function danishFloatToFloat($danishFloat){
		
			return str_replace(',','.',$danishFloat);
		
		}

		public function numberFormat($number,$decimalCount){
			
			return number_format( $number, $decimalCount, ',','.');
		
		}

		// Add text in front of a string if the text is not found within the string
		public function addTextToStringIfNotFound($needle,$haystack){
		
			return (strpos($haystack, $needle) !== false) ? $haystack : $needle . $haystack;
		
		}


		public function average($totalValue,$count){
			
			if($count == 0 || $totalValue == 0){
				return 0;
			}
			return $totalValue / $count;
		
		}

		public function standardDeviation(array $a, $sample = false) {
				$n = count($a);
		        if( $n < 2){
		        	return 0;
		        }

		        $mean = array_sum($a) / $n;
		        $carry = 0.0;
		        foreach ($a as $val) {
		            $d = ((double) $val) - $mean;
		            $carry += $d * $d;
		        };
		        if ($sample) {
		           --$n;
		        }
		        return sqrt($carry / $n);
		    }
	}

?>