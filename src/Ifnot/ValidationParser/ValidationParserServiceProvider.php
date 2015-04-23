<?php namespace Ifnot\ValidationParser;

use Illuminate\Support\ServiceProvider;
use View;

/**
 * Class ValidationParserServiceProvider
 * @package Ifnot\ValidationParser
 */
class ValidationParserServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ifnot/validation-parser');

		View::addNamespace('ifnot/validation-parser', __DIR__.'/../../views');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
