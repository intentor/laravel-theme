<?php namespace Intentor\LaravelTheme;

use View;

/**
 * Form service provider.
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
		$this->app->bind(
			'intentor.laravel-theme',
			'App\Services\Theme'
		);
	}
}