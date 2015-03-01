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
	}

?>