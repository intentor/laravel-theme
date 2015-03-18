<?php namespace Intentor\LaravelTheme;

use View;

/**
 * Theme service provider.
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register() {
		//Overrides the default view finder.
		$this->app['view.finder'] = $this->app->share(function($app) {
			$paths = View::getFinder()->getPaths();
			return new FileViewFinder($app['files'], $paths);
		});
		View::setFinder(app('view.finder'));

		//Binds the service.
		$this->app->bind(
			'intentor.laravel-theme',
			'Intentor\LaravelTheme\Service'
		);
	}
}