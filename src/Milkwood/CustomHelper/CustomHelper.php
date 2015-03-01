<?php

	namespace Milkwood\CustomHelper;

	class CustomHelper{

		public function slugify($stringToSlug){
		
			$stringToSlug = trim($stringToSlug);
			$stringToSlug = strtolower($stringToSlug);
			$stringToSlug = str_replace([' '], ['_'], $stringToSlug);
			$stringToSlug = str_replace(['æ','ø','å'], ['ae','oe','aa'], $stringToSlug);
			$stringToSlug = str_replace(['@','.'], ['aaa','-'], $stringToSlug);
			return $stringToSlug;
		
		}

		public function getActionWithNamespace($action){
		
			return $this->addTextToStringIfNotFound('App\Http\Controllers\\',$action);

		
		}

		// Add text in front of a string if the text is not found within the string
		public function addTextToStringIfNotFound($needle,$haystack){
		
			return (strpos($haystack, $needle) !== false) ? $haystack : $needle . $haystack;
		
		}
	}

?>