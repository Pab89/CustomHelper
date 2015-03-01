<?php

	namespace Milkwood\CustomHelper;
	
	use Illuminate\Support\Facades\Facade;

	class CH extends Facade {

	    protected static function getFacadeAccessor() { return 'CH'; }

	}	

?>