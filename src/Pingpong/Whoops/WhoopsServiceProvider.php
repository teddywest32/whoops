<?php namespace Pingpong\Whoops;

use Whoops\Handler\PrettyPageHandler;
use Illuminate\Support\ServiceProvider;

class WhoopsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the package.
	 * 
	 * @return void 
	 */
	public function boot()
	{
		WhoopsHandler::handle($this->app['whoops.handler']);
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
		return array();
	}

}
