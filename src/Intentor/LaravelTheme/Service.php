<?php namespace Intentor\LaravelTheme;

use View;

/**
 * Manages app themes.
 * 
 * This service adds a new views' location, so the views for the theme can be loaded.
 */
class Service {
	/** File finder. */
	protected $finder;
	/** Current theme name. */
	protected $currentTheme;
	/** Theme options. */
	protected $options = [
		'theme_path' => 'resources/themes',
		'views_path' => 'views'
	];
	
	/**
	 * Constructs this instance.
	 */
	public function __construct() {
		$this->finder = app('view.finder');
		View::setFinder($this->finder);
	}
	
	/**
	 * Gets the current theme name. 
	 * 
	 * @return string
	 */
	public function name() {
		return $this->currentTheme;
	}
	
	/**
	 * Get the path for views.
	 * 
	 * @return string;
	 */
	public function viewPath() {
		return $this->options['theme_path'].'/'.$this->name().'/'.$this->options['views_path'];
	}
	
	/**
	 * Gets a path to an asset.
	 * 
	 * @param string @path Path to the asset.
	 * @return string;
	 */
	public function asset($path) {
		return asset($this->options['theme_path'].'/'.$this->name().'/'.$path);
	}

	/**
	 * Sets the theme.
	 * 
	 * @param string $name Theme name.
	 * @param array $options Theme options.
	 */
	public function set($name, array $options = []) {
		$this->currentTheme = $name;
		$this->options = array_merge($this->options, $options);
		
		$this->finder->addLocation(base_path($this->viewPath()));
	}
}