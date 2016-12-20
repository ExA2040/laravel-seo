<?php

namespace ExA2040\LaravelSEO;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class SeoServiceProvider extends LaravelServiceProvider {

  use \Illuminate\Console\AppNamespaceDetectorTrait;

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
    $this->handleMigrations();
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    // Register events for view and like
    return array();
  }
  private function handleMigrations() {
    $this->publishes([
      realpath(__DIR__.'/migrations') => $this->app->databasePath().'/migrations',
    ], 'migrations');
  }
}
