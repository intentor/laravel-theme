<?php namespace Intentor\LaravelTheme;

/**
 * File view finder used to add themes.
 */
class FileViewFinder extends \Illuminate\View\FileViewFinder {
	/**
	 * Add a location to the finder.
	 *
	 * @param  string  $location
	 * @return void
	 */
	public function addLocation($location) {
		//Any location will always be added as first.
		//This makes any theme path the first hint to locate views, then
		//overriding shared views.
		array_unshift($this->paths, $location);
	}
}